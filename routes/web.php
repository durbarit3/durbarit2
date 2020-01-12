<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//admin routes
   Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
   Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');  
   Route::post('admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
   Route::get('admin/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
   Route::post('admin/password/reset', 'Auth\AdminResetPasswordController@reset');
   Route::get('admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
   Route::get('/admin', 'AdminController@index')->name('admin.dashboard'); //admin dashboard
         //admin setting section
   Route::get('admin/profile', 'AdminController@AdminProfile')->name('admin.profile'); 
   Route::get('admin/edit/profile', 'AdminController@AdminEditProfile')->name('admin.edit.profile'); 
   Route::post('admin/update/profile', 'AdminController@AdminUpdateProfile')->name('admin.update.profile'); 
   Route::get('admin/password/change', 'AdminController@AdminPasswordChange')->name('admin.password.change'); 
   Route::post('admin/password/update', 'AdminController@AdminPasswordUpdate')->name('admin.password.update'); 
   Route::get('admin/profile/lock', 'AdminController@AdminLockScreen')->name('admin.lock.screen'); 
   Route::post('/admin/unlock/screen','AdminController@UnlockScreen')->name('admin.unlock.screen'); 
   Route::get('admin/log/out', 'AdminController@AdminLogOut')->name('admin.logout'); 

        //seo setting
Route::get('admin/seo/setting', 'Admin\SeoController@Seo')->name('admin.seo.setting'); 
Route::post('admin/seo/update', 'Admin\SeoController@SeoUpdate')->name('admin.seo.update'); 
Route::get('admin/social/setting', 'Admin\SeoController@Social')->name('admin.social.setting'); 
Route::post('admin/social/update', 'Admin\SeoController@SocialUpdate')->name('admin.social.update'); 
Route::get('admin/logo/setting', 'Admin\SeoController@LogoSetting')->name('admin.logo.setting'); 
Route::post('admin/panel/logo/update', 'Admin\SeoController@AdminLogoUpdate')->name('admin.panel.logo'); 
Route::post('admin/frontlogo/update', 'Admin\SeoController@AdminFrontLogoUpdate')->name('admin.front.logo'); 
     //mail setting
Route::get('admin/mail/setting', 'Admin\SeoController@MailSetting')->name('admin.mail.setting'); 
Route::post('admin/smtp/update', 'Admin\SeoController@smtpUpdate')->name('admin.smtp.update'); 
Route::post('admin/mailgun/update', 'Admin\SeoController@mailgunUpdate')->name('admin.mailgun.update'); 
   //payment gateway
Route::get('admin/payment/gateway', 'Admin\GatewayController@PaymentGateway')->name('admin.payment.gateway');   
Route::post('admin/stripe/gateway', 'Admin\GatewayController@StripeUpdate')->name('admin.stripe.update');   
Route::post('admin/paypal/gateway', 'Admin\GatewayController@PaypalUpdate')->name('admin.paypal.update');   
Route::post('admin/twocheckout/gateway', 'Admin\GatewayController@twocheckoutUpdate')->name('admin.twocheckout.update');   
Route::post('admin/mollie/gateway', 'Admin\GatewayController@MollieUpdate')->name('admin.mollie.update');


// category
Route::get(md5('admin/category/all'), 'Admin\CategoryController@index')->name('admin.category.all');
Route::post(md5('admin/category/insert'), 'Admin\CategoryController@insert')->name('admin.category.insert');
Route::get('/get/category/edit/{cate_id}', 'Admin\CategoryController@edit');
Route::post(md5('admin/category/update'), 'Admin\CategoryController@update')->name('admin.category.update');
Route::get('admin/category/softdelete/{id}', 'Admin\CategoryController@softdelete');
Route::post('admin/category/multiplesoftdelete', 'Admin\CategoryController@multiplesoftdelete');
Route::get('admin/category/deactive/{id}', 'Admin\CategoryController@deactive');
Route::get('admin/category/active/{id}', 'Admin\CategoryController@active');
Route::get('admin/category/delete/{id}', 'Admin\CategoryController@delete');
Route::get('admin/category/restore/{id}', 'Admin\CategoryController@restore');
// subcategory
Route::get(md5('admin/subcategory/all'), 'Admin\SubCategoryController@index')->name('admin.subcategory.all');
Route::post(md5('admin/subcategory/insert'), 'Admin\SubCategoryController@insert')->name('admin.subcategory.insert');
Route::get('/get/subcategory/edit/{subcate_id}', 'Admin\SubCategoryController@edit');
Route::post('admin/subcategory/update', 'Admin\SubCategoryController@update')->name('admin.subcategory.update');
Route::get('admin/subcategory/active/{id}', 'Admin\SubCategoryController@active');
Route::get('admin/subcategory/deactive/{id}', 'Admin\SubCategoryController@deactive');
Route::get('admin/subcategory/softdelete/{id}', 'Admin\SubCategoryController@softdelete');
Route::get('admin/subcategory/restore/{id}', 'Admin\SubCategoryController@restore');
Route::post('admin/subcategory/multiplesoftdelete', 'Admin\SubCategoryController@multiplesoftdelete');
Route::get('admin/subcategory/delete/{id}', 'Admin\SubCategoryController@delete');
// resubcategory
Route::get(md5('admin/resubcategory/all'), 'Admin\ReSubCategoryController@index')->name('admin.resubcategory.all');
Route::get('/get/subcategory/all/{cate_id}', 'Admin\ReSubCategoryController@subcate');
Route::post('admin/resubcategory/insert', 'Admin\ReSubCategoryController@insert')->name('admin.resubcategory.insert');
Route::get('admin/resubcategory/deactive/{id}', 'Admin\ReSubCategoryController@deactive');
Route::get('admin/resubcategory/active/{id}', 'Admin\ReSubCategoryController@active');
Route::get('admin/resubcategory/softdelete/{id}', 'Admin\ReSubCategoryController@softdelete');
Route::post('admin/resubcategory/multisoftdelete', 'Admin\ReSubCategoryController@multisoftdel')->name('');
Route::get('/get/resubcategory/edit/{resubcate_id}', 'Admin\ReSubCategoryController@edit')->name('');
Route::post('admin/resubcategory/update', 'Admin\ReSubCategoryController@update')->name('admin.resubcategory.update');
Route::get('admin/resubcategory/restore/{id}', 'Admin\ReSubCategoryController@restore');
// color
Route::get(md5('admin/color/all'), 'Admin\ColorController@index')->name('admin.color.all');
Route::post(md5('admin/color/insert'), 'Admin\ColorController@insert')->name('admin.color.insert');
Route::get('admin/color/active/{id}', 'Admin\ColorController@active');
Route::get('admin/color/deactive/{id}', 'Admin\ColorController@deactive');
Route::get('admin/color/softdelete/{id}', 'Admin\ColorController@softdelete');
Route::get('admin/color/recover/{id}', 'Admin\ColorController@recover');
Route::post('admin/color/multisoftdelete', 'Admin\ColorController@multisoftdel');
Route::get('admin/color/delete/{id}', 'Admin\ColorController@delete');
Route::get('/get/color/edit/{color_id}', 'Admin\ColorController@edit');
Route::post(md5('admin/color/update'), 'Admin\ColorController@update')->name('admin.color.update');
// brand controller
Route::get(md5('admin/brand/all'), 'Admin\BrandController@index')->name('admin.brand.all');
Route::post('admin/brand/insert', 'Admin\BrandController@insert')->name('admin.brand.insert');
Route::get('admin/brand/active/{id}', 'Admin\BrandController@active');
Route::get('admin/brand/deactive/{id}', 'Admin\BrandController@deactive');
Route::get('admin/brand/softdelete/{id}', 'Admin\BrandController@softdelete');
Route::get('admin/brand/recover/{id}', 'Admin\BrandController@recover');
Route::post('admin/brand/multipledelete', 'Admin\BrandController@multidel');
Route::get('admin/brand/delete/{id}', 'Admin\BrandController@delete');
Route::get('/get/brand/edit/{brand_id}', 'Admin\BrandController@edit');
Route::post('admin/brand/update', 'Admin\BrandController@update')->name('admin.brand.update');
// measurement
Route::get(md5('admin/measurement/all'), 'Admin\MeasurementController@index')->name('admin.measurement.all');
Route::post('admin/measurement/insert', 'Admin\MeasurementController@insert')->name('admin.measurement.insert');
Route::post('admin/measurement/update', 'Admin\MeasurementController@update')->name('admin.measurement.update');
Route::get('admin/measurement/actve/{id}', 'Admin\MeasurementController@active');
Route::get('/get/measurement/edit/{m_id}', 'Admin\MeasurementController@edit');
Route::get('admin/measurement/deactve/{id}', 'Admin\MeasurementController@deactive');
Route::get('admin/measurement/softdelete/{id}', 'Admin\MeasurementController@softdelete');
Route::get('admin/measurement/recover/{id}', 'Admin\MeasurementController@recover');
Route::get('admin/measurement/delete/{id}', 'Admin\MeasurementController@delete');
Route::post('admin/measurement/multisoftdelete', 'Admin\MeasurementController@multisoftdelete');
// cupon controller
Route::get(md5('admin/cupon/all'), 'Admin\CuponController@index')->name('admin.cupon.all');
Route::get(md5('admin/cupon/add'), 'Admin\CuponController@add')->name('admin.cupon.add');
Route::post(md5('admin/cupon/insert'), 'Admin\CuponController@insert')->name('admin.cupon.insert');
Route::get('admin/cupon/deactive/{id}', 'Admin\CuponController@deactive');
Route::get('admin/cupon/active/{id}', 'Admin\CuponController@active');
Route::get('admin/cupon/softdelete/{id}', 'Admin\CuponController@softdelete');
Route::get('admin/cupon/edit/{id}', 'Admin\CuponController@edit');
Route::post('admin/cupon/update', 'Admin\CuponController@update')->name('admin.cupon.update');

// product controller
Route::get(md5('admin/product/producttype'), 'Admin\ProductController@producttype')->name('admin.product.producttype');
Route::get(md5('admin/product/add'), 'Admin\ProductController@add')->name('admin.product.add');
Route::get(md5('admin/product/digital/add'), 'Admin\ProductController@digital')->name('admin.product.digital');
Route::get(md5('admin/product/affiliate/add'), 'Admin\ProductController@affiliate')->name('admin.product.affiliate');
Route::get(md5('admin/product/digital/license'), 'Admin\ProductController@license')->name('admin.product.license');
Route::get(md5('admin/product/all'), 'Admin\ProductController@index')->name('admin.product.all');
Route::post(md5('admin/product/insert'), 'Admin\ProductController@insert')->name('admin.product.insert');
Route::post('admin/product/update/{id}', 'Admin\ProductController@update')->name('admin.product.update');
Route::get('admin/product/combination', 'Admin\ProductController@sku_combination')->name('products.sku_combination');
Route::get('admin/product/combination/edit', 'Admin\ProductController@sku_combination_edit')->name('products.sku_combination_edit');
Route::get('/get/resubcategory/all/{subcate_id}', 'Admin\ProductController@resub');
Route::post('/get/admin/todays_deal', 'Admin\ProductController@updatetodaydeal')->name('products.todays_deal');
Route::post('/get/admin/published', 'Admin\ProductController@updatepublished')->name('products.published');
Route::get('admin/product/view/{id}', 'Admin\ProductController@view');
Route::get('admin/product/varient', 'Admin\ProductController@provarient')->name('products.variant_price');
Route::post('admin/product/multisoftdelete', 'Admin\ProductController@productmultisoftdelete');
Route::get('admin/product/restore/{id}', 'Admin\ProductController@prorecover');
Route::get('admin/product/lincencepro/{id}', 'Admin\ProductController@licencepro')->name('admin.licencepro.delete');
Route::get('admin/product/softdelete/{id}', 'Admin\ProductController@softdelete');
Route::get('admin/product/hearddelete/{id}', 'Admin\ProductController@hearddelete');


// product type physical edit
Route::get('admin/product/edittypeone/{id}', 'Admin\ProductController@producteditone');
// product type digital  edit
Route::get('admin/product/productedittwo/{id}', 'Admin\ProductController@productedittwo');
// product type lincence edit
Route::get('admin/product/producteditthree/{id}', 'Admin\ProductController@producteditthree');
// product type affiliate edit
Route::get('admin/product/producteditfour/{id}', 'Admin\ProductController@producteditfour');


// trash controller
Route::get(md5('admin/trash/category'), 'Admin\TrashController@category')->name('admin.trash.category');
Route::post('admin/trash/category/multipledelete', 'Admin\TrashController@hearddeletecategory');
Route::get(md5('admin/trash/subcategory'), 'Admin\TrashController@subcategory')->name('admin.trash.subcategory');
Route::post('admin/trash/subcategory/multipledelete', 'Admin\TrashController@hearddelsubcate')->name('admin.trash.hearddel');
Route::get(md5('admin/trash/resubcategory'), 'Admin\TrashController@resubcategory')->name('admin.trash.resubcategory');
Route::post('admin/trash/resubcategory/multipledelete', 'Admin\TrashController@resubmultidel');
Route::post('admin/trash/color/multiplehdelete', 'Admin\TrashController@multicolordel')->name('admin.trash.color.delete');
Route::get(md5('admin/trash/color'), 'Admin\TrashController@color')->name('admin.trash.color');

Route::get(md5('admin/trash/brand'), 'Admin\TrashController@brand')->name('admin.trash.brand');
Route::get(md5('admin/trash/measurement'), 'Admin\TrashController@measurement')->name('admin.trash.measurement');
Route::post('admin/trash/brand/delete', 'Admin\TrashController@brandhearddelete')->name('admin.trash.brand.delete');
Route::post('admin/trash/measurement/delete', 'Admin\TrashController@measurementhearddelete')->name('admin.trash.measurement.delete');
Route::get(md5('admin/trash/product'), 'Admin\TrashController@product')->name('admin.trash.product');
Route::post(md5('admin/trash/product/hearddelete'), 'Admin\TrashController@producthearddel')->name('admin.trash.producthearddel');


// qayum hasan route start
Route::view('/website', 'layouts.websiteapp');
// qayum hasan route end



