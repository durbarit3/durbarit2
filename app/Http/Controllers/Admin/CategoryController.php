<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;
use Session;
use Image;

class CategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // all category
    public function index(){

    	$allcategory=Category::where('is_deleted',0)->get();
    	return view('admin.ecommerce.category.all',compact('allcategory'));
    }

    // insert
    public function insert(Request $request){

    	$title=strtolower($request['cate_name']);
    	$cate_slug=$request['cate_slug'];
    	$inputslug=preg_replace('/[^A-Za-z0-9-]+/', '-',$cate_slug);
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);

        $data = new Category;
        $data->cate_name=$request->cate_name;
        $data->section_id=$request->section_id;
        $data->cate_tag=$request->cate_tag;

        if($cate_slug){
            $data->cate_slug=$inputslug;
        }else{
             $data->cate_slug=$slug;
        }
        if($request->hasFile('header_image')){
                $image=$request->file('header_image');
                $ImageName='header_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,180)->save('public/uploads/category/'.$ImageName);
                $data->header_image =$ImageName;
        }
        if($request->hasFile('top_image')){
                $image=$request->file('top_image');
                $ImageName='top_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1170,220)->save('public/uploads/category/'.$ImageName);
                $data->top_image =$ImageName;
        }
        if($request->hasFile('side_image')){
                $image=$request->file('side_image');
                $ImageName='side_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(220,427)->save('public/uploads/category/'.$ImageName);
                $data->side_image =$ImageName;
        }
        if($request->hasFile('pic')){
                $image=$request->file('pic');
                $ImageName='pic_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(270,270)->save('public/uploads/category/'.$ImageName);
                $data->cate_image =$ImageName;
        }
        if($request->hasFile('icon')){
                $image=$request->file('icon');
                $ImageName='icon'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                $data->cate_icon =$ImageName;
        }

        if($data->save()){
            $notification=array(
            'messege'=>'Site Banner Insert Successfully',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
       }
       else{
            $notification=array(
            'messege'=>'Site Banner Insert Faild',
            'alert-type'=>'error'
             );
            return Redirect()->back()->with($notification);
       }


 
   }



   public function edit($cate_id){
       $data=Category::where('id',$cate_id)->first();
        return json_encode($data);
   }


// update Category
   public function update(Request $request,$id){

    //return $request;

        $title=strtolower($request['cate_name']);
        $cate_slug=$request['cate_slug'];
        $inputslug=preg_replace('/[^A-Za-z0-9-]+/', '-',$cate_slug);
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);


        $header_image=$request->old_header_image;
        $top_image=$request->old_top_image;
        $side_image=$request->old_side_image;
        $image_image=$request->old_image;
        $icon_image=$request->old_icon;

        


        $data = Category::findOrFail($id);
        $data->cate_name=$request->cate_name;
        $data->section_id=$request->section_id;
        $data->cate_tag=$request->cate_tag;

        if($cate_slug){
            $data->cate_slug=$inputslug;
        }else{
             $data->cate_slug=$slug;
        }
        if($request->hasFile('header_image')){
            if($header_image){
                unlink('public/uploads/category/'.$header_image);
                $image=$request->file('header_image');
                $ImageName='header_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,180)->save('public/uploads/category/'.$ImageName);
                $data->header_image =$ImageName;
            }else{
                $image=$request->file('header_image');
                $ImageName='header_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,180)->save('public/uploads/category/'.$ImageName);
                $data->header_image =$ImageName;
            }
                
        }
        if($request->hasFile('top_image')){
            if($top_image){
                unlink('public/uploads/category/'.$top_image);
                $image=$request->file('top_image');
                $ImageName='top_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1170,220)->save('public/uploads/category/'.$ImageName);
                $data->top_image =$ImageName;
            }else{
                $image=$request->file('top_image');
                $ImageName='top_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1170,220)->save('public/uploads/category/'.$ImageName);
                $data->top_image =$ImageName;
            }
                
        }
        if($request->hasFile('side_image')){
            if($side_image){
                unlink('public/uploads/category/'.$side_image);
                $image=$request->file('side_image');
                $ImageName='side_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(220,427)->save('public/uploads/category/'.$ImageName);
                $data->side_image =$ImageName;
            }else{
                $image=$request->file('side_image');
                $ImageName='side_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(220,427)->save('public/uploads/category/'.$ImageName);
                $data->side_image =$ImageName;
            }
                
        }
        if($request->hasFile('pic')){
            if($image_image){
                unlink('public/uploads/category/'.$image_image);
                $image=$request->file('pic');
                $ImageName='pic_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(270,270)->save('public/uploads/category/'.$ImageName);
                $data->cate_image =$ImageName;
            }else{
                $image=$request->file('pic');
                $ImageName='pic_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(270,270)->save('public/uploads/category/'.$ImageName);
                $data->cate_image =$ImageName;
            }
                
        }
        if($request->hasFile('icon')){
            if($icon_image){
                unlink('public/uploads/category/'.$icon_image); 
                $image=$request->file('icon');
                $ImageName='icon'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                $data->cate_icon =$ImageName;
            }else{
                
                $image=$request->file('icon');
                $ImageName='icon'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                $data->cate_icon =$ImageName;
            }
                
        }

        if($data->save()){
            $notification=array(
            'messege'=>'Site Banner Update Successfully',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
       }
       else{
            $notification=array(
            'messege'=>'Site Banner update Faild',
            'alert-type'=>'error'
             );
            return Redirect()->back()->with($notification);
       }



  

   }

	   // soft-delete
	   public function softdelete($id){
	   		$softdelete=Category::where('id',$id)->Update([
	   			'is_deleted'=>'1',
	   			'updated_at'=>Carbon::now()->toDateTimeString(),
	   		]);

	   		if($softdelete){
	   			$notification=array(
            	'messege'=>'Category Softdelete Success',
            	'alert-type'=>'success'
            		 );
           		return Redirect()->back()->with($notification); 
	   		}else{
		   		$notification=array(
	            'messege'=>'Category Softdelete Faild',
	            'alert-type'=>'error'
	             );
	           return Redirect()->back()->with($notification); 
	   		}
	   }
	   // multiple soft delete

	   public function multiplesoftdelete(Request $request){
                    $deleteid=$request->Input('delid');
                     if($deleteid){
                     $delet=Category::whereIn('id',$deleteid)->update([
                     		'is_deleted'=>'1',
                     		'updated_at'=>Carbon::now()->toDateTimeString(),
                     ]);
                     if($delet){
                         $notification=array(
                            'messege'=>'success',
                            'alert-type'=>'success'
                             );
                         return redirect()->back()->with($notification);
                     }else{
                         $notification=array(
                            'messege'=>'error',
                            'alert-type'=>'error'
                             );
                         return redirect()->back()->with($notification);
                        }
                     }else{
                        $notification=array(
                            'messege'=>'Nothing To Delete',
                            'alert-type'=>'info'
                             );
                         return redirect()->back()->with($notification);
                     }
              
            }
	   public function deactive($id){
		   	$deactive=Category::where('id',$id)->update([
	            'cate_status'=>'0',
	            'updated_at'=>Carbon::now()->toDateTimeString(),

	        ]);

	        if($deactive){
	            $notification=array(
	                'messege'=>'active success',
	                'alert-type'=>'success'
	                 );
	             return redirect()->back()->with($notification);
	        }
	        else{
	            $notification=array(
	                'messege'=>'active Faild',
	                'alert-type'=>'error'
	                 );
	             return redirect()->back()->with($notification);
	        }
	   }
	   public function active($id){
	   	$deactive=Category::where('id',$id)->update([
	            'cate_status'=>'1',
	            'updated_at'=>Carbon::now()->toDateTimeString(),

	        ]);

	        if($deactive){
	            $notification=array(
	                'messege'=>'Deactive success',
	                'alert-type'=>'success'
	                 );
	             return redirect()->back()->with($notification);
	        }
	        else{
	            $notification=array(
	                'messege'=>'Deactive Faild',
	                'alert-type'=>'error'
	                 );
	             return redirect()->back()->with($notification);
	        }
	   }

	   // delete single
	   public function delete($id){
	   		$post=Category::where('id',$id)->first();
            $image=$post->cate_image;
            $cate_icon=$post->cate_icon;


        if($image && $cate_icon){
            unlink('public/uploads/category/'.$image);
            unlink('public/uploads/category/'.$cate_icon);
         $post=Category::where('id',$id)->first()->delete();
         if($post){
            $notification=array(
                'messege'=>'Heard delete success',
                'alert-type'=>'success'
                 );
             return redirect()->back()->with($notification);
         }else{
            if($post){
            $notification=array(
                'messege'=>'Heard delete Faild',
                'alert-type'=>'error'
                 );
             return redirect()->back()->with($notification);
            }
         }
        }
         else{
            $post=Category::where('id',$id)->first()->delete();
            if($post){
            $notification=array(
                'messege'=>'Heard delete success',
                'alert-type'=>'success'
                 );
             return redirect()->back()->with($notification);
            }else{
            $notification=array(
                'messege'=>'Heard delete Faild',
                'alert-type'=>'error'
                 );
             return redirect()->back()->with($notification);
    
            }
         }

	   }
	   // restore
	   public function restore($id){
	   		$restore=Category::where('id',$id)->update([
	   			'is_deleted'=>'0',
	   			'updated_at'=>Carbon::now()->toDateTimeString(),

	   		]);
	   		if($restore){
	   			$notification=array(
                'messege'=>'Recover success',
                'alert-type'=>'success'
                 );
             return redirect()->back()->with($notification);
	   		}else{
	   			$notification=array(
                'messege'=>'Recover Faild',
                'alert-type'=>'error'
                 );
             return redirect()->back()->with($notification);
    
	   		}
	   }


}
