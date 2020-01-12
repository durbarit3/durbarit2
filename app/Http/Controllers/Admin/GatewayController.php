<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class GatewayController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function PaymentGateway()
    {
    	$payment=DB::table('gateway')->first();
    	return view('admin.setting.gateway',compact('payment'));
    }

    public function StripeUpdate(Request $request)
    {
          $id=$request->id;
          $data=array();
          $data['str_publish_key']=$request->str_publish_key;
          $data['str_secret_key']=$request->str_secret_key;
         DB::table('gateway')->where('id',$id)->update($data);
         $notification=array(
                         'messege'=>'Successfully  Updated',
                         'alert-type'=>'success'
          );
       return Redirect()->back()->with($notification);  
    }

    public function PaypalUpdate(Request $request)
    {
          $id=$request->id;
          $data=array();
          $data['pay_client_id']=$request->pay_client_id;
          $data['pay_secret_key']=$request->pay_secret_key;
         DB::table('gateway')->where('id',$id)->update($data);
         $notification=array(
                         'messege'=>'Successfully  Updated',
                         'alert-type'=>'success'
          );
       return Redirect()->back()->with($notification);  
    }

    public function twocheckoutUpdate(Request $request)
    {
          $id=$request->id;
          $data=array();
          $data['twocheck_publish_key']=$request->twocheck_publish_key;
          $data['twocheck_secret_key']=$request->twocheck_secret_key;
         DB::table('gateway')->where('id',$id)->update($data);
         $notification=array(
                         'messege'=>'Successfully  Updated',
                         'alert-type'=>'success'
          );
       return Redirect()->back()->with($notification);  
    }

    public function MollieUpdate(Request $request)
    {
          $id=$request->id;
          $data=array();
          $data['mol_secret_key']=$request->mol_secret_key;
          $data['mol_publish_key']=$request->mol_publish_key;
         DB::table('gateway')->where('id',$id)->update($data);
         $notification=array(
                         'messege'=>'Successfully  Updated',
                         'alert-type'=>'success'
          );
       return Redirect()->back()->with($notification);  
    }



}
