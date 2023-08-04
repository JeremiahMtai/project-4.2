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
        Schema::create('mbrsaves', function (Blueprint $table) {
            $table->id();
            // $table->string('name')->nullable();
            // $table->string('phone')->nullable();
            // $table->string('address')->unique();
            $table->string('saving_typ')->nullable();
            $table->string('date')->nullable();
            $table->string('amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbrsaves');
    }
};
