<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ar_actualites', function (Blueprint $table) {
            $table->increments('id');
             $table->string('titre');
                $table->text('content');
                $table->string('url');
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
        Schema::drop('ar_actualites');
    }
}
