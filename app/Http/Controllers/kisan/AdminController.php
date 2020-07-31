<?php

namespace App\Http\Controllers\kisan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AdminController extends Controller
{
    //
   public function admin_dashboard()
   {
    return view('admin.admin_home');
   }
  

      public function farmers()
    {

      $farmers=DB::select('select * from add_farmer');
      return view('admin.farmers')->with('farmers',$farmers);
    }


     public function traders()
    {

      $traders=DB::select('select * from add_trader');
      return view('admin.traders')->with('traders',$traders);
    }

   public function traderbookingslots()
   {
    $traderbooked=DB::select('select * from bookfarmer');
      return view('admin.traderbookingslots')->with('traderbooked',$traderbooked);
   }

    public function addcrop()
    {
    	return view('admin.addcrop');
    }
   
     public function millshow()
     {
      $millshow=DB::select('select * from millslots');
      return view('admin.millshow')->with('millshow',$millshow);
 
     }

    public function admin_add_crop(Request $request)
    {
    	$district= $request->input('district');
      $mandal= $request->input('mandal');
      $crop= $request->input('crop');
      $crop_price= $request->input('crop_price');

       $crop=array("district"=>$district,"mandal"=>$mandal,"crop"=>$crop,
        "crop_price"=>$crop_price);
       DB::table('crop_price')->insert($crop);

       return redirect()->route('admin.addcrop')->with('success','Crop Prices Added Successfully');    
      }

      public function assignslot()
      {
          
      $fslot = DB::select('select * from add_farmer INNER JOIN bookslot ON add_farmer.idname=bookslot.bookid INNER JOIN add_trader ON add_trader.idname!=add_farmer.idname'); 


        /*$fslot=DB::select('SELECT add_farmer.farmarname,add_farmer.idname, add_farmer.address, addcrop.cropid, addcrop.expectdate
     FROM add_farmer
     INNER JOIN addcrop
     ON add_farmer.idname=addcrop.cropid;');  */
     return view('admin.assignslot')->with('fslot',$fslot);

      }
    
    public function millassign(Request $request)
    {

      $milltraderid=$request->input('mtraderid');

$assignslot=DB::table('add_trader')
             ->select('idname')
             ->where('idname','=',$milltraderid)
             ->first();


if ($milltraderid=$assignslot) {

 $mtraderid= $request->input('mtraderid');
 $mfarmerid= $request->input('mfarmerid');
 $mfarmername= $request->input('mfarmername');
 $mfarmerphone= $request->input('mfarmerphone');
 $mbookdate= $request->input('mbookdate');
 $mstate= $request->input('mstate');
 $mdistrict= $request->input('mdistrict');
 $mmandal= $request->input('mmandal');

  $slots=array("mtraderid"=>$mtraderid,"mfarmerid"=>$mfarmerid,"mfarmername"=>$mfarmername,"mfarmerphone"=>$mfarmerphone, "mbookdate"=>$mbookdate,
        "mstate"=>$mstate,"mdistrict"=>$mdistrict,"mmandal"=>$mmandal);
DB::table('millslots')->insert($slots);

return redirect()->route('admin.assignslot')->with('success','Mill Assigned Successfully');    
 }

 else {

return redirect()->route('admin.assignslot')->with('success','Mill Traders Not Found Enter Correct Mill TraderID ');
    
      }

    }

      

      

      


      

   
}
