<?php
class Session {
    
 
    private static function start() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    
    public static function set($key, $value) {
        self::start();
        $_SESSION[$key] = $value;
    }

    
    public static function get($key) {
        self::start();
        return $_SESSION[$key] ?? null;
    }

    
    public static function has($key) {
        self::start();
        return isset($_SESSION[$key]);
    }

   
    public static function remove($key) {
        self::start();
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    
    public static function removeAll() {
        self::start();
        session_unset();
        session_destroy();
    }

  
    public static function getAll() {
        self::start();
        return $_SESSION;
    }

    
    public static function flash($key, $message = null) {
        self::start();
        if ($message !== null) {
            $_SESSION['flash'][$key] = $message;
        } elseif (isset($_SESSION['flash'][$key])) {
            $msg = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]);
            return $msg;
        }
        return null;
    }
}


?>