<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_flows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id');
            $table->integer('contact_id');
            $table->integer('user_id');
            $table->integer('response_id');
            $table->datetime('due_date');
            $table->text('comment');
            $table->integer('inquiry');
            $table->text('inquiry_item_list');
            $table->string('file');
            $table->string('call_duration');
            $table->datetime('start_time');
            $table->datetime('end_time');
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
        Schema::dropIfExists('process_flows');
    }
}
