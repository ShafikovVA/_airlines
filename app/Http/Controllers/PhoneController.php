<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneRequest;
use Illuminate\Http\Request;
use App\Modules\phone;

class PhoneController extends Controller
{
    //
    public function submit(Request $req, PhoneRequest $req1){
      

        $phone = new phone();
        $num='';
        $toReplace = [' ',  '(', ')', '-'];
        $phone->phone = str_replace( $toReplace, '' , $req->input('phone'));
        $phone->save();
        return redirect()->route('About')->with("message", 's');
    }
    
}
