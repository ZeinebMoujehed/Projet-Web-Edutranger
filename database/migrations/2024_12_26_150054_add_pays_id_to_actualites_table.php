<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('actualites', function (Blueprint $table) {
            $table->foreignId('pays_id')->after('description')->constrained()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('actualites', function (Blueprint $table) {
            $table->dropForeign(['pays_id']);
            $table->dropColumn('pays_id');
        });
    }
};
