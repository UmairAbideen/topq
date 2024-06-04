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
        Schema::create('ccms', function (Blueprint $table) {
            $table->id();

            $table->string('request_no')->nullable();

            $table->date('logging_date')->nullable();
            $table->string('initiator')->nullable();
            $table->string('department')->nullable();
            $table->string('description')->nullable();
            $table->string('justification')->nullable();
            $table->string('area')->nullable();
            $table->string('impact')->nullable();

            $table->string('action1')->nullable();
            $table->string('action2')->nullable();
            $table->string('action3')->nullable();
            $table->string('priority')->nullable();
            $table->date('required_date')->nullable();

            $table->string('effected_doc1')->nullable();
            $table->string('doc_no1')->nullable();
            $table->string('effected_doc2')->nullable();
            $table->string('doc_no2')->nullable();
            $table->string('effected_doc3')->nullable();
            $table->string('doc_no3')->nullable();

            $table->string('initiated_by')->nullable();
            $table->date('initiation_date')->nullable();
            $table->string('verified_by')->nullable();
            $table->date('verification_date')->nullable();

            $table->string('classification')->nullable();
            $table->string('member_name1')->nullable();
            $table->string('designation1')->nullable();
            $table->string('recommendation1')->nullable();
            $table->string('sign1')->nullable();

            $table->string('member_name2')->nullable();
            $table->string('designation2')->nullable();
            $table->string('recommendation2')->nullable();
            $table->string('sign2')->nullable();

            $table->string('member_name3')->nullable();
            $table->string('designation3')->nullable();
            $table->string('recommendation3')->nullable();
            $table->string('sign3')->nullable();

            $table->string('reviewed_by')->nullable();
            $table->date('review_date')->nullable();
            $table->string('approved_by')->nullable();
            $table->date('approval_date')->nullable();

            $table->string('task1')->nullable();
            $table->string('responsible1')->nullable();
            $table->date('completion_date1')->nullable();

            $table->string('task2')->nullable();
            $table->string('responsible2')->nullable();
            $table->date('completion_date2')->nullable();

            $table->string('task3')->nullable();
            $table->string('responsible3')->nullable();
            $table->date('completion_date3')->nullable();

            $table->string('summary')->nullable();
            $table->date('implementation_date')->nullable();
            $table->string('final_assessment')->nullable();
            $table->string('monitoring')->nullable();
            $table->date('change_closing_date')->nullable();

            $table->string('closed_by')->nullable();
            $table->date('signing_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changes');
    }
};
