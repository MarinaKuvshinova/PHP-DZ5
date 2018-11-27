<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2018
 * Time: 12:07
 */

class form {
    protected function getMethod($att){
        $str ='';
        foreach($att as $k=>$v){
            $str.=$k.'="'.$v.'" ';
        }
        return $str;
    }

    public function open($att){
        $a = $this->getMethod($att);
        return '<form '.$a.' ><br>';
    }

    public function close(){
        return '</form>';
    }

    public function input($att){
        $a = $this->getMethod($att);
        return '<input '.$a.' ><br><br>';
    }

    public function password($att){
        $a = $this->getMethod($att);
        return '<input type="password" '.$a.' ><br><br>';
    }

    public function textarea($att) {
        $a = $this->getMethod($att);
        return '<textarea '.$a.' ></textarea><br><br>';
    }

    public function submit($att){
        $a = $this->getMethod($att);
        return '<input type="submit" '.$a.'>';
    }
}

$form = new form();
echo $form->open(['action' => 'index.php', 'method' => 'post']);
echo $form->input(['type' => 'text','placeholder'=>'Ваше имя', 'name' => 'name']);
echo $form->password(['placeholder'=>'Ваше пароль', 'name' => 'pass']);
echo $form->textarea(['name' => 'text', 'cols' => 100, 'rows' => 5]);
echo $form->submit(['value'=>'submit']);
echo $form->close();

