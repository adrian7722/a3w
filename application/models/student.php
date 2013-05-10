<?php

class Student extends Basemodel
{
    public static $timestamps = true;

    public static $rules = array(
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'telephone' => 'required',
        
    );

    public function group() {
        return $this->belongs_to('Group');
    }


}