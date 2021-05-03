<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->string('type', 255);
            $table->string('operator', 30);
            $table->string('value', 255);
            $table->string('created_by', 30);
            $table->timestamps();
        });

        DB::table('conditions')->insert(
            [
                [
                    'created_by' => 'e0116290',
                    'created_at' => \Carbon\Carbon::now(),
                    'type' => 'constraint:exchangeId',
                    'operator' => 'equals',
                    'value' => 'OK100BRAR',

                ],
                [
                    'created_by' => 'e0116290',
                    'created_at' => \Carbon\Carbon::now(),
                    'type' => 'constraint:channelId',
                    'operator' => 'equals',
                    'value' => '4',

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
        Schema::dropIfExists('conditions');
    }
}
