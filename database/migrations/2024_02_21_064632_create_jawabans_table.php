<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabans', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_pengguna')->references('id_pengguna')->on('penggunas');
            $table->string('j1');
            $table->string('j2');
            $table->string('j3');
            $table->string('j4');
            $table->string('j5');
            $table->string('j6');
            $table->string('j7');
            $table->string('j8');
            $table->string('j9');
            $table->string('j10');
            $table->string('j11');
            $table->string('j12');
            $table->string('j13');
            $table->string('j14');
            $table->string('j15');
            $table->string('j16');
            $table->string('j17');
            $table->string('j18');
            $table->string('j19');
            $table->string('j20');
            $table->string('j21');
            $table->string('j22');
            $table->string('j23');
            $table->string('j24');
            $table->string('j25');
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
        Schema::dropIfExists('jawabans');
    }
};
