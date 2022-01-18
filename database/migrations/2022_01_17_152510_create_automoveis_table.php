<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automoveis', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->decimal('preco', 8, 2);
            $table->integer('ano');
            $table->string('combustivel', 255);
            $table->text('imagem')->nullable();
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
        Schema::dropIfExists('automoveis');
    }
}
