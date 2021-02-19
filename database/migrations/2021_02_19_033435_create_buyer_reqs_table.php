<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_reqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_Id');
            $table->timestamps();
            $table->integer('category_Id');
            $table->string('model_year');
            $table->string('description') ->nullable();
            $table->double('price');
            $table->string('title');
            $table->string('action_Date')->nullable();
            $table->string('exp_Date')->nullable();
            $table->string('status')->default('pending');
            $table->string('remark')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyer_reqs');
    }
}
