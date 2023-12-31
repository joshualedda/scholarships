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
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('student_id');
        $table->string('lastname');
        $table->string('firstname');
        $table->string('initial');
        $table->string('email');
        $table->string('sex');
        $table->string('status');
        $table->string('barangay');
        $table->string('municipal');
        $table->string('province');
        $table->string('campus');
        $table->string('course');
        $table->integer('level');
        $table->string('father');
        $table->string('mother');
        $table->string('contact', 11);
        $table->string('studentType');
        $table->string('nameSchool')->nullable();
        $table->string('lastYear')->nullable();
        $table->string('grant_status');
        $table->string('grant')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
