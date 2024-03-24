<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('profile_created_by')->nullable();
            $table->string('looking_for')->nullable();

            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->foreignId('religion_id')->nullable()->constrained('religions');
            $table->string('caste')->nullable();
            $table->string('dob')->nullable();
            $table->foreignId('marital_status_id')->nullable()->constrained('marital_statuses');
            $table->string('education_system')->nullable();
            $table->foreignId('education_id')->nullable()->constrained('education');
            $table->string('ssc_year')->nullable();
            $table->foreignId('profession_id')->nullable()->constrained('professions');
            $table->string('other_profession')->nullable();
            $table->string('nationality')->nullable();
            $table->string('height')->nullable();
            $table->string('present_district')->nullable();
            $table->string('permanent_district')->nullable();

            $table->foreignId('father_profession')->nullable()->constrained('professions');
            $table->string('father_other_profession')->nullable();
            $table->foreignId('mother_profession')->nullable()->constrained('professions');
            $table->string('mother_other_profession')->nullable();
            $table->foreignId('father_district')->nullable()->constrained('districts');
            $table->foreignId('mother_district')->nullable()->constrained('districts');
            $table->string('sibling_brother')->nullable();
            $table->string('sibling_sister')->nullable();

            $table->string('biodata')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('phone')->unique();
            $table->string('guardian_phone')->nullable();
            $table->string('password')->nullable();
            $table->longText('about')->nullable();
            $table->longText('desired_bride_groom')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
