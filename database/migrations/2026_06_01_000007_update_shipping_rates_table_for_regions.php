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
        Schema::table('shipping_rates', function (Blueprint $table) {
            if (!Schema::hasColumn('shipping_rates', 'region_id')) {
                $table->foreignId('region_id')->nullable()->constrained('regions')->nullOnDelete();
            }
            if (!Schema::hasColumn('shipping_rates', 'destination')) {
                $table->string('destination')->nullable();
            }
            if (!Schema::hasColumn('shipping_rates', 'base_price')) {
                $table->unsignedBigInteger('base_price')->nullable();
            }
            if (!Schema::hasColumn('shipping_rates', 'estimation')) {
                $table->string('estimation')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipping_rates', function (Blueprint $table) {
            if (Schema::hasColumn('shipping_rates', 'region_id')) {
                $table->dropConstrainedForeignId('region_id');
            }
            if (Schema::hasColumn('shipping_rates', 'destination')) {
                $table->dropColumn('destination');
            }
            if (Schema::hasColumn('shipping_rates', 'base_price')) {
                $table->dropColumn('base_price');
            }
            if (Schema::hasColumn('shipping_rates', 'estimation')) {
                $table->dropColumn('estimation');
            }
        });
    }
};
