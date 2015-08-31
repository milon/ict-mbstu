<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchAreaTagging extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_area_tagging', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('research_area_id');
            $table->unsignedInteger('taggable_id');
            $table->string('taggable_type', 100);
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
        Schema::drop('research_area_tagging');
    }
}
