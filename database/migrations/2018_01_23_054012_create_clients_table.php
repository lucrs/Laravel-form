<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('document_number'); //modificar o tamanho do cpf
            $table->string('email');
            $table->string('phone');
            $table->boolean('defaulter'); //inadiplente
            $table->date('date_birth');
            $table->char('sex');
            $table->enum('marital_status', array_keys(\App\Client::MARITAL_STATUS));
            $table->string('physical_disability')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
