<?php
require_once 'Validator.php';


class Sanitizer{


public static function sanitize($value){
return htmlspecialchars(htmlentities(trim($value)));
}

public static function checkrequest($method){
    $methods = ['POST' , 'GET'];
    if(!in_array($method , $methods)){

   return  Session::set('errors' , $method . 'unsupported request');
}
return true;
}




}





















?>