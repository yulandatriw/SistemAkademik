<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->integer("nim")->length(8)->unsigned()->primary();
            $table->integer("idmakul")->length(8);
            $table->integer("idthnajar")->length(8);
            $table->integer("idkelas")->length(8);
            $table->integer("uk1")->length(11);
            $table->integer("uk2")->length(11);
            $table->integer("uts")->length(11);
            $table->integer("uas")->length(11);
            $table->foreign("nim")->references("nim")->on("mahasiswa")->onDelete("cascade");
            $table->foreign("idmakul")->references("idmakul")->on("matakuliah")->onDelete("cascade");
            $table->foreign("idthnajar")->references("idthnajar")->on("tahunajaran")->onDelete("cascade");
            $table->foreign("idkelas")->references("idkelas")->on("kelas")->onDelete("cascade");
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
        Schema::dropIfExists('nilais');
    }
}
