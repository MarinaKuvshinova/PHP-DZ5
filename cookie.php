<?php
class cookie {
    public function set($name, $value){
        if(!isset($_COOKIE[$name]))
        {
            setcookie($name, $value, time() + 60*60*24, '/');
            //$_COOKIE['name'] = $value;
        }
    }

    public function get($name){
        return $_COOKIE[$name];
    }

    public function delete($name){
        if(isset($_COOKIE[$name])){
            setcookie($name, '', 1, '/');
           // unset($_COOKIE[$name]);
        }
    }
}

$cookie = new cookie();
$cookie->set('cookie1', 'text cookie1');
//echo $cookie->get('cookie1');
$cookie->delete('cookie1');
