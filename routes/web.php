<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home' ;


$array_pages =
[
    'home' => 'public/index', 
    'contact' => 'view/auth/contact',
    'forget-password' => 'view/auth/forget-password',
    'login' => 'view/auth/login',
    'my-account' => 'view/auth/my-account',
    'register' => 'view/auth/register',
    'blog-details' =>'view/blog/blog-details',
    'blog' => 'view/blog/blog',
    'cart' => 'view/cart/cart',
    'checkout' => 'view/cart/checkout',
    'product-details' => 'view/cart/product-details',
    'tracking' => 'view/cart/tracking',
    'about' => 'view/about',
    'faq' => 'view/faq',
    'privacy-policy' => 'view/privacy-policy',
    'services' => 'view/services',
    'wishlist' => 'view/wishlist'
    'E-404' => 'view/error404/E-404',
    'index-2' => 'public/index-2',
    'logic_forget_pass' => 'controllers/auth/logic_forget_pass',
    'logic_login' => 'controllers/auth/logic_login',
    'logic_register' => 'controllers/auth/logic_register',
    'logic_user_account' => 'controllers/auth/logic_user_account',
    'logic_blog_details' => 'controllers/blog/logic_blog_details',
    'logic_blog' => 'controllers/blog/logic_blog',
    'logic_cart' => 'controllers/cart/logic_cart',
    'logic_checkout' => 'controllers/cart/logic_checkout',
    'logic_product' => 'controllers/cart/logic_product',
    'logic_tracking' => 'controllers/cart/logic_tracking',

];

foreach($array_pages as $key => $value){
if(isset($page) && isset($array_pages[$key])){
    if($page == $array_pages[$key]){
       include "'$array_pages[$value].php'" ;
         exit ;

    }else{
        $page = 'home';
        include "'$array_key[$value].php'"; 
        exit;
    }
}else{
    $page = 'E-404';
    include "'$array_key[$value].php'"; 
    exit;

}

}




















?>