<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration penambahan kolom data trade-in secara aman ke tabel leads.
     */
    public function up(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            if (!Schema::hasColumn('leads', 'city')) {
                $table->string('city', 100)->nullable()->after('phone');
            }
            if (!Schema::hasColumn('leads', 'old_brand')) {
                $table->string('old_brand', 100)->nullable()->after('city');
            }
            if (!Schema::hasColumn('leads', 'old_model')) {
                $table->string('old_model', 150)->nullable()->after('old_brand');
            }
            if (!Schema::hasColumn('leads', 'old_year')) {
                $table->string('old_year', 30)->nullable()->after('old_model');
            }
            if (!Schema::hasColumn('leads', 'old_transmission')) {
                $table->string('old_transmission', 50)->nullable()->after('old_year');
            }
            if (!Schema::hasColumn('leads', 'old_mileage')) {
                $table->string('old_mileage', 100)->nullable()->after('old_transmission');
            }
            if (!Schema::hasColumn('leads', 'old_condition')) {
                $table->string('old_condition', 150)->nullable()->after('old_mileage');
            }
            if (!Schema::hasColumn('leads', 'old_expected_price')) {
                $table->string('old_expected_price', 100)->nullable()->after('old_condition');
            }
            if (!Schema::hasColumn('leads', 'payment_plan')) {
                $table->string('payment_plan', 100)->nullable()->after('old_expected_price');
            }
            if (!Schema::hasColumn('leads', 'inspection_place')) {
                $table->string('inspection_place', 150)->nullable()->after('payment_plan');
            }
        });
    }

    /**
     * Membalikkan migration.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $columnsToDrop = [];
            foreach ([
                'city',
                'old_brand',
                'old_model',
                'old_year',
                'old_transmission',
                'old_mileage',
                'old_condition',
                'old_expected_price',
                'payment_plan',
                'inspection_place',
            ] as $col) {
                if (Schema::hasColumn('leads', $col)) {
                    $columnsToDrop[] = $col;
                }
            }

            if (!empty($columnsToDrop)) {
                $table->dropColumn($columnsToDrop);
            }
        });
    }
};