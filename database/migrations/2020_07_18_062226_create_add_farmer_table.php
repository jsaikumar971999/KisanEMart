<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddFarmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_farmer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
             $table->string('farmarname');
              $table->string('gender');
               $table->string('address');
                $table->string('state');
                 $table->string('district');
                $table->string('mandal');
                $table->string('pincode');
                 $table->date('dateofbirth');
                $table->string('email');
                $table->string('idtype');
                $table->string('idname')->unique();
                $table->string('phone');
                 $table->string('phone2');
                $table->string('landcopy');
                $table->string('landakar');
               
               $table->string('bankname');
               $table->string('acholdername');
                $table->string('accountno');
                 $table->string('ifsccode');
                 $table->string('passbook');
                $table->string('getsms')->nullable();
                $table->string('getmail')->nullable();


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
        Schema::dropIfExists('add_farmer');
    }
}
