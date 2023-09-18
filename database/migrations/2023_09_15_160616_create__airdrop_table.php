<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirdropTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airdrops', function (Blueprint $table) {
            $table->id();
            $table->string('ProjectName');
            $table->double('Assess');
            $table->string('Capital');
            $table->string('Detail');
            $table->string('Fundraising');
            $table->string('FeaturedBacker');
            $table->string('ConfirmAirdrop');
            $table->dateTime('TokenListTime');
            $table->string('Guide');
            $table->string('RiskWarning');
            $table->string('Condition');
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
        Schema::dropIfExists('airdrops');
    }
}
