<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookfarmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookfarmer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('weightcommodity');
            $table->string('namecommodity');
            $table->string('recivecommodity');
            $table->string('priceperbag');
            $table->string('finalprice');
        
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
        Schema::dropIfExists('bookfarmer');
    }
}
