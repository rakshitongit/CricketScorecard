<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Altermatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('matches', function (Blueprint $table) {
            $table->integer('end_match')->nullable();
            $table->string('reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('matches', function (Blueprint $table) {
           $table->dropColumn('end_match');
           $table->dropColumn('reason');
        });
    }
}
