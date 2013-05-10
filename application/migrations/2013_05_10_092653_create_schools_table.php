<?php

class Create_Schools_Table {    

    public function up()
    {
        Schema::create('schools', function($table) {
            $table->increments('id');
            $table->string('name');
            
    });

    }    

    public function down()
    {
        Schema::drop('schools');
    }

}