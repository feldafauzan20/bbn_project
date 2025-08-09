<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_nama_and_jabatan_to_services_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('nama')->nullable()->after('testimonial');
            $table->string('jabatan')->nullable()->after('nama');
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['nama', 'jabatan']);
        });
    }
};