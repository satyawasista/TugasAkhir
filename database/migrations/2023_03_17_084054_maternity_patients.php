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
        Schema::create('maternity_patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_patient');
            $table->foreignId('id_user');
            $table->char('identity_number_family',25);
            $table->char('name_family',50);
            $table->date('birth_date_family');
            $table->text('address_family');
            $table->char('phone_family',15);
            $table->enum('sibling_relationship',['Suami','Ayah','Ibu','Adik','Kakak','Orang Tua']);
            $table->date('hpl');
            $table->char('gestational_age',50);
            $table->char('previouse_pregnancies',50);
            $table->char('allergic',50);
            $table->char('surgery_history',50);
            $table->char('underlying_diseases',50);
            $table->enum('status',['Menunggu','Diperiksa','Selesai','Lewat'])->default('Menunggu');
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
        Schema::dropIfExists('maternity_patients');
    }
};
