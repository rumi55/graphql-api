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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("desc")->nullable();
            $table->boolean("is_visible")->nullable()->default(0);
            $table->text("shortInfo")->nullable()->nullable();
            $table->string("cover")->nullable();
            $table->timestamps();
        });

        Schema::create('categoryable', function (Blueprint $table) {
            $table->morphs("category");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
