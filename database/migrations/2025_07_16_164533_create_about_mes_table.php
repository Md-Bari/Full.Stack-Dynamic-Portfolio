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
        Schema::create('about_me', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // unsignedBigInteger for foreign key to users.id
            $table->text('description')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('department');
            $table->integer('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->timestamps();

            // Add the foreign key constraint here inside the create table closure
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_me');
    }
};
