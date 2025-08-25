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
        Schema::create('demands', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->date('date')->nullable();
            $table->integer('people')->default(0);
            $table->boolean('airport')->default(false);
            $table->text('note')->nullable();
            $table->string('status')->default('placed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demands');
    }
};
