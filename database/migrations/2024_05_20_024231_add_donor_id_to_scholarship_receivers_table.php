<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('scholership_recievers', function (Blueprint $table) {
            $table->foreignId('donor_id')->nullable()->constrained('donors')->onDelete('cascade');
        });


        $defaultDonorId = 1;
        DB::table('scholership_recievers')->update(['donor_id' => $defaultDonorId]);


        Schema::table('scholership_recievers', function (Blueprint $table) {
            $table->foreignId('donor_id')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
