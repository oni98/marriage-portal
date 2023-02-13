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
            $table->string('profile_created_by');
            $table->string('looking_for')->nullable();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->foreignId('religion_id')->constrained('religions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('caste')->nullable();
            $table->string('dob');
            $table->foreignId('marital_status_id')->constrained('marital_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('education_id')->constrained('education')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('profession_id')->constrained('professions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('division_id')->constrained('divisions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('district_id')->constrained('districts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('upazila_id')->constrained('upazilas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('union_id')->constrained('unions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('area')->nullable();
            $table->string('present_residence_status')->nullable();
            $table->string('email');
            $table->string('whatsapp')->nullable();
            $table->string('phone');
            $table->string('guardian_phone')->nullable();
            $table->string('password');
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
