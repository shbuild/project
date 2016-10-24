<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function(Blueprint $table){
            $table->string('firstname');
             $table->string('lastname');
             $table->integer('age');
             $table->string('contact');
             $table->string('username');
             $table->string('address');   
        });
         


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::table('users', function(Blueprint $table){
            $table->dropColumn('firstname');
             $table->dropColumn('lastname');
             $table->dropColumn('age');
             $table->dropColumn('contact');
             $table->dropColumn('username');
             $table->dropColumn('address');   
        });
    }
}
