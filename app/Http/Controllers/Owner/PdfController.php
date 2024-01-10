<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HistoryCustomerPoint;
use App\Models\User;
use PDF;

class PdfController extends Controller
{
    public function generatePDFCustomer(){
        if(request()->get('data') !=null){
            $data = decrypt(request()->get('data'));
            if(!isset($data['print'])){
                return abort(404);
            }
        }else{
            return abort(404);
        }
        $customers = User::where([
            'subdomain_id' => auth()->user()->subdomain_id,
            'role_id' => 4
        ])->with(['address'])->get();
        $pdf = PDF::loadView('owner.pdfCustomer', compact('customers'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('owner.pdfCustomer');
    }
    public function generatePDF(){
        if(request()->get('data') !=null){
            $data = decrypt(request()->get('data'));
            if(isset($data['user_id'])){
                $points = HistoryCustomerPoint::where(['user_id' => $data['user_id']])->with(['points', 'points.store'])->get()->toArray();
                $detailCustomer = User::where('id', $data['user_id'])->first();
                $initial = generateInitials($detailCustomer['name']);
            }else{
                return abort(404);
            }
        }else{
            return abort(404);
        }
        // dd($points[1]['points']['note']);
        $pdf = PDF::loadView('owner.pdf', compact('points', 'detailCustomer', 'initial'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('owner.pdf');
    }
}
