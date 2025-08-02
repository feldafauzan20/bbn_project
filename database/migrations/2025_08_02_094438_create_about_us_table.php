<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_about_us_table.php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('foto_head');
            $table->string('foto_1');
            $table->string('judul_1');
            $table->text('desc_1');
            $table->string('foto_2');
            $table->string('judul_2');
            $table->text('desc_2');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
