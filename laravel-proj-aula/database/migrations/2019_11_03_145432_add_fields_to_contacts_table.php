<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('full_name', 55);
            $table->string('exhibition_name', 55);
            $table->string('email', 45)->nullable();
            $table->string('telephone_number', 10)->nullable();
            $table->string('cell_phone_number', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('full_name');
            $table->dropColumn('exhibition_name');
            $table->dropColumn('email');
            $table->dropColumn('telephone_number');
            $table->dropColumn('cell_phone_number');
        });
    }
}
