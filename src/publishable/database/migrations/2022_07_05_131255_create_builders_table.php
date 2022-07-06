<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builders', function (Blueprint $table) {
            $table->id();

            $table->uuid('uuid')->unique();

            $table->string('hc_customer_name');

            $table->string('hc_slug')->index();

            $table->string('hc_email')->unique();

            $table->string('hc_street_1');

            $table->string('hc_street_2')->nullable();

            $table->string('hc_city');

            $table->string('hc_postcode');

            $table->string('hc_telephone_number');

            $table->string('hc_county')->nullable();

            $table->foreignId('hc_customer_type')->default(true);

            $table->foreignId('hc_contract_type')->default(1);

            $table->date('hc_contract_expiry_date')->nullable();

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
        Schema::dropIfExists('builders');
    }
}
