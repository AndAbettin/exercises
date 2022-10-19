<?php 
class Session {
    public static $instance = null;
    public static function instance()
    {
        if (static::$instance === null)
        { // if there is no instance, create one
            static::$instance = new Session;
        } // else return existing instance
        return static::$instance;
    }

    public $data = [];

    public function __construct()
    { // happens only when object is created, object only ever created once
        session_start();
        $this->data = $_SESSION;
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;
        $_SESSION[$key] = $value;
    }
}




?>