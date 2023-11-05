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
        Schema::create('c_v_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->foreignId('religion_id')->constrained('religions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('caste')->nullable();
            $table->string('dob');
            $table->foreignId('marital_status_id')->constrained('marital_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->string('education_system');
            $table->foreignId('education_id')->constrained('education')->onUpdate('cascade')->onDelete('cascade');
            $table->string('ssc_year');
            $table->foreignId('profession_id')->constrained('professions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('other_profession')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('nationality')->nullable();

            $table->foreignId('father_profession')->constrained('professions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('father_other_profession')->nullable();
            $table->foreignId('mother_profession')->constrained('professions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('mother_other_profession')->nullable();
            $table->foreignId('father_district')->constrained('districts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('mother_district')->constrained('districts')->onUpdate('cascade')->onDelete('cascade');
            $table->string('sibling_brother')->nullable();
            $table->string('sibling_sister')->nullable();
            
            $table->string('email');
            $table->string('whatsapp')->nullable();
            $table->string('phone');
            $table->string('guardian_phone')->nullable();

            $table->longText('about')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('c_v_s');
    }
};
