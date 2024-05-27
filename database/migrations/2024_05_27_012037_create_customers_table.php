<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); //id integer, primary key, auto increment
            $table->string('code', 4)->unique(); //default string max 255 character, code varchar(4) unique not null
            $table->string('name', 30); //name varchar(30) not null
            $table->string('phone', 15)->nullable(); //phone varchar(15) nullable
            $table->text('address');
            $table->timestamps(); //created at dan updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
