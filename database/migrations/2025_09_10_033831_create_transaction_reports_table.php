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
        Schema::create('transaction_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade');
            $table->dateTime('report_date');
            $table->string('customer_name', 100);
            $table->string('car_info', 100);
            $table->string('rental_period', 50);
            $table->integer('total_days');
            $table->decimal('car_price', 10, 2);
            $table->decimal('total_amount', 10, 2);
            $table->enum('payment_status', ['dp', 'lunas']);
            $table->decimal('penalty', 10, 2)->default(0);
            $table->enum('transaction_status', ['completed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_reports');
    }
};
