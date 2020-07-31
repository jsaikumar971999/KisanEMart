<?php

namespace App\Http\Controllers\kisan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CropController extends Controller
{
    //

    public function crop_price()
    {

    	$crop_price=DB::select('select * from crop_price');
    	return view('former.price_detailes')->with('crop_price',$crop_price);
    }

       public function page()
    {
        //
        $crop_price=DB::table('crop_price')->paginate(7);
        return view('former.price_detailes',compact('crop_price'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

}
