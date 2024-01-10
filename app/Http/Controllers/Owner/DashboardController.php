<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Claim;
use App\Models\ClaimedVoucherGift;
use App\Models\Promotion;
use App\Models\User;
use App\Models\Point;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();

        $getSales = User::where([
            'subdomain_id' => auth()->user()->subdomain_id,
            'role_id' => 5
        ])->with(['salesPoints' => function ($query) {
            $query->where('created_at', '>=', now()->subMonths(12));
        }])->get();


        $data['sales'] = [];
        $data['maxValue'] = 0;

        foreach ($getSales as $index => $sales) {
            $points=0;
            foreach ($sales['salesPoints'] as $index1 => $point) {
                $points += $point['point'];
            }
            if($points > $data['maxValue']){
                $data['maxValue'] = $points;
            }
            $data['sales'][] = [
                'name' => $sales->name,
                'points' => $points,
            ];
        }

        $data['undeliveredGifts'] = ClaimedVoucherGift::where('brand_id', $brand['id'])
                                ->where('is_used', 1)
                                ->where('status', 0)
                                ->whereHas('claim', function ($query) {
                                    $query->where('claim_type_id', 2);
                                })
                                ->get();

        $claims = Claim::where([
            'brand_id' => $brand['id']
        ])->get();
        $promotions = Promotion::where([
            'brand_id' => $brand['id']
        ])->get();
        $today = date('Y-m-d');
        $data['expiredVouchers'] = [];
        $data['ongoingVouchers'] = [];
        $data['activeVouchers'] = [];
        $data['expiredGifts'] = [];
        $data['ongoingGifts'] = [];
        $data['activeGifts'] = [];
        $data['expiredPromotions'] = [];
        $data['ongoingPromotions'] = [];
        $data['activePromotions'] = [];
        foreach ($claims as $index => $claim) {
            if($claim['claim_type_id'] == 1){
                if($claim['status'] == false || $claim['end_date'] < $today){
                    $data['expiredVouchers'][] = $claim;
                }else{
                    if($claim['start_date'] > $today){
                        $data['ongoingVouchers'][] = $claim;
                    }else{
                        $data['activeVouchers'][] = $claim;
                    }
                }
            }else{
                if($claim['status'] == false || $claim['end_date'] < $today){
                    $data['expiredGifts'][] = $claim;
                }else{
                    if($claim['start_date'] > $today){
                        $data['ongoingGifts'][] = $claim;
                    }else{
                        $data['activeGifts'][] = $claim;
                    }
                }
            }
        }

        foreach ($promotions as $index => $promo) {
            if($promo['status'] == false || $promo['end_date'] < $today){
                $data['expiredPromotions'][] = $promo;
            }else{
                if($promo['start_date'] > $today){
                    $data['ongoingPromotions'][] = $promo;
                }else{
                    $data['activePromotions'][] = $promo;
                }
            }
        }


        $endDate = Carbon::now(); // Sesuaikan dengan zona waktu
        $endDate->setTimezone('UTC'); // Ganti 'UTC' dengan zona waktu yang sesuai

        $startDate = $endDate->copy()->subMonths(6);
        $startDate->setTimezone('UTC'); // Pastikan zona waktu sesuai di sini juga

        $vouchers = Claim::where(['brand_id' => $brand['id'], 'claim_type_id' => 1])->whereBetween('created_at', [$startDate, $endDate])->get();
        $gifts = Claim::where(['brand_id' => $brand['id'], 'claim_type_id' => 2])->whereBetween('created_at', [$startDate, $endDate])->get();
        $promotions = Promotion::where(['brand_id' => $brand['id']])->whereBetween('created_at', [$startDate, $endDate])->get();
        // Group data by month
        $groupedVouchers = $vouchers->groupBy(function ($item) {
            return $item->created_at->format('M');
        });
        $groupedGifts = $gifts->groupBy(function ($item) {
            return $item->created_at->format('M');
        });
        $groupedPromotions = $promotions->groupBy(function ($item) {
            return $item->created_at->format('M');
        });

        $groupedVouchers->toArray();
        $groupedGifts->toArray();
        $groupedPromotions->toArray();

        return view('owner.dashboard', $data);
    }

    public function getSales($month){
        $getSales = User::where([
            'subdomain_id' => auth()->user()->subdomain_id,
            'role_id' => 5
        ])->with(['salesPoints' => function ($query) use ($month) {
            $query->where('created_at', '>=', now()->subMonths($month));
        }])->get();


        $data['sales'] = [];

        foreach ($getSales as $index => $sales) {
            $points=0;
            foreach ($sales['salesPoints'] as $index1 => $point) {
                $points += $point['point'];
            }
            $data['sales'][] = [
                'name' => $sales->name,
                'points' => $points,
            ];
        }

        return response()->json([
            'data' => $data['sales'],
        ]);
    }

    public function getChart($filter_by){
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $endDate = Carbon::now(); // Sesuaikan dengan zona waktu
        $endDate->setTimezone('UTC'); // Ganti 'UTC' dengan zona waktu yang sesuai

        $startDate = $endDate->copy()->subMonths($filter_by);
        $startDate->setTimezone('UTC'); // Pastikan zona waktu sesuai di sini juga

        $points = Point::where(['brand_id' => $brand['id']])->whereBetween('created_at', [$startDate, $endDate])->get();
        // Group data by month
        $groupedPoints = $points->groupBy(function ($item) {
            return $item->created_at->format('F');
        });

        $groupedPoints->toArray();

        $nominal = [];
        $months = [];
        $points = [];
        foreach ($groupedPoints as $index => $month) {
            $total = 0;
            $point = 0;
            $months[] = $index;
            foreach ($month as $index2 => $data) {
                $point += $data['point'];
                $total += (int) preg_replace('/[^0-9]/', '', $data['nominal']);
            }
           $nominal[] = $total;
           $points[] = $point;
        }

        return response()->json([
            'message'=> 'success',
            'nominal' => $nominal,
            'months' => $months,
            'points' => $points,
        ], 200);
    }
}
