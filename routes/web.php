<?php

Route::get('/',[
    'uses'  => 'eCommerceController@index',
    'as'    => '/'
]);
Route::get('category-products/{id}', [
    'uses'  => 'eCommerceController@categoryProduct',
    'as'    => 'category-products'
]);
Route::get('contact-us', [
    'uses'  => 'eCommerceController@contactUs',
    'as'    => 'contact-us'
]);
Route::get('product-details/{id}/{name}', [
    'uses' => 'eCommerceController@productDetails',
    'as' =>'product-details'
]);


Route::post('/cart/add', [
    'uses' => 'CartController@addTocart',
    'as' =>'add-to-cart'
]);
Route::get('/cart/show', [
    'uses' => 'CartController@showCart',
    'as' =>'show-cart'
]);
Route::get('/delete/cart/{id}', [
    'uses' => 'CartController@deleteCart',
    'as' =>'delete-cart-item'
]);
Route::post('/cart/update/', [
    'uses' => 'CartController@updateCart',
    'as' =>'update-cart'
]);



Route::get('/checkout/', [
    'uses' => 'CheckoutController@index',
    'as' =>'checkout'
]);
Route::post('/customer/registration', [
    'uses' => 'CheckoutController@customerSignUp',
    'as' =>'customer-sign-up'
]);
Route::post('/customer/login', [
    'uses' => 'CheckoutController@customerLoginCheck',
    'as' =>'customer-login'
]);

Route::get('/checkout/shipping', [
    'uses' => 'CheckoutController@shippingForm',
    'as' =>'checkout-shipping'
]);
Route::post('/shipping/save', [
    'uses' => 'CheckoutController@saveShippingInfo',
    'as' =>'new-shipping'
]);
Route::get('/checkout/payment', [
    'uses' => 'CheckoutController@paymentForm',
    'as' =>'checkout-payment'
]);
Route::post('/checkout/order', [
    'uses' => 'CheckoutController@newOrder',
    'as' =>'new-order'
]);
Route::get('/complete/order', [
    'uses' => 'CheckoutController@completeOrder',
    'as' =>'complete-order'
]);




/*Admin part starts here*/
Route::get('/add-category',[
   'uses'  => 'CategoryController@index',
    'as'   => 'add-category'
]);
Route::get('/manage-category',[
    'uses'  => 'CategoryController@manageCategory',
    'as'    => 'manage-category'
]);
Route::post('/category/save',[
    'uses'  => 'CategoryController@saveCategory',
    'as'    => 'save-category'
]);
Route::get('/unpublished/category/{id}',[
    'uses'  => 'CategoryController@unpublishedCategory',
    'as'    => 'category-unpublished'
]);
Route::get('/published/category/{id}',[
    'uses'  => 'CategoryController@publishedCategory',
    'as'    => 'category-published'
]);
Route::get('/edit/category/{id}',[
    'uses'  => 'CategoryController@editCategory',
    'as'    => 'category-edit'
]);
Route::post('/update/category/',[
    'uses'  => 'CategoryController@updateCategory',
    'as'    => 'update-category'
]);
Route::get('/delete/category/{id}',[
    'uses'  => 'CategoryController@deleteCategory',
    'as'    => 'delete-category'
]);
Route::get('/add-brand', [
    'uses'  => 'BrandController@index',
    'as'    => 'add-brand'
]);
Route::post('/save-brand', [
    'uses'  => 'BrandController@saveBrandInfo',
    'as'    => 'save-brand'
]);
Route::get('/manage-brand', [
    'uses'  => 'BrandController@managgeBrandInfo',
    'as'    => 'manage-brand'
]);
Route::get('/unpublished-brand/{id}', [
    'uses'  => 'BrandController@unpublishedBrandInfo',
    'as'    => 'unpublished-brand'
]);
Route::get('/published-brand/{id}', [
    'uses'  => 'BrandController@publishedBrandInfo',
    'as'    => 'published-brand'
]);
Route::get('/edit-brand/{id}', [
    'uses'  => 'BrandController@editBrandInfo',
    'as'    => 'edit-brand'
]);
Route::post('/update-brand/', [
    'uses'  => 'BrandController@updateBrandInfo',
    'as'    => 'update-brand'
]);
Route::get('/delete-brand/{id}', [
    'uses'  => 'BrandController@deleteBrandInfo',
    'as'    => 'delete-brand'
]);

Route::get('/add-product', [
    'uses'  => 'ProductController@index',
    'as'    => 'add-product'
]);
Route::post('/save-product', [
    'uses'  => 'ProductController@saveProduct',
    'as'    => 'save-product'
]);
Route::get('/manage-product', [
    'uses'  => 'ProductController@manageProduct',
    'as'    => 'manage-product'
]);
Route::get('/edit-product/{id}', [
    'uses'  => 'ProductController@editProduct',
    'as'    => 'edit-product'
]);
Route::post('/update-product', [
    'uses'  => 'ProductController@updateProduct',
    'as'    => 'update-product'
]);
Route::get('/delete-product/{id}', [
    'uses'  => 'ProductController@deleteProduct',
    'as'    => 'delete-product'
]);
Route::get('/Un-published-product/{id}', [
    'uses'  => 'ProductController@unPublishedProduct',
    'as'    => 'un-published-product'
]);
Route::get('/published-product/{id}', [
    'uses'  => 'ProductController@PublishedProduct',
    'as'    => 'published-product'
]);
Route::get('/view-product-details/{id}', [
    'uses'  => 'ProductController@viewProductDetails',
    'as'    => 'view-details'
]);



/*Admin part ends here*/


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
