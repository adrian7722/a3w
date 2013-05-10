<?php

class Group extends Basemodel
{
    public static $timestamps = true;

    public static $rules = array(
        'start' => 'required',
        'stationarity' => 'required',
        'hours' => 'requierd',
        
    );

    public function students() {
        return $this->has_many('Student');
    }

    public function course() {
        return $this->belongs_to('Course');
    }


}