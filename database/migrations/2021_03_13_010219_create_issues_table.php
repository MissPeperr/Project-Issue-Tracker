<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name');
            $table->text('description');
            $table->boolean('closed');
            $table->timestamp('closed_on')->nullable();
            $table->foreignId('project_id')->constrained();
            $table->foreignId('status_id')->constrained('issue_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
