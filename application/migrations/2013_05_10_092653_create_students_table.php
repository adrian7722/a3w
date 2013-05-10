<?php

class Create_Students_Table {    

    public function up()
    {
        Schema::create('students', function($table) {
            $table->increments('id');
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('email', 100);
            $table->string('telephone', 30);
            $table->text('comments');
            $table->boolean('paid');
            $table->boolean('confirmed');
            $table->integer('group_id');
            $table->timestamps();
            
    });

    }    

    public function down()
    {
        Schema::drop('students');
    }

}