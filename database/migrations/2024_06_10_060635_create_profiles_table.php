<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id(); // Laravel shorthand for an auto-incrementing primary key
            $table->string('company_name')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('landline')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('current_logo')->nullable();
            $table->string('customer_prefix');
            $table->string('invoice_prefix');
            $table->string('gstinno')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('bankname')->nullable();
            $table->string('bankaccno')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('qr')->nullable();








            $table->tinyInteger('is_deleted')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
