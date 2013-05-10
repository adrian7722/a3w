<?php

class Create_Groups_Table {    

    public function up()
    {
        Schema::create('groups', function($table) {
            $table->increments('id');
            $table->datetime('start');
            $table->string('stationarity');
            $table->string('hours');
            $table->integer('course_id');
            $table->timestamps();
            
    });

    }    

    public function down()
    {
        Schema::drop('groups');
    }

}