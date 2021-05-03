<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionConditionSetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_condition_set', function (Blueprint $table) {
            $table->id();
            
            //$table->unsignedInteger('condition_id');
            //$table->foreign('condition_id')->references('id')->on('conditions');
            $table->foreignId('condition_id');

            //$table->unsignedInteger('condition_set_id');
            //$table->foreign('condition_set_id')->references('id')->on('condition_sets');
            $table->foreignId('condition_set_id');

            $table->string('created_by');
            $table->timestamps();
        });

        DB::table('condition_condition_set')->insert(
            [
                [
                    'created_by' => 'e0116290',
                    'created_at' => \Carbon\Carbon::now(),
                    'condition_set_id' => 1,
                    'condition_id' => 1,
                ],
                [
                    'created_by' => 'e0116290',
                    'created_at' => \Carbon\Carbon::now(),
                    'condition_set_id' => 1,
                    'condition_id' => 2,
                ],

            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condition_condition_set');
    }
}
