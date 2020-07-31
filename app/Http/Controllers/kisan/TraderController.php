<?php

namespace App\Http\Controllers\kisan;

use App\Trader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class TraderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_trader()

    {
        return view('trader.add_trader');
        
    }
     public function trader_dashboard()

    {
        return view('trader.trader_home');
        
    }

   public function worktime()

    {
        return view('trader.worktime');
        
    }

    public function traderslot()
    {

      return view('trader.traderslot');
    }


     public function traderslotdisplay(Request $request)

       {

           $traderid=$request->input('traderid');

   $tslot=DB::select("select * from millslots where `mtraderid`='".$traderid."'"); 
   
        
    return view('trader.traderslotdisplay')->with('tslot',$tslot);
       
       }

public function traderbookfarmer()
{
  return view('trader.traderbookfarmer');
}

    public function bookfarmer(Request $request)
    {

          $fname= $request->input('fname');
         $wc= $request->input('weightcommodity');  
         $nc= $request->input('namecommodity');
         $rc= $request->input('recivecommodity');
         $pb= $request->input('priceperbag');
         $fp= $request->input('finalprice');
         
        $bookfarmer=array("fname"=>$fname,"weightcommodity"=>$wc,"namecommodity"=>$nc,
          "recivecommodity"=>$rc,"priceperbag"=>$pb,"finalprice"=>$fp);
         DB::table('bookfarmer')->insert($bookfarmer);

      return redirect()->route('trader.traderbookfarmer')->with('success','Booked   Successfully');
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function show(Trader $trader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function edit($trader)
    {
         $data = DB::select('select * from add_trader INNER JOIN users ON users.id=add_trader.user_id where `users`.`id`="'.$trader.'"');
        if ($data) {
           $trader = $data[0];
        }else{
            $trader = [];
        }
        // dd($farmer[0]);exit();
        return view('trader.edit_trader',compact('trader'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$trader)
    {
         $user = DB::select('select * from add_trader INNER JOIN users ON users.id=add_trader.user_id where `users`.`id`="'.$trader.'"');

         

   // user doesn't exist
           $user_id=$request->input('user_id');
            $ownertyp=$request->input('ownertyp');

              $proprietorname=$request->input('proprietorname');
               $gender=$request->input('gender');
                $state=$request->input('state');
                 $district=$request->input('district');
                $mandal=$request->input('mandal');
                $pincode=$request->input('pincode');
                 $dateofbirth=$request->input('dateofbirth');
                 $email=$request->input('email'); 
                $address=$request->input('address');
                $idtype=$request->input('idtype');
                if($request->input('idname') !== $user[0]->idname){
                      $idname=$request->input('idname');
                }
                $phone=$request->input('phone');
                 $phone2=$request->input('phone2');
                $millname=$request->input('millname');
                $yearofmill=$request->input('yearofmill');
                $milltype=$request->input('milltype');
               $milloperated=$request->input('milloperated');
               $millcapacity=$request->input('millcapacity');
               $millpancard=$request->input('millpancard');
               $gstnumber=$request->input('gstnumber');
               $spcblicence=$request->input('spcblicence');
               $spcbvalid=$request->input('spcbvalid');
               $milllicense=$request->input('milllicense');
               $validupto=$request->input('validupto');
               $milllocation=$request->input('milllocation');
                $bankname=$request->input('bankname');
               $acholdername=$request->input('acholdername');
                $accountno=$request->input('accountno');
                $ifsccode=$request->input('ifsccode');              
/*dd($request->all());exit(); */
$file=$request->file('passbook');
$extension=$file->getClientOriginalExtension();
$passbook='passbook'.time().'.'.$extension;
$file->move(public_path('/tdocuments'),$passbook);
                $getsms=$request->input('getsms');
                $getmail=$request->input('getmail');

 
              if($request->input('idname') !== $user[0]->idname){
                $data=array("user_id"=>Auth::id(),"ownertyp"=>$ownertyp,"proprietorname"=>$proprietorname,
              "gender"=>$gender,"state"=>$state,"district"=>$district,"mandal"=>$mandal,"pincode"=>$pincode
             ,"dateofbirth"=>$dateofbirth, "email"=>$email,"address"=>$address,"idtype"=>$idtype,"idname"=>$idname,"phone"=>$phone,"phone2"=>$phone2, "millname"=>$millname,"yearofmill"=>$yearofmill,"milltype"=>$milltype,"milloperated"=>$milloperated,"millcapacity"=>$millcapacity,"millpancard"=>$millpancard,"gstnumber"=>$gstnumber,"spcblicence"=>$spcblicence,"spcbvalid"=>$spcbvalid,"milllicense"=>$milllicense,"validupto"=>$validupto,"milllocation"=>$milllocation,"bankname"=>$bankname,"acholdername"=>$acholdername, "accountno"=>$accountno,"ifsccode"=>$ifsccode, "passbook"=>$passbook,"getsms"=>$getsms,"getmail"=>$getmail);
              }else{
                $data=array("user_id"=>Auth::id(),"ownertyp"=>$ownertyp,"proprietorname"=>$proprietorname,
            "gender"=>$gender,"state"=>$state,"district"=>$district,"mandal"=>$mandal,"pincode"=>$pincode
           ,"dateofbirth"=>$dateofbirth, "email"=>$email,"address"=>$address,"idtype"=>$idtype,"phone"=>$phone,"phone2"=>$phone2, "millname"=>$millname,"yearofmill"=>$yearofmill,"milltype"=>$milltype,"milloperated"=>$milloperated,"millcapacity"=>$millcapacity,"millpancard"=>$millpancard,"gstnumber"=>$gstnumber,"spcblicence"=>$spcblicence,"spcbvalid"=>$spcbvalid,"milllicense"=>$milllicense,"validupto"=>$validupto,"milllocation"=>$milllocation,"bankname"=>$bankname,"acholdername"=>$acholdername, "accountno"=>$accountno,"ifsccode"=>$ifsccode, "passbook"=>$passbook,"getsms"=>$getsms,"getmail"=>$getmail);
              }
           

DB::table('add_trader')->where('user_id',Auth::id())->update($data);

return redirect()->route('trader.trader_home')->with('success','Details Updated  Successfully');

 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trader $trader)
    {
        //
    }


public function added_trader(Request $request)
    {
   $adhar = $request->input('idname');
   $user = DB::table('add_trader')->where('idname',$adhar)->first();

  if ($user === null) {
   // user doesn't exist
           $user_id=$request->input('user_id');
            $ownertyp=$request->input('ownertyp');

              $proprietorname=$request->input('proprietorname');
               $gender=$request->input('gender');
                $state=$request->input('state');
                 $district=$request->input('district');
                $mandal=$request->input('mandal');
                $pincode=$request->input('pincode');
                 $dateofbirth=$request->input('dateofbirth');
                 $email=$request->input('email'); 
                $address=$request->input('address');
                $idtype=$request->input('idtype');
                $idname=$request->input('idname');
                $phone=$request->input('phone');
                 $phone2=$request->input('phone2');
                $millname=$request->input('millname');
                $yearofmill=$request->input('yearofmill');
                $milltype=$request->input('milltype');
               $milloperated=$request->input('milloperated');
               $millcapacity=$request->input('millcapacity');
               $millpancard=$request->input('millpancard');
               $gstnumber=$request->input('gstnumber');
               $spcblicence=$request->input('spcblicence');
               $spcbvalid=$request->input('spcbvalid');
               $milllicense=$request->input('milllicense');
               $validupto=$request->input('validupto');
               $milllocation=$request->input('milllocation');
                $bankname=$request->input('bankname');
               $acholdername=$request->input('acholdername');
                $accountno=$request->input('accountno');
                $ifsccode=$request->input('ifsccode');              
/*dd($request->all());exit(); */
$file=$request->file('passbook');
$extension=$file->getClientOriginalExtension();
$passbook='passbook'.time().'.'.$extension;
$file->move(public_path('/tdocuments'),$passbook);
                $getsms=$request->input('getsms');
                $getmail=$request->input('getmail');

 

           $data=array("user_id"=>Auth::id(),"ownertyp"=>$ownertyp,"proprietorname"=>$proprietorname,
            "gender"=>$gender,"state"=>$state,"district"=>$district,"mandal"=>$mandal,"pincode"=>$pincode
           ,"dateofbirth"=>$dateofbirth, "email"=>$email,"address"=>$address,"idtype"=>$idtype,"idname"=>$idname,"phone"=>$phone,"phone2"=>$phone2, "millname"=>$millname,"yearofmill"=>$yearofmill,"milltype"=>$milltype,"milloperated"=>$milloperated,"millcapacity"=>$millcapacity,"millpancard"=>$millpancard,"gstnumber"=>$gstnumber,"spcblicence"=>$spcblicence,"spcbvalid"=>$spcbvalid,"milllicense"=>$milllicense,"validupto"=>$validupto,"milllocation"=>$milllocation,"bankname"=>$bankname,"acholdername"=>$acholdername, "accountno"=>$accountno,"ifsccode"=>$ifsccode, "passbook"=>$passbook,"getsms"=>$getsms,"getmail"=>$getmail);

DB::table('add_trader')->insert($data);

return redirect()->route('trader.add_trader')->with('success','Registered Successfully');
}

else {
    return redirect()->route('trader.add_trader')->with('success','You Already Register');
    }


}


public function addworktime(Request $request)
{
  $traderid=$request->input('traderid');

$addworktime=DB::table('add_trader')
             ->select('idname')
             ->where('idname','=',$traderid)
             ->first();


if ($traderid=$addworktime) {

 $traderid= $request->input('traderid');
 $millstatus= $request->input('millstatus');
 $milltiming= $request->input('milltiming');
 

  $crop=array("traderid"=>$traderid,"millstatus"=>$millstatus,"milltiming"=>$milltiming);
DB::table('millworktime')->insert($crop);

return redirect()->route('trader.worktime')->with('success','Mill status and Timings Saved Successfully');    
 }

 else {

return redirect()->route('trader.add_trader')->with('success','Failed Because You are Not Registred ');
    
      }

}



}
