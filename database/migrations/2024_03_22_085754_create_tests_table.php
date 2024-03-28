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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('officerId')->constrained('admins');
            $table->foreignId('candidateId')->constrained('sellers');
            $table->string('theoryTest'); 
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *  'tddNo',
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
