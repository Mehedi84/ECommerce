<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductChildCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_child_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_sub_categories_id')->nullable()->comment('Belongs to product_sub_categories Table')->references('id')->on('product_sub_categories');
            $table->string('name')->unique();
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('product_child_categories');
    }
}