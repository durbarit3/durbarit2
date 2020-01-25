<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\wishlist;
use Carbon\Carbon;
use App\Product;
use Image;
use Auth;
use Cart;

class WishlistController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth:web');
    }
    
    public function insert(Request $request,$id){

    		$user_id = Auth::id();
    		$check=wishlist::where('product_id',$id)->first();
    		if($check){
    			return response()->json(['check'=>$check]);
    		}else{
    			$insert=wishlist::insert([
    			'product_id'=>$id,
    			'user_id'=>$user_id,
    			'created_at'=>Carbon::now()->toDateTime(),
	    		]);
	    		if($insert){
	    			return response()->json($insert);
	    		}
			}
		
    		
	}
	// delete
	public function delete($id){
		// return $id;
		$delete=wishlist::where('id',$id)->delete();

		  if($delete){
	             	 $notification=array(
	                'messege'=>'Wish List Delete Success',
	                'alert-type'=>'success'
	                 );
	               return Redirect()->back()->with($notification); 
             }else{
             	 $notification=array(
                'messege'=>'Wish List Delete Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification); 
             }
		
	}


	public function index(){
    	return view('frontend.shopping.wishlist');
	}
	
	public function getwish(){
		$user_id = Auth::id();
		$allwishlist=wishlist::where('user_id',$user_id)->get();
		return view('frontend.shopping.wishproduct',compact('allwishlist'));
		
	}

	
	




}


