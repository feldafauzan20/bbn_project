<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_how_we_works_table.php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('how_we_works', function (Blueprint $table) {
            $table->id();
            $table->string('foto_head');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('how_we_works');
    }
};
