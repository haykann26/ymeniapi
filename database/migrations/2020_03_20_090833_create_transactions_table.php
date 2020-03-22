<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fund_id');
            $table->unsignedBigInteger('payee_id');
            $table->string('frequency', 100);
            $table->decimal('amount', 9,2);
            $table->string('wallettype', 30);
            $table->string('phoneno', 30);
            $table->string('selfphone', 30);
            $table->string('refphone', 30);
            $table->timestamps();

            $table->foreign('fund_id')->references('id')->on('funds');
            $table->foreign('payee_id')->references('id')->on('payees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
