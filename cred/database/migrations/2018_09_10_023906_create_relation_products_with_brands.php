<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationProductsWithBrands extends Migration
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

        Schema::table('products', function (Blueprint $table) {
            // Cria uma chave estrangeira entre tabela products e categories
            $table->foreign('brand_id')->references('id')->on('brands');
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

        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropForeign(['brand_id']);
        });

        Schema::enableForeignKeyConstraints();
    }
}
