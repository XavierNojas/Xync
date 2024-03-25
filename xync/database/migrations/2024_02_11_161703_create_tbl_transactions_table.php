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
        Schema::create('tbl_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference_number');
            $table->string('sender_name');
            $table->string('sender_contact');
            $table->string('recipient_name');
            $table->string('recipient_contact');
            $table->string('transaction_type');
            $table->string('amount_local_currency');
            $table->string('currency_conversion_code');
            $table->string('amount_converted');
            $table->string('transaction_status');
            $table->string('branch_sent');
            $table->string('branch_recieved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_transactions');
    }
};
