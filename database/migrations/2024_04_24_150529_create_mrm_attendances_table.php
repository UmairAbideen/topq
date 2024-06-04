<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mrm_attendances', function (Blueprint $table) {
            $table->id();
            $table->string('meeting_no')->nullable();
            $table->string('name1')->nullable();
            $table->string('department1')->nullable();
            $table->string('signature1')->nullable();
            $table->string('name2')->nullable();
            $table->string('department2')->nullable();
            $table->string('signature2')->nullable();
            $table->string('name3')->nullable();
            $table->string('department3')->nullable();
            $table->string('signature3')->nullable();
            $table->string('name4')->nullable();
            $table->string('department4')->nullable();
            $table->string('signature4')->nullable();
            $table->string('name5')->nullable();
            $table->string('department5')->nullable();
            $table->string('signature5')->nullable();
            $table->string('name6')->nullable();
            $table->string('department6')->nullable();
            $table->string('signature6')->nullable();
            $table->string('name7')->nullable();
            $table->string('department7')->nullable();
            $table->string('signature7')->nullable();
            $table->string('name8')->nullable();
            $table->string('department8')->nullable();
            $table->string('signature8')->nullable();
            $table->string('name9')->nullable();
            $table->string('department9')->nullable();
            $table->string('signature9')->nullable();
            $table->string('name10')->nullable();
            $table->string('department10')->nullable();
            $table->string('signature10')->nullable();
            $table->string('name11')->nullable();
            $table->string('department11')->nullable();
            $table->string('signature11')->nullable();
            $table->string('name12')->nullable();
            $table->string('department12')->nullable();
            $table->string('signature12')->nullable();
            $table->string('prepared_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mrm_attendance');
    }
};
