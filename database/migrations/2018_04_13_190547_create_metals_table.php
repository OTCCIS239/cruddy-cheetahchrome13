<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metals', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('name');
            $table->string('type');
            $table->string('form');
            $table->text('description');
            $table->unsignedDecimal('price', 8, 2);
            $table->unsignedInteger('stock');
            $table->string('img')->default('images/default.jpg');          
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
        Schema::dropIfExists('metals');
    }
}
