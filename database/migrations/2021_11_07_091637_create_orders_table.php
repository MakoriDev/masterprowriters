<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('email');
            $table->string('paper_type');
            $table->string('spacing');
            $table->string('style');
            $table->integer('pages');
            $table->string('level');
            $table->string('deadline');
            $table->timestamp('deadline_timestamp');
            $table->decimal('amount');
            $table->string('payment_status')->default('unpaid');
            $table->string('payment_token')->nullable();
            $table->string('progress')->default('active');
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
        Schema::dropIfExists('orders');
    }
}
