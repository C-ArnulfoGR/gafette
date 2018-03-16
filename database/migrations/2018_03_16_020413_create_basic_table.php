<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitio');
            $table->string('link_fb');
            $table->string('link_tw');
            $table->string('link_yt');
            $table->string('mail');
            $table->string('address');
            $table->string('telephone');
            $table->string('objective');
            $table->string('about_us');
            $table->string('biography');
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
        Schema::dropIfExists('basic');
    }
}
