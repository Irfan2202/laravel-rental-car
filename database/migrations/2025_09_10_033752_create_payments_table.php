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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade');
            $table->dateTime('payment_date');
            $table->decimal('amount', 10, 2);
            $table->enum('method', ['cash', 'transfer', 'credit_card', 'ewallet']);
            $table->enum('status', ['dp', 'lunas']);
            $table->decimal('remaining_amount', 10, 2)->default(0);
            $table->decimal('penalty', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
