<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArSouscategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ar_souscategories', function (Blueprint $table) {
            $table->increments('id');
                 $table->string('name');
               $table->integer('idcatg');
               $table->string('stug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ar_souscategories');
    }
}
