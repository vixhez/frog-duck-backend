<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frogs', function (Blueprint $table) {
            $table->id();
            $table->string('regular_name', 100);
            $table->string('latin_name', 100);
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
        Schema::dropIfExists('frogs');
    }
}

// $frog = new Frog();
// $frog->regular_name = 'Chief Ribbet';
// $frog->latin_name = 'Ribbet o Ribbins';
// $frog->description = 'A subtle but spiritually vibrant froggo';
// $frog->extroversion = 5;
// $frog->colourfulness = 9;
// $frog->kindness = 10;
// $frog->activeness = 3;
// $frog->happiness = 8;
// $frog->save();