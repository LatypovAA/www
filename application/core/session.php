<?php
class App_Session {
    public static function start()
    {
        session_start();
    }
}
 
class App_Router {
    public function dispatch()
    {
        App_Session::start();
    }
}
 
abstract class App_Session_Abstract {
    abstract protected function _getNameSpace();
 
    public function __construct()
    {
        $_SESSION[$this->_getNameSpace()] = [];
    }
 
    public function get($key)
    {
        return isset($_SESSION[$this->_getNameSpace()][$key]) ? $_SESSION[$this->_getNameSpace()][$key] : null;
    }
 
    public function set($key, $value)
    {
        $_SESSION[$this->_getNameSpace()][$key] = $value;
    }
 
 
}
 
class App_Session_Core extends App_Session_Abstract
{
    protected function _getNameSpace()
    {
        return 'core';
    }
}
 
class App_Session_User extends App_Session_Abstract
{
    protected function _getNameSpace()
    {
        return 'user';
    }
 
}