<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('fundname', 100);
            $table->string('frequency', 100);
            $table->text('purpose');
            $table->decimal('amount' ,9, 2);
            $table->string('accountno', 20);
            $table->timestamp('startdate');
            $table->timestamp('enddate')->nullable();
            $table->boolean('active');
            $table->string('ussdcode');
            $table->string('fundtype');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funds');
    }
}
