<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use App\SiteBanner;
use Carbon\Carbon;
use Session;
use Image;

class BannerController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // allbaner
    public function index(){
    	$allbanner=Banner::where('is_deleted',0)->get();
    	return view('admin.ecommerce.banner.all',compact('allbanner'));
	}
	// insert
	public function insert(Request $request){

		$insert=Banner::insertGetId([
    		'ban_link'=>$request['ban_link'],
    		'ban_image'=>'',
    		'created_at'=>Carbon::now()->toDateTimeString(),

    	]);
            if($request->hasFile('pic')){
                
                $image=$request->file('pic');
                $ImageName='ban_'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(830,355)->save('public/uploads/banner/'.$ImageName);
                Banner::where('id',$insert)->update([
                    'ban_image'=>$ImageName,
                ]);
                      
              }
             if($insert){
	             	 $notification=array(
	                'messege'=>'Banner Insert Successfully',
	                'alert-type'=>'success'
	                 );
	               return Redirect()->back()->with($notification); 
             }else{
             	 $notification=array(
                'messege'=>'Banner Insert Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification); 
             }
	}
	// active
	public function active($id){
		$active=Banner::where('id',$id)->update([
			'ban_status'=>'1',
			'updated_at'=>Carbon::now()->toDateTimeString(),
		]);
		if($active){
	             	 $notification=array(
	                'messege'=>'Banner Active Success',
	                'alert-type'=>'success'
	                 );
	               return Redirect()->back()->with($notification); 
             }else{
             	 $notification=array(
                'messege'=>'Banner active Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification); 
             }
	}
	// deactive
	public function deactive($id){
			$deactive=Banner::where('id',$id)->update([
			'ban_status'=>'0',
			'updated_at'=>Carbon::now()->toDateTimeString(),
		]);
		if($deactive){
	             	 $notification=array(
	                'messege'=>'Banner deActive Success',
	                'alert-type'=>'success'
	                 );
	               return Redirect()->back()->with($notification); 
             }else{
             	 $notification=array(
                'messege'=>'Banner Deactive Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification); 
             }
	}
	// softdelete
	public function softdelete($id){
		$softdelete=Banner::where('id',$id)->update([
			'is_deleted'=>'1',
			'updated_at'=>Carbon::now()->toDateTimeString(),
		]);
		if($softdelete){
	             	 $notification=array(
	                'messege'=>'Banner delete Success',
	                'alert-type'=>'success'
	                 );
	               return Redirect()->back()->with($notification); 
             }else{
             	 $notification=array(
                'messege'=>'Banner delete Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification); 
             }
	}
	// multiple soft delete
	public function multisoftdelete(Request $request){
		$deleteid=$request->Input('delid');
                     if($deleteid){
                     $delet=Banner::whereIn('id',$deleteid)->update([
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
	// edit
	public function edit($id){
		$data=Banner::where('id',$id)->first();
		return json_encode($data);
	}
	// update
	public function update(Request $request){
			$id=$request->id;
			$old_image=$request->old_image;
			$update=Banner::where('id',$id)->update([
					'ban_link'=>$request['ban_link'],
					'updated_at'=>Carbon::now()->toDateTimeString(),
			]);
			 if($request->hasFile('pic')){
                    if($old_image){
                        unlink('public/uploads/banner/'.$old_image);
                        $image=$request->file('pic');
                        $ImageName='_'.'_'.time().'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(830,355)->save('public/uploads/banner/'.$ImageName);
                        Banner::where('id',$id)->update([
                            'ban_image'=>$ImageName,
                        ]);
                    }

                }

        	if($update){
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
	}
	// restore
	public function restore($id){
		$restore=Banner::where('id',$id)->update([
			'is_deleted'=>'0',
			'updated_at'=>Carbon::now()->toDateTimeString(),
		]);
		if($restore){
	             	 $notification=array(
	                'messege'=>'Banner Restore Success',
	                'alert-type'=>'success'
	                 );
	               return Redirect()->back()->with($notification); 
             }else{
             	 $notification=array(
                'messege'=>'Banner Restore Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification); 
             }
	}

	//heard delete
	public function multihearddelete($id){

		$bnimage=Banner::where('id',$id)->first();
		$image_old=$bnimage->ban_image;
		unlink('public/uploads/banner/'.$image_old);
		$hearddelete=Banner::where('id',$id)->delete();

		if($hearddelete){
			$notification=array(
                'messege'=>'Banner hearddelete',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
		}else{
			$notification=array(
                'messege'=>'Banner hearddelete',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
		}

	}
// site banner start

    public function sitebanner(){
        $siteban=SiteBanner::where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('admin.ecommerce.sitebanner.all',compact('siteban'));
    }

// insert sitebanner
    public function sitebannerinsert(Request $request){

        $data = new SiteBanner;
        $data->section = $request->section;
        $data->link = $request->link;
        if($request->section == 1){
             if($request->hasFile('pic')){
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(435,175)->save('public/uploads/banner/sitebanner/'.$ImageName);
                $data->image =$ImageName;
                
              }
        }
        if($request->section == 2){
             if($request->hasFile('pic')){
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(570,300)->save('public/uploads/banner/sitebanner/'.$ImageName);
                $data->image =$ImageName;
                
              }
        }
        if($request->section == 3){
             if($request->hasFile('pic')){
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(270,854)->save('public/uploads/banner/sitebanner/'.$ImageName);
                $data->image =$ImageName;
                
              }
        }
          if($request->section == 4){
             if($request->hasFile('pic')){
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(270,427)->save('public/uploads/banner/sitebanner/'.$ImageName);
                $data->image =$ImageName;
                
              }
        }
         if($request->section == 5){
             if($request->hasFile('pic')){
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(362,495)->save('public/uploads/banner/sitebanner/'.$ImageName);
                $data->image =$ImageName;
                
              }
        }
        if($request->section == 6){
             if($request->hasFile('pic')){
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,180)->save('public/uploads/banner/sitebanner/'.$ImageName);
                $data->image =$ImageName;
                
              }
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
    //deactive
    public function sitebannerdeactive($id){
        $deactive=SiteBanner::where('id',$id)->update([
            'status'=>'0',
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($deactive){
             $notification=array(
                'messege'=>'Site Banner Deactive Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
           }else{
             $notification=array(
                'messege'=>'Site Banner Deactive Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
           }
    } 
// active
 public function sitebanneractive($id){
        $deactive=SiteBanner::where('id',$id)->update([
            'status'=>'1',
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($deactive){
             $notification=array(
                'messege'=>'Site Banner active Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
           }else{
             $notification=array(
                'messege'=>'Site Banner active Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
           }
    } 

    // soft delete
    public function sitebabnsoftdelete($id){
        $delete=SiteBanner::where('id',$id)->update([
            'is_deleted'=>'1',
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($delete){
             $notification=array(
                'messege'=>'Site Banner active Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
           }else{
             $notification=array(
                'messege'=>'Site Banner active Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
           }
    }
    // 
    public function sitebanmultisoft(Request $request){
        $deleteid=$request->Input('delid');
                     if($deleteid){
                     $delet=SiteBanner::whereIn('id',$deleteid)->update([
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


    public function sitebabnsoftedit($id){
        $data=SiteBanner::where('id',$id)->first();
        return json_encode($data);
    }

    // update
    public function sitebannerupdate(Request $request){
        $id=$request->id;
        $old_image=$request->old_image;
        
        $update=SiteBanner::where('id',$id)->update([
            'section'=>$request['section'],
            'link'=>$request['link'],
        ]);

        if($request->section == 1){
             if($request->hasFile('pic')){
                unlink('public/uploads/banner/sitebanner/'. $old_image);
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(435,175)->save('public/uploads/banner/sitebanner/'.$ImageName);
                SiteBanner::where('id',$id)->update([
                            'image'=>$ImageName,
                 ]);
                
              }
        }
        if($request->section == 2){
             if($request->hasFile('pic')){
                unlink('public/uploads/banner/sitebanner/'. $old_image);
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(570,300)->save('public/uploads/banner/sitebanner/'.$ImageName);
                SiteBanner::where('id',$id)->update([
                            'image'=>$ImageName,
                 ]);
                
              }
        }
        if($request->section == 3){
             if($request->hasFile('pic')){
                 unlink('public/uploads/banner/sitebanner/'. $old_image);
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(270,854)->save('public/uploads/banner/sitebanner/'.$ImageName);
                 SiteBanner::where('id',$id)->update([
                            'image'=>$ImageName,
                 ]);
                
              }
        }
          if($request->section == 4){
             if($request->hasFile('pic')){
                 unlink('public/uploads/banner/sitebanner/'. $old_image);
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(270,427)->save('public/uploads/banner/sitebanner/'.$ImageName);
                 SiteBanner::where('id',$id)->update([
                        'image'=>$ImageName,
                 ]);
                
              }
        }
         if($request->section == 5){
             if($request->hasFile('pic')){

                unlink('public/uploads/banner/sitebanner/'. $old_image);
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(362,495)->save('public/uploads/banner/sitebanner/'.$ImageName);
                 SiteBanner::where('id',$id)->update([
                        'image'=>$ImageName,
                 ]);
                
              }
        }
        if($request->section == 6){
             if($request->hasFile('pic')){

                unlink('public/uploads/banner/sitebanner/'. $old_image);
                $image=$request->file('pic');
                $ImageName='th'.'_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,180)->save('public/uploads/banner/sitebanner/'.$ImageName);
                 SiteBanner::where('id',$id)->update([
                    'image'=>$ImageName,
                 ]);
                
              }
        }


        if($update){
             $notification=array(
            'messege'=>'success',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
        }
        else{
            $notification=array(
                'messege'=>'Faild',
                'alert-type'=>'error'
                 );
             return redirect()->back()->with($notification);
        }

    }
    // restore

    public function sitebanrestore($id){

        $deactive=SiteBanner::where('id',$id)->update([
            'is_deleted'=>'0',
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($deactive){
             $notification=array(
                'messege'=>'Site Banner Restore Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
           }else{
             $notification=array(
                'messege'=>'Site Banner Restore Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
           }
    }

    // heard delete
    public function sitebahearddel($id){
       $bnimage=SiteBanner::where('id',$id)->first();
        $image_old=$bnimage->image;
        if($image_old){
            unlink('public/uploads/banner/sitebanner/'.$image_old);
            $del=SiteBanner::where('id',$id)->delete();
            if($del){
                $notification=array(
                'messege'=>'Site Banner Delete Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
            }else{
                $notification=array(
                'messege'=>'Site Banner Delete Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
            }
        }else{
            $del=SiteBanner::where('id',$id)->delete();
            if($del){
                $notification=array(
                'messege'=>'Site Banner Delete Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
            }else{
                $notification=array(
                'messege'=>'Site Banner Delete Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
            }
        }
    }




}
