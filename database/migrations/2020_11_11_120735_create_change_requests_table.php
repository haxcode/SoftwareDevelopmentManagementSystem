<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->nullable(FALSE)->comment('Short description');
            $table->string('description')->comment('Description of requested changes');
            $table->foreignId('created_by_user_id')->comment('Created by user');
            $table->foreignId('approved_by_user_id')->comment('Approved by user');
            $table->foreignId('milestone_id')->comment('ID of milestone');
            $table->integer('project_id')->nullable(FALSE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('change_requests');
    }
}
