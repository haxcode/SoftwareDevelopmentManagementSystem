<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilestonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milestones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->comment('Milestone name')->nullable(FALSE);
            $table->foreignId('parent_id')->comment('ID of parent milestone');
            $table->foreignId('project_id')->nullable(FALSE);
            $table->date('planed_start')->comment('Planed start of milestone');
            $table->date('planed_end')->comment('Planed end of milestone');
            $table->string('state')->nullable(FALSE)->comment('State of milestone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('milestones');
    }
}
