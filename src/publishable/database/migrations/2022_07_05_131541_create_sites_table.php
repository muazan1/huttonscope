<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hc_sites', function (Blueprint $table) {
            $table->id();

            $table->string('uuid')->unique();

            $table->foreignId('hc_builder_id');

            $table->string('hc_builder_name');

            $table->string('hc_slug')->index();

            $table->string('hc_street_1');

            $table->string('hc_street_2')->nullable();

            $table->string('hc_city');

            $table->string('hc_postcode');

            $table->string('hc_county')->nullable();

            $table->string('hc_telephone');

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
        Schema::dropIfExists('sites');
    }
}
