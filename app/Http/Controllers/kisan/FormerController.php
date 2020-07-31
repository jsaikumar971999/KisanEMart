<?php

namespace App\Http\Controllers\kisan;

use App\Addedfarmer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;


class FormerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('former.former_reg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function price_detailes()

    {
        //
        return view('former.price_detailes');
    }

    public function schemes()

    {
        //
        return view('former.govschemes');
    }

    public function crop_reg()

    {
        //
        return view('former.crop_reg');
    }


    public function bookslot()
    {
    return view('former.bookslot');
    }
    
     public function urgentslot()
    {
    return view('former.urgentslot');
    }

    public function myreg()
    {
    return view('former.myreg');
    }

 public function myregget()
    {
    return view('former.myregget');
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
     * @param  \App\Former  $former
     * @return \Illuminate\Http\Response
     */
    public function show(Former $former)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Former  $former
     * @return \Illuminate\Http\Response
     */
    public function edit($former)
    {
        $data = DB::select('select * from add_farmer INNER JOIN users ON users.id=add_farmer.user_id where `users`.`id`="'.$former.'"');
        if ($data) {
           $farmer = $data[0];
        }else{
            $farmer = [];
        }
        // dd($farmer[0]);exit();
        return view('former.edit_farmer',compact('farmer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Former  $former
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$former)
    {
        $user = DB::select('select * from add_farmer INNER JOIN users ON users.id=add_farmer.user_id where `users`.`id`="'.$former.'"');

 $farmarname = $request->input('farmarname');
 $gender = $request->input('gender');
 $address= $request->input('address');
 $state = $request->input('state');
 $district = $request->input('district');
 $mandal = $request->input('mandal');
 $pincode= $request->input('pincode');
 $dateofbirth = $request->input('dateofbirth');
 $email = $request->input('email');
 $idtype = $request->input('idtype');
 if($request->input('idname') !== $user[0]->idname){
    $idname= $request->input('idname');
 }
 $phone= $request->input('phone');
 $phone2= $request->input('phone2');
 

$file=$request->file('landcopy');
/*dd($request->all());exit(); */
$extension=$file->getClientOriginalExtension();
$filename=time().'.'.$extension;
$file->move(public_path('/documents'),$filename);
     

 $landakar= $request->input('landakar');
 $bankname = $request->input('bankname');
 $acholdername= $request->input('acholdername');
 
 $accountno= $request->input('accountno');
 $ifsccode= $request->input('ifsccode');


$file=$request->file('passbook');
/*dd($request->all());exit(); */
$extension=$file->getClientOriginalExtension();
$passbook='passbook'.time().'.'.$extension;
$file->move(public_path('/documents'),$filename);



 $getsms= $request->input('getsms');
 $getmail= $request->input('getmail');

    
        if($request->input('idname') !== $user[0]->idname){
            $data=array("farmarname"=>$farmarname,"gender"=>$gender,"address"=>$address,"state"=>$state,
            "district"=>$district,"mandal"=>$mandal,"pincode"=>$pincode,"dateofbirth"=>$dateofbirth,
            "email"=>$email,"idtype"=>$idtype,"idname"=>$idname,"phone"=>$phone,"phone2"=>$phone2,
    "landcopy"=>$filename,"landakar"=>$landakar,"bankname"=>$bankname,"acholdername"=>$acholdername,
            "accountno"=>$accountno,"ifsccode"=>$ifsccode,
            "passbook"=>$passbook,"getsms"=>$getsms,"getmail"=>$getmail);
            
        }else{
            $data=array("farmarname"=>$farmarname,"gender"=>$gender,"address"=>$address,"state"=>$state,
            "district"=>$district,"mandal"=>$mandal,"pincode"=>$pincode,"dateofbirth"=>$dateofbirth,
            "email"=>$email,"idtype"=>$idtype,"phone"=>$phone,"phone2"=>$phone2,
    "landcopy"=>$filename,"landakar"=>$landakar,"bankname"=>$bankname,"acholdername"=>$acholdername,
            "accountno"=>$accountno,"ifsccode"=>$ifsccode,
            "passbook"=>$passbook,"getsms"=>$getsms,"getmail"=>$getmail);
        }

       /* $user->update($data); */
       DB::table('add_farmer')->where('user_id',Auth::id())->update($data);      
        return redirect()->route('former.former_home')->with('success','Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Former  $former
     * @return \Illuminate\Http\Response
     */
    public function destroy(Former $former)
    {
        //
    }
   
   /* former */

   public function add_former()
   {
    return view('former.add_farmer');
   }

   public function benefits()
   {
    return view('former.benefits');
   }

   public function aboutus()
   {
    return view('former.aboutus');
   }
   public function contactus()
   {
    return view('former.contactus');
   }

  public function farmerdashboard()
   {
    return view('former.former_home');
   }


public function added_farmer(Request $request)
{


   $adhar = $request->input('idname');
   $user = DB::table('add_farmer')->where('idname',$adhar)->first();

  if ($user === null) {
   // user doesn't exist

 $farmarname = $request->input('farmarname');
 $gender = $request->input('gender');
 $address= $request->input('address');
 $state = $request->input('state');
 $district = $request->input('district');
 $mandal = $request->input('mandal');
 $pincode= $request->input('pincode');
 $dateofbirth = $request->input('dateofbirth');
 $email = $request->input('email');
 $idtype = $request->input('idtype');
 $idname= $request->input('idname');
 $phone= $request->input('phone');
 $phone2= $request->input('phone2');
 

$file=$request->file('landcopy');
/*dd($request->all());exit(); */
$extension=$file->getClientOriginalExtension();
$filename=time().'.'.$extension;
$file->move(public_path('/documents'),$filename);
     

 $landakar= $request->input('landakar');
 $bankname = $request->input('bankname');
 $acholdername= $request->input('acholdername');
 
 $accountno= $request->input('accountno');
 $ifsccode= $request->input('ifsccode');


$file=$request->file('passbook');
/*dd($request->all());exit(); */
$extension=$file->getClientOriginalExtension();
$passbook='passbook'.time().'.'.$extension;
$file->move(public_path('/documents'),$filename);



 $getsms= $request->input('getsms');
 $getmail= $request->input('getmail');



        $data=array("user_id"=>Auth::id(),"farmarname"=>$farmarname,"gender"=>$gender,"address"=>$address,"state"=>$state,
            "district"=>$district,"mandal"=>$mandal,"pincode"=>$pincode,"dateofbirth"=>$dateofbirth,
            "email"=>$email,"idtype"=>$idtype,"idname"=>$idname,"phone"=>$phone,"phone2"=>$phone2,
    "landcopy"=>$filename,"landakar"=>$landakar,"bankname"=>$bankname,"acholdername"=>$acholdername,
            "accountno"=>$accountno,"ifsccode"=>$ifsccode,
            "passbook"=>$passbook,"getsms"=>$getsms,"getmail"=>$getmail);

DB::table('add_farmer')->insert($data);

return redirect()->route('former.add_farmer')->with('success','Registered Successfully');
}

else {
    return redirect()->route('former.add_farmer')->with('success','You Already Register');
    }
}





public function add_crop(Request $request)
{

 
$cropid=$request->input('cropid');

$addcrop=DB::table('add_farmer')
             ->select('idname')
             ->where('idname','=',$cropid)
             ->first();


if ($cropid=$addcrop) {

 $cropid= $request->input('cropid');
 $cropname= $request->input('cropname');
 $landcultivate= $request->input('landcultivate');
 $expectdate= $request->input('expectdate');

  $crop=array("cropid"=>$cropid,"cropname"=>$cropname,"landcultivate"=>$landcultivate,
        "expectdate"=>$expectdate);
DB::table('addcrop')->insert($crop);

return redirect()->route('former.crop_reg')->with('success','crop Added Successfully');    
 }

 else {

return redirect()->route('former.add_farmer')->with('success','Failed Added Crop Because You Are Not Registered ');
    
      }
}





public function bookedslot(Request $request)
{

    $bookid=$request->input('bookid');

$bookslot=DB::table('add_farmer')
             ->select('idname')
             ->where('idname','=',$bookid)
             ->first();


if ($bookid=$bookslot) {

 $bookid= $request->input('bookid');
 $adhar= $request->input('adharno');
 $expdate= $request->input('expectdate');

  $bookslot=array("bookid"=>$bookid,"adharno"=>$adhar,"expectdate"=>$expdate);
DB::table('bookslot')->insert($bookslot);

return redirect()->route('former.bookslot')->with('success','Slot Booked Successfully');    
 }

 else {

return redirect()->route('former.add_farmer')->with('success','Failed book Slot  Because You Are Not Registered Please Fill  Below Form ');
    
      }
}



public function addurgentslot(Request $request)

{
        $urgentid=$request->input('farmerid');

$ubookslot=DB::table('add_farmer')
             ->select('idname')
             ->where('idname','=',$urgentid)
             ->first();


if ($urgentid=$ubookslot) {

 $uid= $request->input('farmerid');
 $con1= $request->input('condition1');
 $con2= $request->input('condition2');

  $bookslot=array("farmerid"=>$uid,"condition1"=>$con1,"condition2"=>$con2);
DB::table('urgentslot')->insert($bookslot);

return redirect()->route('former.urgentslot')->with('success','Urgent Slot Booked Successfully');    
 }

 else {

return redirect()->route('former.add_farmer')->with('success','Failed booked UrgentSlot. Because You Are Not Registered Please Fill  Below Form ');
    
      }   
}


public function showmyreg(Request $request)

{  

       $myid=$request->input('myregid');

$myregid=DB::table('add_farmer')
             ->select('idname')
             ->where('idname','=',$myid)
             ->first();


if ($myid=$myregid) {
      $myid=$request->input('myregid');

   $crop_price=DB::select("select * from addcrop where `cropid`='".$myid."'"); 
   
        
    return view('former.myregget')->with('crop_price',$crop_price);
       
 }

 else {

return redirect()->route('former.add_farmer')->with('success','You dont have any crops. Because You Are Not Registered');
    
      } 

     

      
}
 








}