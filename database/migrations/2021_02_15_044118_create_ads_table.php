<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Categories table for testing purpose
        /*
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parentId');
            $table->string('categoryName');
            $table->boolean('isActive');
        });*/

        Schema::create('ads', function (Blueprint $table) {
            $table->id();


            $table->integer('categoryId')->nullable();
            
            /*$table->foreignId('categoryId')->references('id')->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');*/

            $table->string('brand');
            $table->string('model');
            $table->integer('year')->nullbale();
            $table->string('country')->nullable();
            $table->string('location')->nullable();
            $table->string('condition');
            $table->double('mileage', $scale = 2);
            $table->string('transmission');
            $table->string('fuelType');
            $table->double('engineCapacity', $scale = 2);
            $table->string('other')->nullable();
            $table->string('title')->nullable();
            $table->string('images')->nullable();
            $table->text('description')->nullable();
            $table->double('price', $scale = 2);
            $table->timestamps();

            $table->boolean('status')->default(0);
            $table->timestamp('approvedDate')->nullable();

            //->nullable(false)->change()
            $table->timestamp('expieryDate')->nullable();

        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
