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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('tags');
            $table->string('image');
            $table->string('client_name');
            $table->integer('duration')->default(6); // months
            $table->date('start_date');
            $table->string('location');
            $table->text('overview');
            $table->text('scope')->nullable();
            $table->text('solution')->nullable();
            $table->text('challenge')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('projects');
    }
};
