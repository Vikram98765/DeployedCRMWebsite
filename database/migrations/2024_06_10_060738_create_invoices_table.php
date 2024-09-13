<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->foreignId('profile_id')->constrained()->cascadeOnDelete();
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('customer_gstin');
            $table->float('unit_price', 10, 2)->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->float('total', 15, 2)->nullable();
            $table->float('discount', 10, 2)->nullable();
            $table->float('tax', 10, 2)->nullable();
            $table->float('sub_total', 15, 2)->nullable();
            $table->float('grand_total', 15, 2)->nullable();
            $table->float('paid', 15, 2)->nullable();
            $table->float('due', 15, 2)->nullable();
            $table->text('description')->nullable();
            $table->string('payment_method')->nullable();
            $table->date('invoice_date');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};

