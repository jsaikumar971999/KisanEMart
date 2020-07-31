<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMillslotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('millslots', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('mtraderid');
            $table->string('mfarmerid');
            $table->string('mfarmername');
            $table->string('mfarmerphone');
            $table->date('mbookdate');
            $table->string('mstate');
            $table->string('mdistrict');
            $table->string('mmandal');

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
        Schema::dropIfExists('millslots');
    }
}
