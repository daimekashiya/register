<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyLkpCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_lkp_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('lkp_category_id');
            $table->timestamp('created_at')->useCurrent = true;
            $table->timestamp('updated_at')->useCurrent = true;

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('lkp_category_id')->references('id')->on('lkp_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_lkp_category');
    }
}