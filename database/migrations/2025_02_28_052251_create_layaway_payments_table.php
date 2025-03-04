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
        Schema::create('layaway_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layaway_id')->index();
            $table->unsignedBigInteger('customer_id')->index();
            $table->decimal('balance', 15, 2);
            $table->decimal('amount_paid', 15, 2)->default(0);
            $table->date('payment_date')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('layaway_id')->references('id')->on('layaways')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layaway_payments');
    }
};
