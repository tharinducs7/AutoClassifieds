<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('vehicle');
            $table->text('category');
            $table->text('fuel');
            $table->text('registrationYear');
            $table->text('mileage');
            $table->text('Description');
            $table->text('OffersSent');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyer_requests');
    }
}
