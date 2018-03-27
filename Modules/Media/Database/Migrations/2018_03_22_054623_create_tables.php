<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {


        Schema::create('media__folders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();
            $table->string('name');
            $table->string('path')->nullable();
            $table->timestamps();
        });

        Schema::create('media__files', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('filename');
            $table->string('path')->nullable();
            $table->string('extension')->nullable();
            $table->string('mimetype')->nullable();
            $table->string('filesize')->nullable();
            $table->integer('folder_id')->unsigned()->nullable();
            $table->foreign('folder_id')->references('id')->on('media__folders')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('media__file_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('file_id')->unsigned();
            $table->string('locale')->index();
            $table->string('description')->nullable();
            $table->string('alt_attribute')->nullable();
            $table->string('keywords')->nullable();
            $table->unique(['file_id', 'locale']);
            $table->foreign('file_id')->references('id')->on('media__files')->onDelete('cascade');
        });

        Schema::create('media__imageables', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('file_id');
            $table->integer('imageable_id');
            $table->string('imageable_type');
            $table->string('zone');
            $table->integer('order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('media__files');
        Schema::dropIfExists('media__file_translations');
        Schema::dropIfExists('media__imageables');
    }

}
