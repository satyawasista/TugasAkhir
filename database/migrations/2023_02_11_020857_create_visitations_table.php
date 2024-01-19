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
        Schema::create('visitations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_patient');
            $table->foreignId('id_user');
            $table->char('visitation_number',11);
            $table->enum('visitation_status',['Menunggu','Diperiksa','Lewat','Selesai']);
            $table->text('description');
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
        Schema::dropIfExists('visitations');
    }
};
