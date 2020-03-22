<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fund_id');
            $table->string('firstname',30);
            $table->string('lastname',30);
            $table->string('othername',30)->nullable();
            $table->string('email',100);
            $table->string('phone',30);
            $table->timestamp('startdate');
            $table->timestamp('enddate');
            $table->timestamps();

            $table->foreign('fund_id')->references('id')->on('funds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payees');
    }
}
