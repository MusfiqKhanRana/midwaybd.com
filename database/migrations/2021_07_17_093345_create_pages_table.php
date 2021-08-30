<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('fn1')->nullable();
            $table->string('ln1')->nullable();
            $table->string('fn2')->nullable();
            $table->string('ln2')->nullable();
            $table->string('fn3')->nullable();
            $table->string('ln3')->nullable();
            $table->string('fn4')->nullable();
            $table->string('ln4')->nullable();
            $table->string('adrs')->nullable();
            $table->string('eml1')->nullable();
            $table->string('pcode')->nullable();
            $table->string('mnmbr')->nullable();
            $table->string('ntnlty')->nullable();
            $table->text('simg')->nullable();
            $table->text('NIDimg')->nullable();
            $table->string('DOB')->nullable();
            $table->string('job')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('eml2')->nullable();
            $table->string('NIDno')->nullable();
            $table->text('psimg')->nullable();  
            $table->string('bankname')->nullable();
            $table->string('BAnmbr')->nullable();
            $table->string('Bname')->nullable();
            $table->string('Rnmbr')->nullable();
            $table->text('psimg2')->nullable();
            $table->string('rltn')->nullable();
            $table->string('name')->nullable();
            $table->string('phnmbr')->nullable();
            $table->string('deposit')->nullable();
            $table->longText('cmnt')->nullable();
            $table->text('ssimg')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
