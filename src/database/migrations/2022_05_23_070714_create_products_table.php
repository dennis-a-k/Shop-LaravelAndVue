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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('article');
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->string('preview_img')->nullable()->default('default.png');
            $table->integer('price');
            $table->integer('count')->default(0);
            $table->boolean('is_published')->default(true);

            $table->foreignId('category_id')->nullable()->index()->constrained('categories');

            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
};
