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
        Schema::table('inquiries', function (Blueprint $table) {
            $table->string('tattoo_size')->nullable()->after('sub_category');
            $table->string('tattoo_placement')->nullable()->after('tattoo_size');
            $table->string('tattoo_style')->nullable()->after('tattoo_placement');
            $table->string('tattoo_type')->nullable()->after('tattoo_style');
            $table->string('ink_preference')->nullable()->after('tattoo_type');
            $table->string('reference_link')->nullable()->after('ink_preference');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inquiries', function (Blueprint $table) {
            $table->dropColumn(['tattoo_size', 'tattoo_placement', 'tattoo_style', 'tattoo_type', 'ink_preference', 'reference_link']);
        });
    }
};
