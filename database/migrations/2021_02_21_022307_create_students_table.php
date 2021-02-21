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
            $table->string('name',255);
            $table->string('last_name');
            $table->string('email',255);
            $table->string('telephone',20);
            $table->string('cep',20);
            $table->string('number',20);
            $table->string('complement',255)->nullable();
            $table->string('street',255);
            $table->string('barrio',100);
            $table->string('sex',10);
            $table->enum('status',[0,1]);
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
