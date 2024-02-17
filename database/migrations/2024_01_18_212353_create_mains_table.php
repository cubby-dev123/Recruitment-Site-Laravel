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
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->string('c_name');
            $table->string('c_address');
            $table->string('c_member');
            $table->string('c_phone');
            $table->string('c_site');
            $table->string('job_type');
            $table->string('em_type');
            $table->integer('em_num');
            $table->string('work_time');
            $table->integer('rest_time');
            $table->string('pay_amount');
            $table->string('rest_day');
            $table->string('insurance');
            $table->string('commuting_allowance');
            $table->string('academic_history');
            $table->string('degree');
            $table->string('other');
            $table->date('enter_date');
            $table->string('t_message');
            $table->longText('c_message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mains');
    }
};
