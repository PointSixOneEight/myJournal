<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->string('cryptocurrency')->default('No transaction');
            $table->string('buyDate')->default('No transaction');
            $table->string('buyPrice')->default('No transaction');
            $table->string('buyUnits')->default('No transaction');
            $table->string('leverage')->default('No transaction');
            $table->string('buyCommission')->default('No transaction');
            $table->string('buyTotal')->default('No transaction');
           
            $table->string('sellDate')->default('No transaction');
            $table->string('sellPrice')->default('No transaction');
            $table->string('sellUnits')->default('No transaction');
            $table->string('sellCommission')->default('No transaction');
            $table->string('sellTotal')->default('No transaction');
            $table->string('range')->default('No transaction');
            $table->string('profit')->default('No transaction');
            $table->string('peso')->default('No transaction');
            $table->string('status')->default('No transaction');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
}
