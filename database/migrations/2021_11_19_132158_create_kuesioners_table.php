<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioner', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('soal_1');
            $table->string('soal_2');
            $table->string('soal_3');
            $table->string('soal_4');
            $table->string('soal_5');
            $table->string('soal_6');
            $table->string('soal_7');
            $table->string('soal_8');
            $table->string('soal_9');
            $table->string('soal_10');
            $table->string('soal_11');
            $table->string('soal_12');
            $table->string('soal_13');
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
        Schema::dropIfExists('kuesioner');
    }
}
