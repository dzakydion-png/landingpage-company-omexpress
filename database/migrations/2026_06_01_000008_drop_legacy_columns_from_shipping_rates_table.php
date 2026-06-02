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
            $columns = [
                'route_label',
                'service_type',
                'price_from',
                'price_text',
                'note',
                'min_weight_kg',
                'sort_order',
            ];

            foreach ($columns as $column) {
                if (Schema::hasColumn('shipping_rates', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipping_rates', function (Blueprint $table) {
            if (!Schema::hasColumn('shipping_rates', 'route_label')) {
                $table->string('route_label');
            }

            if (!Schema::hasColumn('shipping_rates', 'service_type')) {
                $table->string('service_type');
            }

            if (!Schema::hasColumn('shipping_rates', 'price_from')) {
                $table->unsignedBigInteger('price_from')->nullable();
            }

            if (!Schema::hasColumn('shipping_rates', 'price_text')) {
                $table->string('price_text')->nullable();
            }

            if (!Schema::hasColumn('shipping_rates', 'note')) {
                $table->text('note')->nullable();
            }

            if (!Schema::hasColumn('shipping_rates', 'min_weight_kg')) {
                $table->decimal('min_weight_kg', 8, 2)->nullable();
            }

            if (!Schema::hasColumn('shipping_rates', 'sort_order')) {
                $table->unsignedInteger('sort_order')->default(0);
            }
        });
    }
};
