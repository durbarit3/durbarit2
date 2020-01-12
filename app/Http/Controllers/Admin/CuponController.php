<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cupon;
use Carbon\Carbon;
use Session;
use DB;

class CuponController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $allcupon=Cupon::where('is_deleted',0)->get();

    	return view('admin.ecommerce.cupon.all',compact('allcupon'));
    }
    public function add(){
    	return view('admin.ecommerce.cupon.add');
    }
    public function insert(Request $request){
        $insert=Cupon::insertGetId([
            'cupon_type'=>$request['cupon_type'],
            'cupon_code'=>$request['cupon_code'],
            'minimum_shopping'=>$request['minimum_shopping'],
            'product_id'=>json_encode($request['product_id']),
            'discount'=>$request['discount'],
            'discount_type'=>$request['discount_type'],
            'cupon_start_date'=>$request['cupon_start_date'],
            'cupon_end_date'=>$request['cupon_end_date'],
        ]);
        if($insert){
            $notification=array(
                'messege'=>'Cupon Insert Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification); 
            }else{
                $notification=array(
                'messege'=>'Cupon Insert Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
            }
    }
    // all cupon

    public function deactive($id){
        $deactive=Cupon::where('id',$id)->update([
            'status'=>'0',
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($deactive){
            $notification=array(
                'messege'=>'Cupon Deactive Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
            }else{
                $notification=array(
                'messege'=>'Cupon Deactive Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
            }
    }
    public function active($id){
         $deactive=Cupon::where('id',$id)->update([
            'status'=>'1',
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($deactive){
            $notification=array(
                'messege'=>'Cupon active Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
            }else{
                $notification=array(
                'messege'=>'Cupon active Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
            }
    }
    // softdelete
    public function softdelete($id){
            $softdelete=Cupon::where('id',$id)->update([
                'is_deleted'=>'1',
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            if($softdelete){
                $notification=array(
                'messege'=>'Cupon softdelete Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
            }else{
                $notification=array(
                'messege'=>'Cupon softdelete Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
            }
    }
// edit
    public function edit($id){
        $data=Cupon::where('id',$id)->first();
        $proid=json_decode($data->product_id);

        return view('admin.ecommerce.cupon.edit',compact('data','proid'));
    }

    // update
    public function update(Request $request){
         $id=$request->id;
         $update=Cupon::where('id',$id)->update([

            'cupon_type'=>$request['cupon_type'],
            'cupon_code'=>$request['cupon_code'],
            'minimum_shopping'=>$request['minimum_shopping'],
            'product_id'=>json_encode($request['product_id']),
            'discount'=>$request['discount'],
            'discount_type'=>$request['discount_type'],
            'cupon_start_date'=>$request['cupon_start_date'],
            'cupon_end_date'=>$request['cupon_end_date'],
            'updated_at'=>Carbon::now()->toDateTimeString(),

         ]);
         if($update){
            $notification=array(
                'messege'=>'Cupon Update Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
            }else{
                 $notification=array(
                'messege'=>'Cupon update Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
            }
    }

}
