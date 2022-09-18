<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->string('student_photo');
            $table->string('student_name');
            $table->string('student_mail');
            $table->string('student_phone');
            $table->string('student_gender');
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('mother_name');
            $table->string('mother_phone');
            $table->string('relegion');
            $table->string('blood_group');
            $table->string('educational_qualification');
            $table->date('date_of_birth');
            $table->string('parmanent_address');
            $table->string('present_address');
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
        Schema::dropIfExists('students');
    }
}
