<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('title');
            $table->string('description');
            $table->bigInteger('currency');
            $table->float('price', 8, 2);
            $table->bigInteger('price_type');
            $table->bigInteger('type');
            $table->bigInteger('category');
            $table->bigInteger('group');
            $table->string('subject');
            $table->bigInteger('city');
            $table->string('accept_replacement');
            $table->string('contact_name');
            $table->string('contact_number');
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
        Schema::dropIfExists('listings');
    }
}
