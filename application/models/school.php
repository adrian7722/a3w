<?php

class School extends Basemodel
{
    public static $timestamps = false;

    public static $rules = array(
        'name' => 'required',
        
    );

    public function courses() {
        return $this->has_many('Course');
    }


}