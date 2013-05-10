<?php

class Create_Courses_Table {    

    public function up()
    {
        Schema::create('courses', function($table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->string('description', 500)->nullable();
            $table->integer('school_id');
            $table->timestamps();
            
    });

    }    

    public function down()
    {
        Schema::drop('courses');
    }

}