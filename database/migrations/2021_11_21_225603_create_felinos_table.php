<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFelinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('felinos', function (Blueprint $table) {
            $table->id();
            $table->string('especie');
            $table->string('clase');
            $table->string('orden');
            $table->string('familia');
            $table->string('genero');
            $table->string('longevidad');
            $table->string('longitud');
            $table->string('peso');
            $table->text('informacion');
            $table->text('url');
            $table->timestamps();
            $table->engine="InnoDB";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('felinos');
    }
}
