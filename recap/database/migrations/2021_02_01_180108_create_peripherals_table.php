<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeripheralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peripherals', function (Blueprint $table) {
            $table->id();

            $table -> string('name', 50);
            $table -> string('model', 100) -> unique();
            $table -> integer('price');
            $table -> integer('consumption');

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
        Schema::dropIfExists('peripherals');
    }
}
