<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('country');
            $table->boolean('approved')->default(0);
            $table->string('email')->unique();


            $table->string('currency')->default('$');

            $table->string('dob')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();

            $table->string('acct_type');
            $table->decimal('balance', 50, 2)->default(0);
            $table->boolean('close_trade')->default(false);
            
            $table->boolean('verify_proof')->default(0);
            $table->string('poa')->nullable();
            $table->string('poi')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('pass');

            $table->timestamp('last_seen')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
