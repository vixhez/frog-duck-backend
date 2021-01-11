<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ducks', function (Blueprint $table) {
            $table->id();
            $table->string('regular-name', 100);
            $table->string('latin-name', 100);
            $table->text('description');
            $table->enum('extroversion', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            $table->enum('colourfulness', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            $table->enum('kindness', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            $table->enum('activeness', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            $table->enum('happiness', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
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
        Schema::dropIfExists('ducks');
    }
}
