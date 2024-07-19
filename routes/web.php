<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/home2', function () {
    return view('home.home2');
});

Route::get('/home3', function () {
    return view('home.home3');
});

// -------------------Shop (Column One)---------------------

Route::get('/shopLeft_Sidebar', function () {
    return view('shop.columnOne.shopLeft_Sidebar');
});

Route::get('/shopRight_Sidebar', function () {
    return view('shop.columnOne.shopRight_Sidebar');
});

Route::get('/shopGrid', function () {
    return view('shop.columnOne.shopGrid');
});

Route::get('/shopGridList', function () {
    return view('shop.columnOne.shopGridList');
});

Route::get('/shopList', function () {
    return view('shop.columnOne.shopList');
});



// -------------------Shop (Column Two)---------------------
Route::get('/standardProduct', function () {
    return view('shop.columnTwo.standardProduct');
});

Route::get('/videoProduct', function () {
    return view('shop.columnTwo.videoProduct');
});

Route::get('/variableProduct', function () {
    return view('shop.columnTwo.variableProduct');
});

Route::get('/productLeft_Sidebar', function () {
    return view('shop.columnTwo.productLeft_Sidebar');
});

Route::get('/productGallery', function () {
    return view('shop.columnTwo.productGallery');
});


// -------------------Shop (Column Three)---------------------
Route::get('/myAccount', function () {
    return view('shop.columnThree.myAccount');
});

Route::get('/myAccount2', function () {
    return view('shop.columnThree.myAccount2');
});

Route::get('/404Page', function () {
    return view('shop.columnThree.404Page');
});

Route::get('/loginPage', function () {
    return view('shop.columnThree.loginPage');
});

Route::get('/faqPage', function () {
    return view('shop.columnThree.faqPage');
});



// -------------------Shop (Column Four)---------------------
Route::get('/comparePage', function () {
    return view('shop.columnFour.comparePage');
});

Route::get('/cartPage', function () {
    return view('shop.columnFour.cartPage');
});

Route::get('/checkoutPage', function () {
    return view('shop.columnFour.checkoutPage');
});

Route::get('/wishlistPage', function () {
    return view('shop.columnFour.wishlistPage');
});

Route::get('/errorPage', function () {
    return view('shop.columnFour.errorPage');
});


// -------------------About Us---------------------
Route::get('/aboutUs', function () {
    return view('aboutUs.aboutUs');
});




// -------------------Blog---------------------
Route::get('/blogGrid', function () {
    return view('blog.blogGrid');
});

Route::get('/blogDetails', function () {
    return view('blog.blogDetails');
});

Route::get('/blogLeft_Sidebar', function () {
    return view('blog.blogLeft_Sidebar');
});

Route::get('/blogRight_Sidebar', function () {
    return view('blog.blogRight_Sidebar');
});

// -------------------Pages---------------------
Route::get('/aboutUs', function () {
    return view('pages.aboutUs');
});

Route::get('/contactUs', function () {
    return view('pages.contactUs');
});

Route::get('/cartPage', function () {
    return view('pages.cartPage');
});

Route::get('/portFolio', function () {
    return view('pages.portFolio');
});

Route::get('/wishlistPage', function () {
    return view('pages.wishlistPage');
});

Route::get('/loginPage', function () {
    return view('pages.loginPage');
});

Route::get('/errorPage', function () {
    return view('pages.errorPage');
});



// -------------------Contact---------------------
Route::get('/contact', function () {
    return view('contact.contact');
});


// -------------------Privacy Policy---------------------
Route::get('/privacy_Policy', function () {
    return view('privacy.privacy_Policy');
});
