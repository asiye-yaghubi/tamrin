<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permition_role', function (Blueprint $table) {
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('permition_id')->unsigned();

            $table->foreign('role_id')
             ->references('id')
             ->on('roles')
             ->onDelete('cascade')
             ->onUpdate('cascade');

             $table->foreign('permition_id')
             ->references('id')
             ->on('permitions')
             ->onDelete('cascade')
             ->onUpdate('cascade');
        $table->primary(['role_id','permition_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permition__role');
    }
}
