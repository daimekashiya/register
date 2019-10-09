<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('fax')->nullable();
            $table->string('person_in_charge_name')->nullable();
            $table->string('specialize_in_description')->nullable();
            $table->string('reason_to_join')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('website_url')->nullable();
            $table->boolean('approved')->default(0);

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');


            $table->timestamp('created_at')->useCurrent = true;
            $table->timestamp('updated_at')->useCurrent = true;
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
