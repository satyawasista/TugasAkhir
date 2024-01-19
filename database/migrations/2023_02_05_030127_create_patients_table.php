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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->char('identity_card',25);
            $table->char('name',50);
            $table->date('birth_date');
            $table->enum('gender',['Laki-laki','Perempuan']);
            $table->char('phone',15);
            $table->char('email',50);
            $table->text('address');
            $table->enum('status',['Aktif','Nonaktif']);
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
        Schema::dropIfExists('patients');
    }
};
