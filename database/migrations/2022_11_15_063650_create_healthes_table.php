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
        Schema::create('healthes', function (Blueprint $table) {
            $table->id();
            $table->string('First_name', 50);// one parameters for name column and two for length caracter
            $table->string('Last_name', 50);
            $table->string('Email');
            $table->string('State');
            $table->string('Nationality');
            $table->string('Gender');
            $table->integer('Phone');
            $table->string('The_disease');
            $table->string('Address');
            $table->string('Birthday');
            $table->string('Blood_Type');
            $table->string('Doctor_name');
            $table->SoftDeletes();
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
        Schema::dropIfExists('healthes');
    }
};
