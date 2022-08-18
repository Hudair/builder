<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_name');
            $table->integer('status')->unsigned();
            $table->integer('package_id')->nullable();
            $table->string('package_type',10)->nullable();
			$table->string('membership_type',10)->nullable();
			$table->date('valid_to');
			$table->date('last_email')->nullable();
			$table->string('websites_limit',20)->nullable();
			$table->string('inventory_module')->nullable();
            $table->string('recurring_transaction',3)->nullable();
			$table->string('online_payment',3)->nullable();
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
        Schema::dropIfExists('companies');
    }
}
