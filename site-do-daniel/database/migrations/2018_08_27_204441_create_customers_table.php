<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('user_id')->unique();
            $table->string('cpf_cnpj',20)->unique();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('gender',1);
            $table->date('birthday')->nullable();            
            $table->string('phone',32)->nullable();
            $table->string('email',60)->unique();

            $table->string('address',50);
            $table->string('address_number',10);
            $table->string('address_complement',50)->nullable();
            $table->string('city',50);
            $table->string('state',2);
            $table->string('zipcode',8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}