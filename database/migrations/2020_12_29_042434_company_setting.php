<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanySetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_setti', function (Blueprint $table) {
         $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('email', 50);
            $table->string('phone', 20);
            $table->string('company_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->enum('accept_payments', ['yes', 'no']);
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
        //
    }
}
