<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArSScategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ar_s_scategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
              $table->integer('id_souscatg');
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
        Schema::drop('ar_s_scategories');
    }
}
