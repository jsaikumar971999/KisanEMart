<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddTraderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_trader', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
            $table->string('ownertyp');

              $table->string('proprietorname');
               $table->string('gender');
                $table->string('state');
                 $table->string('district');
                $table->string('mandal');
                $table->string('pincode');
                 $table->date('dateofbirth');
                 $table->string('email'); 
                $table->string('address');
                $table->string('idtype');
                $table->string('idname')->unique();
                $table->string('phone');
                 $table->string('phone2');
                $table->string('millname');
                $table->date('yearofmill');
                $table->string('milltype');
               $table->string('milloperated');
               $table->string('millcapacity');
               $table->string('millpancard');
               $table->string('gstnumber');
               $table->string('spcblicence');
               $table->date('spcbvalid');
               $table->string('milllicense');
               $table->date('validupto');
               $table->string('milllocation');
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
        Schema::dropIfExists('add_trader');
    }
}
