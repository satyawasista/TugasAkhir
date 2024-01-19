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
        Schema::create('birth_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->foreignId('id_patient');
            $table->date('delivery_room');
            $table->dateTime('his_start');
            $table->enum('bleeding',['Iya','Tidak']);
            $table->enum('mucus_discharge',['Iya','Tidak']);
            $table->enum('amniotic',['Belum','Pecah']);
            $table->text('other_complaints');
            $table->char('tension',15);
            $table->char('temprature',15);
            $table->char('pulse',15);
            $table->char('odema',255);
            $table->char('hemoglobin',15);
            $table->enum('protein_urien',['Positif','Negatif']);
            $table->char('fundus_uteri',15);
            $table->enum('baby_position',[
            'Anterior','Transversus','Posterior','Sungsang','SungsangPenuh','SungsangLengkung','SungsangLonjong','Asinklitik']);
            $table->char('baby_heart_rate',50);
            $table->char('his',15);
            $table->char('his_duration',50);
            $table->dateTime('vt');
            $table->text('vt_result');
            $table->text('doagnose');
            $table->text('therapy');
            $table->enum('verlos_kamer',['VK I','VK II']);
            $table->enum('room_type',['VIP','Kelas I','Kelas II']);
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
        Schema::dropIfExists('birth_records');
    }
};
