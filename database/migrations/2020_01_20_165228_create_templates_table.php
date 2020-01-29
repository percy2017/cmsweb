<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug', 191)->unique();
            $table->string('name');
            $table->string('name_short');
            $table->string('description');
            $table->text('description_lang')->nullable();
            $table->string('image');
            $table->string('images')->nullable();
            $table->string('category_id');
            $table->string('block_id')->nullable();
            $table->string('bussine_id')->nullable();
            $table->string('tag_id')->nullable();
            $table->string('template_id')->nullable();
            // $table->string('datails')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates');
    }
}
