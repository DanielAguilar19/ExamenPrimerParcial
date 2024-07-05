<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id('idContacto');
            $table->integer('codigoEntrada');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table->timestamps();
/*             $table->integer('codigoEntrada')->foreing->references('directorio')->on('codigoEntrada');
 */        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
