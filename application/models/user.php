<?php

class User extends Basemodel
{
    public static $timestamps = false;

    public static $rules = array(
        'login' => 'required',
        'password' => 'required',
        
    );


}