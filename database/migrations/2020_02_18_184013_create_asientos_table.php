<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Asiento;
class CreateAsientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('concepto');
            $table->decimal('monto',8,2);
            $table->string('tipo');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('caja_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('caja_id')->references('id')->on('cajas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asientos');
    }
}
