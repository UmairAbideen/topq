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
        Schema::create('deviations', function (Blueprint $table) {
            $table->id();

            $table->date('deviation_date')->nullable();
            $table->string('deviation_no')->nullable();
            $table->string('initiator')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();

            $table->string('subject')->nullable();
            $table->string('detail')->nullable();
            $table->string('status')->nullable();
            $table->string('statement')->nullable();
            $table->string('action')->nullable();
            $table->date('date')->nullable();

            $table->string('ini_reviewed_by')->nullable();
            $table->date('ini_review_date')->nullable();
            $table->string('ini_approved_by')->nullable();
            $table->date('ini_approval_date')->nullable();

            $table->string('root_cause')->nullable();
            $table->string('categorization')->nullable();

            $table->string('name1')->nullable();
            $table->string('deisgnation1')->nullable();
            $table->string('recommendation1')->nullable();
            $table->date('date1')->nullable();

            $table->string('name2')->nullable();
            $table->string('deisgnation2')->nullable();
            $table->string('recommendation2')->nullable();
            $table->date('date2')->nullable();

            $table->string('name3')->nullable();
            $table->string('deisgnation3')->nullable();
            $table->string('recommendation3')->nullable();
            $table->date('date3')->nullable();

            $table->string('device')->nullable();
            $table->string('patient')->nullable();
            $table->string('other')->nullable();
            $table->string('verified_by')->nullable();
            $table->date('verification_date')->nullable();

            $table->string('required_recall')->nullable();
            $table->string('recall_no')->nullable();
            $table->string('required_capa')->nullable();
            $table->string('capa_no')->nullable();
            $table->string('required_ccm')->nullable();
            $table->string('ccm_no')->nullable();

            $table->string('capa_task1')->nullable();
            $table->string('capa_name1')->nullable();
            $table->string('capa_designation1')->nullable();
            $table->date('capa_duedate1')->nullable();
            $table->string('remarks')->nullable();

            $table->string('closing_reviewed_by')->nullable();
            $table->date('closing_review_date')->nullable();
            $table->string('closing_approved_by')->nullable();
            $table->date('closing_approval_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deviations');
    }
};
