<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'Website\HomePageController@index')->name('page.home');
Route::get('/services', 'Website\ServicePageController@index');
Route::get('/about', 'Website\AboutUsPageController@index');
Route::get('/contact', 'Website\ContactUsPageController@index');
Route::get('/faq', 'Website\FaqController@index');
Route::get('/contact', 'Website\ContactController@index');
Route::get('/activity', 'Website\ContactController@getactivity');
Route::get('/company-profile', 'Website\ContactController@getprofileinformation');
Route::get('/our-mission', 'Website\OurMissionController@index');

Route::get('productbycategory/{categoryId}', 'Website\SearchProductController@categorywisesearch');
Route::get('product/details/{productId}','Website\SearchProductController@productDetails');

Route::get('productbysubcategory/{categoryId}/{subcategoryId}', 'Website\SearchProductController@subcategorywisesearch');

Route::get('productbynextcategory/{categoryId}/{subcategoryId}/{lastlevel}', 'Website\SearchProductController@nextcategorywisesearch');


/***************************************Blogs section ******************************/
Route::get('blogs', 'Website\BlogController@getBlogs');
Route::get('blog/details/{blogId}', 'Website\BlogController@singleBlogDetails');
Route::get('admin/blogs', 'Admin\Blog\BlogController@index');
Route::get('admin/blog/{blogId}', 'Admin\Blog\BlogController@singleBlogDetails');
Route::get('admin/blog/delete/{blogId}', 'Admin\Blog\BlogController@deleteSingleBlog');


/***************************************Blogs section ******************************/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');


//Admin Route

Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');

Route::get('admin/logout', 'AdminController@Logout')->name('admin.logout');


//code master
Route::get('/admin/codemas', 'Admin\Setup\CodeMasterController@index')->name('codemas');

Route::post('/admin/store/codemas', 'Admin\Setup\CodeMasterController@store')->name('store.codemas');
Route::get('delete/codemas/{id}', 'Admin\Setup\CodeMasterController@DeleteCode');
Route::get('edit/codemas/{id}', 'Admin\Setup\CodeMasterController@Editcode');
Route::post('update/codemas/{id}', 'Admin\Setup\CodeMasterController@Updatecodemas');

//end of codemas


//color master setup
Route::get('/admin/colormaster', 'Admin\Setup\CodeMasterController@color')->name('colormas');
Route::get('/admin/sizemaster', 'Admin\Setup\CodeMasterController@size')->name('sizemas');


//page setup

Route::get('/admin/pagesetup', 'Admin\Setup\PageSetupController@index')->name('admin.pagesetup');
Route::post('/admin/store/pagesetup', 'Admin\Setup\PageSetupController@store')->name('store.pagesetup');
Route::get('edit/pagesetup/{id}', 'Admin\Setup\PageSetupController@Editpage');
Route::post('update/pagesetup/{id}', 'Admin\Setup\PageSetupController@Updatepagesetup');

//Catagories

Route::get('/catagory', 'Admin\Category\CategoryController@category')->name('category');
Route::post('/admin/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('delete/category/{id}', 'Admin\Category\CategoryController@Deletecategory');
Route::get('edit/category/{id}', 'Admin\Category\CategoryController@Editcategory');
Route::post('update/category/{id}', 'Admin\Category\CategoryController@Updatecategory');


//Brands
Route::get('admin/brand', 'Admin\Category\BrandController@Brand')->name('brands');
Route::post('/admin/store/brand', 'Admin\Category\BrandController@storeBrand')->name('store.brand');
Route::get('delete/brand/{id}', 'Admin\Category\BrandController@DeleteBrand');
Route::get('edit/brand/{id}', 'Admin\Category\BrandController@EditBrand');
Route::post('update/brand/{id}', 'Admin\Category\BrandController@UpdateBrand');



//subcategory

Route::get('admin/sub/catagory', 'Admin\Category\SubCategoryController@SubCategories')->name('sub.category');
Route::post('/admin/store/subcat', 'Admin\Category\SubCategoryController@StoreSubCat')->name('store.subcategory');
Route::get('delete/subcategory/{id}', 'Admin\Category\SubCategoryController@DeleteSubCat');
Route::get('edit/subcategory/{id}', 'Admin\Category\SubCategoryController@EditSubCat');
Route::post('update/subcategory/{id}', 'Admin\Category\SubCategoryController@UpdateSubCat');



//next lavel subcategory
Route::get('admin/nextsubcatagory', 'Admin\Category\NextLevelSubCategory@index')->name('nextsub.category');
Route::post('/admin/store/nextsubcategory', 'Admin\Category\NextLevelSubCategory@store')->name('store.nextsubcategory');

Route::get('delete/nextsubcategory/{id}', 'Admin\Category\NextLevelSubCategory@DeleteNextSubCat');

Route::get('edit/nextsubcategory/{id}', 'Admin\Category\NextLevelSubCategory@EditNextSubCat');
Route::post('update/nextsubcategory/{id}', 'Admin\Category\NextLevelSubCategory@updateNextSubCat');

// users setup 
Route::get('admin/user', 'Admin\User\UserController@index')->name('admin.users');
Route::post('/admin/store/user', 'Admin\User\UserController@store')->name('store.user');
Route::get('delete/user/{id}', 'Admin\User\UserController@delete');
Route::get('edit/user/{id}', 'Admin\User\UserController@edit');
Route::post('update/user/{id}', 'Admin\User\UserController@update');
//Coupon 

Route::get('admin/sub/coupon', 'Admin\Category\CouponController@Coupon')->name('admin.coupon');
Route::post('/admin/store/coupon', 'Admin\Category\CouponController@StoreCoupon')->name('store.coupon');
Route::get('delete/coupon/{id}', 'Admin\Category\CouponController@DeleteCoupon');
Route::get('edit/coupon/{id}', 'Admin\Category\CouponController@EditCoupon');
Route::post('update/coupon/{id}', 'Admin\Category\CouponController@UpdateCoupon');


//Newslater

Route::get('admin/newslater', 'Admin\Category\CouponController@Newslater')->name('admin.newslater');
Route::get('delete/newslater/{id}', 'Admin\Category\CouponController@DeleteSub');

// from show subcategory with ajax
Route::get('get/subcategory/{category_id}', 'Admin\ProductController@GetSubcat');
Route::get('get/lastlavel/{category_id}/{subcategory_id}', 'Admin\ProductController@GetLastLevel');


//Product ALL Route for admin

Route::get('admin/product/all', 'Admin\ProductController@index')->name('all.product');
Route::get('admin/product/add', 'Admin\ProductController@create')->name('add.product');
Route::post('admin/store/product', 'Admin\ProductController@store')->name('store.product');

Route::get('inactive/product/{id}', 'Admin\ProductController@inactive');
Route::get('active/product/{id}', 'Admin\ProductController@active');
Route::get('delete/product/{id}', 'Admin\ProductController@DeleteProduct');
Route::get('view/product/{id}', 'Admin\ProductController@ViewProduct');
Route::get('edit/product/{id}', 'Admin\ProductController@EditProduct');

Route::post('update/product/withoutphoto/{id}', 'Admin\ProductController@UpdateProductWithoutPhoto');

Route::post('update/product/photo/{id}', 'Admin\ProductController@UpdateProductPhoto');



// Blog Admin All
Route::get('blog/category/list', 'Admin\PostController@BlogCatList')->name('add.blog.categorylist');
Route::post('admin/store/blog', 'Admin\PostController@BlogCatStore')->name('store.blog.category');
Route::get('delete/blogcategory/{id}', 'Admin\PostController@DeleteBlogCat');
Route::get('edit/blogcategory/{id}', 'Admin\PostController@EditBlogCat');
Route::post('update/blog/category/{id}', 'Admin\PostController@UpdateBlogCat');

Route::get('admin/add/post', 'Admin\PostController@Create')->name('add.blogpost');
Route::get('admin/all/post', 'Admin\PostController@index')->name('all.blogpost');
Route::post('admin/store/post', 'Admin\PostController@store')->name('store.post');
Route::get('delete/post/{id}', 'Admin\PostController@DeletePost');
Route::get('edit/post/{id}', 'Admin\PostController@EditPost');
Route::post('update/post/{id}', 'Admin\PostController@UpdatePost');


//payment step


Route::get('payment/page', 'CartController@PaymentPage')->name('payment.step');
Route::post('user/payment/process', 'PaymentController@Payment')->name('payment.process');
Route::post('user/stripe/charge', 'PaymentController@StripeCharge')->name('stripe.charge');
Route::post('user/oncash/charge', 'PaymentController@OnCash')->name('oncash.charge');





////Admin order all route
//For Accept
Route::get('admin/pending/order', 'Admin\OrderController@NewOrder')->name('admin.neworder');
Route::get('admin/view/order/{id}', 'Admin\OrderController@ViewOrder');
Route::get('admin/edit/order/{id}', 'Admin\OrderController@EditOrder');
Route::post('admin/update/order/{id}', 'Admin\OrderController@UpdateOrder');

// Route::get('admin/payment/accept/{id}','Admin\OrderController@PaymentAccept');
// Route::get('admin/payment/cancel/{id}','Admin\OrderController@PaymentCancel');
// Route::get('admin/delevery/process/{id}','Admin\OrderController@DeliveryProcess');
// Route::get('admin/delevery/done/{id}','Admin\OrderController@DeliveryDone');


//Order status Controll
Route::get('admin/accept/payment', 'Admin\OrderController@AcceptPayment')->name('admin.accept.payment');
Route::get('admin/cancle/payment', 'Admin\OrderController@CancelOrder')->name('admin.cancel.payment');
Route::get('admin/process/payment', 'Admin\OrderController@ProcessPayment')->name('admin.process.payment');
Route::get('admin/success/payment', 'Admin\OrderController@SuccessPayment')->name('admin.success.payment');

//Order Status Controll end


//All Report

Route::get('admin/today/order', 'Admin\ReportController@TodayOrder')->name('today.order');

Route::get('admin/today/delivery', 'Admin\ReportController@TodayDelivery')->name('today.delivery');
Route::get('admin/this/month', 'Admin\ReportController@ThisMonth')->name('this.month');
Route::get('admin/search/report', 'Admin\ReportController@search')->name('search.report');
Route::get('admin/searchbetweendate/report', 'Admin\ReportController@searchbetweendate')->name('search.betweendate.report');
Route::post('admin/search/by/year', 'Admin\ReportController@SearchByYear')->name('search.by.year');

Route::post('admin/search/by/date', 'Admin\ReportController@SearchByDate')->name('search.by.date');
Route::post('admin/search/by/month', 'Admin\ReportController@SearchByMonth')->name('search.by.month');



//Chart Report




Route::get('admin/create/order', 'Admin\OrderController@createOrder')->name('admin.orders');
Route::post('/admin/store/order', 'Admin\OrderController@storeOrder')->name('store.order');
Route::get('admin/create/order1', 'Admin\Order\OrderController@createOrder')->name('admin.neworders');
Route::post('/admin/store/order1', 'Admin\Order\OrderController@storeOrder')->name('store.neworder');

// Route::get('admin/addingproduct','Admin\OrderController@addingproducts');
Route::get('/product', 'Website\SearchProductController@getProducts');
Route::get('viewinvoice/{orderId}', 'HomeController@viewinvoice');




//company master
Route::get('/admin/company', 'Admin\Setup\CompanyMasterController@index')->name('companymaster');
Route::post('/admin/store/company', 'Admin\Setup\CompanyMasterController@store')->name('store.companymaster');
Route::get('edit/company/{id}', 'Admin\Setup\CompanyMasterController@EditCompany');
Route::post('update/company/{id}', 'Admin\Setup\CompanyMasterController@UpdateCompany');

//end of company master


//contact master 
Route::get('/admin/contact', 'Admin\Setup\ContactMasterController@index')->name('contactmaster');
Route::post('/admin/store/contact', 'Admin\Setup\ContactMasterController@store')->name('store.contactmaster');
Route::get('edit/contact/{id}', 'Admin\Setup\ContactMasterController@edit');
Route::post('update/contact/{id}', 'Admin\Setup\ContactMasterController@update');
Route::get('delete/contact/{id}', 'Admin\Setup\ContactMasterController@delete');

//contact master end



//office master 
Route::get('/admin/office', 'Admin\Setup\OfficeMasterController@index')->name('officemaster');
Route::post('/admin/store/office', 'Admin\Setup\OfficeMasterController@store')->name('store.office');
Route::get('edit/office/{id}', 'Admin\Setup\OfficeMasterController@edit');
Route::post('update/office/{id}', 'Admin\Setup\OfficeMasterController@update');
Route::get('delete/office/{id}', 'Admin\Setup\OfficeMasterController@delete');

//office master end

//blog start

Route::get('/admin/blog', 'Admin\Blog\BlogController@index')->name('all.blog');
Route::get('/admin/store/blog', 'Admin\Blog\BlogController@create')->name('add.blog');
Route::post('/admin/store', 'Admin\Blog\BlogController@store')->name('store.blog');
Route::get('delete/blog/{id}', 'Admin\Blog\BlogController@delete');
Route::get('edit/brand/{id}', 'Admin\Blog\BlogController@edit');
Route::post('update/blog/{id}', 'Admin\Blog\BlogController@update');

//blog start
