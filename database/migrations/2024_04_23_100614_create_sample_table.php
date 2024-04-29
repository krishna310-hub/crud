<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample', function (Blueprint $table) {

            $table->id();

            for ($i = 1; $i <= 500; $i++) {
                $table->text('column_text_' . $i);
            }

            // Use string type for remaining columns
            for ($i = 501; $i <= 1000; $i++) {
                $table->string('column_string_' . $i, 255);
            }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sample');
    }
}


