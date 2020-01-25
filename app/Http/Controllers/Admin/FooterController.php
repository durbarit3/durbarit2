<?php

namespace App\Http\Controllers\Admin;

use App\FooterOption;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    // showing footer page

    public function footerShow()
    {
            $footeroption = FooterOption::findOrFail(11); 
            return view('admin.setting.footeroption',compact('footeroption'));
    }


    // Update footer Option

    public function footerupdate(Request $request)
    {

        $id=$request->id;
       $update=FooterOption::where('id',$id)->update([
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'copyright'=>$request->copyright,
            'footer_text'=>$request->footer_text,

        ]);
        if (request()->hasFile('payment_image')) {
            $footer_img = request()->file('payment_image');
            $imagename = 11 . '.' . $footer_img->getClientOriginalExtension();
            Image::make($footer_img)->resize(333, 32)->save(base_path('public/uploads/footerpayment/' . $imagename), 100);
            FooterOption::where('id',$id)->update([
                'payment_image' => $imagename,
            ]);
        }
        if($update){
            $notification=array(
                'messege'=>'Update Success',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Update Faild',
                'alert-type'=>'error'
                 );
                return Redirect()->back()->with($notification);
        }
       


    }

    
}
