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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('hostname');
            $table->foreignId('idu')->cascade('delete');
            $table->foreignId('idd')->cascade('delete');
            $table->foreignId('idl')->cascade('delete');
            $table->enum('jenis',['PC','Laptop']);
            $table->string('merk');
            $table->string('processor');
            $table->string('ram');
            $table->string('graphic');
            $table->string('hardisk');
            $table->string('ssd');
            $table->string('os');
            $table->string('isLegalos');
            $table->string('office');
            $table->string('akunOffice');
            $table->string('internet');
            $table->string('ipAddress');
            $table->string('iams');
            $table->string('companyemail');
            $table->string('useraccount');
            $table->string('anydeskId');
            $table->enum('status',['Baik','Rusak']);
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
        Schema::dropIfExists('inventory');
    }
};