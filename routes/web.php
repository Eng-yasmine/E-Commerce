<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


$array_pages =
    [
        'home' => 'public/index',
        'contact' => 'view/auth/contact',
        'forget-password' => 'view/auth/forget-password',
        'login' => 'view/auth/login',
        'my-account' => 'view/auth/my-account',
        'register' => 'view/auth/register',
        'blog-details' => 'view/blog/blog-details',
        'blog' => 'view/blog/blog',
        'cart' => 'view/cart/cart',
        'checkout' => 'view/cart/checkout',
        'product-details' => 'view/cart/product-details',
        'tracking' => 'view/cart/tracking',
        'about' => 'view/about',
        'faq' => 'view/faq',
        'privacy-policy' => 'view/privacy-policy',
        'services' => 'view/services',
        'wishlist' => 'view/wishlist',
        '404' => 'view/error404/404',
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

if (array_key_exists($page, $array_pages)) {
    $file = __DIR__ . "/../" . $array_pages[$page] . ".php";
    //var_dump($file);
    if ($file && file_exists($file)) {
        include $file;
    } else {
        include __DIR__ . "/../../view/error404/404.php";
    }
}
