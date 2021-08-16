<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Modules\flight;
use App\Modules\where;
use App\Modules\from;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        /*$validation = $req->validate([
            'email' => 'required|min:5|max:50',
            'message' => 'required|min:5|max:50'
        ]); */
         
    }
    public function allData(Request $request){
        if($request->has('info')){
            $cities = where::where('city_id', 2419)->get();
            if($request->has('yesterday')){
                $data = flight::whereDate('time', Carbon::now()->yesterday()->toDateString())->whereIn('where_point_id', $cities)->get();
                return view("mainpage", ['data' => $data, 'info' => $request->info, 'yesterday' => $request->yesterday]);
                
            }
            elseif($request->has('tomorrow')){
                $data = flight::whereDate('time', Carbon::now()->tomorrow()->toDateString())->whereIn('where_point_id', $cities)->get();
                return view("mainpage", ['data' => $data, 'info' => $request->info, 'tomorrow' => $request->tomorrow]);
            }
            else{
                $data = flight::whereDate('time', Carbon::now()->toDateString())->whereIn('where_point_id', $cities)->get();
                return view("mainpage", ['data' => $data, 'info' => $request->info,]);
            }
        }
        else{
            
            $cities = from::where('city_id', 2419)->get();
            if($request->has('yesterday')){
                $data = flight::whereDate('time', Carbon::now()->yesterday()->toDateString())->whereIn('from_point_id', $cities)->get();
                return view("mainpage", ['data' => $data, 'info' => $request->info, 'yesterday' => $request->yesterday]);
                
            }
            elseif($request->has('tomorrow')){
                $data = flight::whereDate('time', Carbon::now()->tomorrow()->toDateString())->whereIn('from_point_id', $cities)->get();
                return view("mainpage", ['data' => $data, 'info' => $request->info, 'tomorrow' => $request->tomorrow]);
            }
            else{
                $data = flight::whereDate('time', Carbon::now()->toDateString())->whereIn('from_point_id', $cities)->get();
                return view("mainpage", ['data' => $data, 'info' => $request->info,]);
            }
            $data = flight::whereDate('time', Carbon::now())->whereIn('from_point_id', $cities)->get();
            return view("mainpage", ['data' => $data, 'info' => $request->info]);
        }
    }

}
