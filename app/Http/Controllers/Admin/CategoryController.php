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
 if($cate_slug){
    	$insert=Category::insertGetId([
    		'cate_name'=>$request['cate_name'],
    		'cate_image'=>'',
            'cate_icon'=>'',
    		'cate_slug'=>$inputslug,
            'section_id'=>$request['section_id'],
            'cate_tag'=>$request['cate_tag'],
    		'created_at'=>Carbon::now()->toDateTimeString(),

    	]);
            if($request->hasFile('pic') && $request->hasFile('icon')){
                
                        $image=$request->file('pic');
                        $ImageName='category_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(350,182)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$insert)->update([
                            'cate_image'=>$ImageName,
                        ]);
                        $image=$request->file('icon');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$insert)->update([
                            'cate_icon'=>$ImageName,
                        ]); 
              }
              elseif($request->hasFile('pic')){
                        $image=$request->file('pic');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(350,182)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$insert)->update([
                            'cate_image'=>$ImageName,
                        ]);
              }
              elseif($request->hasFile('icon')){
                    $image=$request->file('icon');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$insert)->update([
                            'cate_icon'=>$ImageName,
                        ]);

              }else{

              }


    	if($insert){
		  $notification=array(
                'messege'=>'Category Insert Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification); 
    	}
    	else{
    		$notification=array(
                'messege'=>'Category Insert Faild',
                'alert-type'=>'danger'
                 );
               return Redirect()->back()->with($notification); 
    	}
    }else{
    	$insert=Category::insertGetId([
    		'cate_name'=>$request['cate_name'],
    		'cate_image'=>'',
            'cate_icon'=>'',
    		'cate_slug'=>$slug,
            'section_id'=>$request['section_id'],
            'cate_tag'=>$request['cate_tag'],
    		'created_at'=>Carbon::now()->toDateTimeString(),

    	]);
            if($request->hasFile('pic') && $request->hasFile('icon')){
                   
                        $image=$request->file('pic');
                        $ImageName='category_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(350,182)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$insert)->update([
                            'cate_image'=>$ImageName,
                        ]);
                        $image=$request->file('icon');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$insert)->update([
                            'cate_icon'=>$ImageName,
                        ]); 
              }
              elseif($request->hasFile('pic')){
                        $image=$request->file('pic');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(350,182)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$insert)->update([
                            'cate_image'=>$ImageName,
                        ]);
              }
              elseif($request->hasFile('icon')){
                    $image=$request->file('icon');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$insert)->update([
                            'cate_icon'=>$ImageName,
                        ]);

              }else{

              }


    	if($insert){
		  $notification=array(
                'messege'=>'Category Insert Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification); 
    	}
    	else{
    		$notification=array(
                'messege'=>'Category Insert Faild',
                'alert-type'=>'danger'
                 );
               return Redirect()->back()->with($notification); 
    	}
    }
   }



   public function edit($cate_id){
       $data=Category::where('id',$cate_id)->first();
        return json_encode($data);
   }

   public function update(Request $request){
   	    $id=$request->id;
        $old=$request->old_image;
        $oldicon=$request->old_icon;
    	$title=strtolower($request['cate_name']);
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);


        $update=Category::where('id',$id)->update([
    		'cate_name'=>$request['cate_name'],
    		'cate_slug'=>$slug,
            'cate_tag'=>$request['cate_tag_edit'],
    		'updated_at'=>Carbon::now()->toDateTimeString(),
    	]);

         if($request->hasFile('pic') && $request->hasFile('icon')){
                    if($old){
                        unlink('public/uploads/category/'.$old);
                        $image=$request->file('pic');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(350,182)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$id)->update([
                            'cate_image'=>$ImageName,
                        ]);
                      
                        $image=$request->file('icon');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$id)->update([
                            'cate_icon'=>$ImageName,
                        ]);
                    }
                    else{
                        $image=$request->file('pic');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(350,182)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$id)->update([
                            'cate_image'=>$ImageName,
                        ]);
                        $image=$request->file('icon');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$id)->update([
                            'cate_icon'=>$ImageName,
                        ]);
                    }
              }elseif($request->hasFile('pic')){

                 if($old){
                        unlink('public/uploads/category/'.$old);
                        $image=$request->file('pic');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(350,182)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$id)->update([
                            'cate_image'=>$ImageName,
                        ]);
                    }
                    else{
                        $image=$request->file('pic');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(350,182)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$id)->update([
                            'cate_image'=>$ImageName,
                        ]);
                    }

              }
              elseif($request->hasFile('icon')){
                    $image=$request->file('icon');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(20,20)->save('public/uploads/category/'.$ImageName);
                        Category::where('id',$id)->update([
                            'cate_icon'=>$ImageName,
                        ]);

              }else{

              }

          if($update){
	 		 $notification=array(
            'messege'=>'Category Update Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('admin.category.all')->with($notification); 
			}
    	else{
    		$notification=array(
                'messege'=>'Category Update Faild',
                'alert-type'=>'danger'
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
