<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanymastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companymasters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('NOC')->nullable();
            $table->string('corporate_office')->nullable();
            $table->string('telephone_1')->nullable();
            $table->string('telephone_2')->nullable();
            $table->string('email_1')->nullable();
            $table->string('email_2')->nullable();
            $table->string('ceo')->nullable();
            $table->string('chairman')->nullable();
            $table->string('director')->nullable();
            $table->string('ceo_phone_1')->nullable();
            $table->string('ceo_phone_2')->nullable();
            $table->string('chairman_phone_1')->nullable();
            $table->string('chairman_phone_2')->nullable();
            $table->string('director_phone_1')->nullable();
            $table->string('director_phone_2')->nullable();
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
        Schema::dropIfExists('companymasters');
    }
}
