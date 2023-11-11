<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('type');
            $table->string('asset_type')->nullable();
            $table->string('symbol');
            $table->string('volume');
            $table->string('amount')->nullable();
            $table->string('profit1')->nullable();
            $table->string('profit2')->nullable();
            $table->string('point1')->nullable();
            $table->string('point2')->nullable();
            $table->string('s_l');
            $table->string('t_p');
            $table->string('buy_or_sell');
            $table->string('status');
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
        Schema::dropIfExists('transactions');
    }
};
