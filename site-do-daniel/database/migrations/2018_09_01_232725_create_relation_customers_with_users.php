<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationCustomersWithUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::disableForeignKeyConstraints();

        Schema::table('customers', function (Blueprint $table) {
            // Cria uma chave estrangeira entre tabela customers e users
            $table->foreign('user_id')->references('id')->on('users');
        });
        
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::disableForeignKeyConstraints();

        Schema::table('customers', function (Blueprint $table) {
            //
            $table->dropForeign(['user_id']);
        });

        Schema::enableForeignKeyConstraints();
    }
}
