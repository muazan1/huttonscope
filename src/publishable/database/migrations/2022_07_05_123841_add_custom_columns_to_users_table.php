<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->uuid('uuid')->unique();

            $table->foreignId('hc_role_id')->default(2);

            $table->string('hc_first_name')->after('hc_role_id');

            $table->string('hc_last_name')->after('hc_first_name');

            $table
                ->string('hc_two_factor_secret')
                ->after('password')
                ->nullable();

            $table
                ->string('hc_two_factor_recovery_codes')
                ->after('hc_two_factor_secret')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
