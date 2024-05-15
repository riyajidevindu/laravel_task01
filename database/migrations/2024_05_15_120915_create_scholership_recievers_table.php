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
        Schema::create('scholership_recievers', function (Blueprint $table) {
            $table->id();
            $table->string('reciever_name');
            $table->string('donor_name');
            $table->double('monthly_payment');
            $table->boolean('still_recieving')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholership_recievers');
    }
};
