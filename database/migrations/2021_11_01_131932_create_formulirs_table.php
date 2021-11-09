<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_provinces')->constrained('indonesia_provinces')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_cities')->constrained('indonesia_cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_districts')->constrained('indonesia_districts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_villages')->constrained('indonesia_villages')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama');
            $table->string('ttl');
            $table->text('alamat');
            $table->string('kota');
            $table->string('no_kk')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('no_rek')->nullable();
            $table->string('bank')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('peminatan');
            $table->string('status');
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
        Schema::dropIfExists('formulir');
    }
}
