<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('class_teacher_id');
            $table->string('class');
            $table->date('admission_date');
            $table->decimal('yearly_fees', 10, 2);
            $table->softDeletes();
            $table->timestamps();

            
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
