<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nuptk', 17);
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->char('tlp', 13);
            $table->string('email');
            $table->string('jabatan');
            $table->string('pendidikan');
            $table->string('gambar');
            $table->string('fb');
            $table->string('ig');
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
        Schema::dropIfExists('teachers');
    }
}