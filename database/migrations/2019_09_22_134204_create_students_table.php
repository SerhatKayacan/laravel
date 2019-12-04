<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
                $table->string('name');
                $table->integer('reg_no')->unique();
                $table->string('email')->unique();
                $table->string('school');
            $table->string('department');
            $table->timestamps();
            });
    } //  Student Table will have following columns: id, name, reg_no, email, school, department and timestamps. 

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
