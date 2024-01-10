<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HistoryCustomerPoint;
use App\Models\Point;
use App\Models\Store;
use App\Models\User;
use App\Models\Brand;

use Intervention\Image\Facades\Image;

class PointController extends Controller
{
    public function index(){
        return view('owner.point');
    }

    public function submit(Request $request){
        $customMessages = [
            'note.required' => 'Note is required.',
            'nominal.required' => 'Price is required.',
            'image.required' => 'Image is required.',
            'image.max' => 'Maximum image size is 8 MB.',
            'image.mimes' => 'Not allowed.',
        ];
        $validated = [
            'note' => ['required'],
            'nominal' => ['required'],
            'image' => ['required']
        ];

        if($request->maxPoint >= 0){
            if($request->totalPointUser + $request->point > $request->maxPoint){
                $errorMessages['nominal'][0] = "The total points exceed the maximum.";
                return response()->json([
                    "error" => $errorMessages,
                ]);
            }
        }

        try {
            $request->validate($validated, $customMessages);
            if(!$request->image){
                $errorMessages['image'][0] = "Imaage is required";
                return response()->json([
                    "error" => $errorMessages,
                ]);
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $allErrorMessages = $e->validator->getMessageBag();
            $errorMessages = [];
            foreach ($allErrorMessages->toArray() as $key => $messages) {
                $errorMessages[$key] = $messages;
            }
            return response()->json([
                "error" => $errorMessages,
            ]);
        }
        $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $request->image));
        $pathToSave = storage_path('app/public/imagesPoint'); // Ganti dengan direktori yang sesuai
        $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
        $imagePath = $pathToSave . '/' . $imageName;
        $path = "imagesPoint/".$imageName;
        file_put_contents($imagePath, $imageData);

        // jika yg input admin utama
        if($request->role_id == 2){
            $store['id'] = 0;
            $sales['id'] = 0;
        }elseif($request->role_id == 3){
            $store = Store::where('user_id', $request->user_id)->first();
            $sales['id'] = 0;
        }else{
            $store['id'] = 0;
            $sales['id'] = $request->user_id;
        }

        $user = User::where([
            'id' => $request->detailCustomerId
        ])->first();

        $bussinessOwner = User::where(['subdomain_id'=> $user->subdomain_id, 'role_id' => 2])->first();
        $brand = Brand::where('user_id', $bussinessOwner->id)->first();

        $status = 0;
        if($request->role_id == 2){
            $status = 1;
        }

        $point = Point::create([
            'brand_id' => $brand->id,
            'user_id' => $request->detailCustomerId,
            'store_id' => $store['id'],
            'sales_id' => $sales['id'],
            'nominal' => $request->nominal,
            'point' => $request->point,
            'note' => $request->note,
            'image' => $path,
            'status' => $status,
        ]);

        if($request->role_id == 2){
            HistoryCustomerPoint::create([
                'point_id' => $point->id,
                'user_id' => $point->user_id,
                'description' => $point->note,
                'point' => $point->point,
                'is_income_point' => true,
            ]);

            $user = User::where([
                'id' => $point->user_id,
            ])->first();

            User::where([
                'id' => $point->user_id,
            ])->update([
                "total_point" => $user['total_point'] + $point->point
            ]);
        }

        return response()->json([
            "message" => 'success',
            "user_id" => $point->user_id,
        ]);
    }
}
