<?php

class Create_Users_Table {    

    public function up()
    {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('login')->unique();
            $table->string('password');
            
    });

    }    

    public function down()
    {
        Schema::drop('users');
    }

}