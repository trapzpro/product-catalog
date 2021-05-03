<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_sets', function (Blueprint $table) {
            $table->id();
            $table->string('type', 255);
            $table->string('desc', 30);
            $table->string('created_by', 30);
            $table->timestamps();
        });

          DB::table('condition_sets')->insert(
            [
                [
                    'created_by' => 'e0116290',
                    'created_at' => \Carbon\Carbon::now(),
                    'type' => 'ALL',
                    'desc' => 'OK100BRAR D2D',

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
        Schema::dropIfExists('condition_sets');
    }
}
