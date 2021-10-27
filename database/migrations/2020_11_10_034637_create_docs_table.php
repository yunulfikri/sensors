<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->string('voc')->nullable();
            $table->string('vbeban')->nullable();
            $table->string('ibeban')->nullable();
            $table->string('suhu')->nullable();
            $table->string('kelembaban')->nullable();
            $table->string('irradiasi')->nullable();
            $table->string('daya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * http://localhost:8000/api/sensor?temp=60&sun=40&humadity=13&volt=55&current=3&load=14
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docs');
    }
}
