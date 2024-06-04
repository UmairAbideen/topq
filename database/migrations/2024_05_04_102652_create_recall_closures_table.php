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
        Schema::create('recall_closures', function (Blueprint $table) {
            $table->id();

            $table->string('product')->nullable();
            $table->string('recall_no')->nullable();

            $table->string('problem_detail')->nullable();
            $table->string('batch')->nullable();
            $table->string('serial')->nullable();
            $table->string('expiry')->nullable();
            $table->date('manufacturing_date')->nullable();

            $table->string('distributed_c')->nullable();
            $table->string('recovered_c')->nullable();
            $table->string('recovery_c')->nullable();

            $table->string('distributed_s')->nullable();
            $table->string('recovered_s')->nullable();
            $table->string('recovery_s')->nullable();

            $table->string('remarks')->nullable();
            $table->string('decision')->nullable();

            $table->string('reviewed_by')->nullable();
            $table->date('review_date')->nullable();
            $table->string('approved_by')->nullable();
            $table->date('approval_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recall_closures');
    }
};
