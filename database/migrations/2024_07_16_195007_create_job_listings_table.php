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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('job_nature');
            $table->integer('vacancy');
            $table->string('salary')->nullable();
            $table->string('location');
            $table->text('description');
            $table->text('benefits')->nullable();
            $table->text('responsibility')->nullable();
            $table->text('qualifications')->nullable();
            $table->text('keywords');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs_listings');
    }


};
