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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            $table->decimal('btc_amount', 20, 7)->nullable();
            $table->text('btc_address')->nullable();

            $table->decimal('wireT_amount', 20, 7)->nullable();
            $table->string('wireT_acct_name')->nullable();
            $table->string('wireT_acct_num')->nullable();
            $table->string('wireT_IBAN')->nullable();
            $table->string('wireT_bank_name')->nullable();
            $table->string('wireT_country')->nullable();
            $table->string('wireT_swift_code')->nullable();

            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('withdrawals');
    }
};
