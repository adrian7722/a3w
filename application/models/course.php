<?php

class Course extends Basemodel
{
    public static $timestamps = true;

    public static $rules = array(
        'name' => 'required',
        
    );

    public function groups() {
        return $this->has_many('Group');
    }

    public function school() {
        return $this->belongs_to('School');
    }


}