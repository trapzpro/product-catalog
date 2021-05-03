<?php

use App\Models\ConditionSet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionalRequiredAsocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditional_required_asocs', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('type');
            $table->boolean('required');
            //$table->foreignIdFor('attached_asoc_id',Asoc::class);
            $table->unsignedBigInteger('attached_asoc_id');
            $table->foreign('attached_asoc_id')->references('id')->on('asocs');

            //$table->foreignIdFor('required_asoc_id',Asoc::class);
            $table->unsignedBigInteger('required_asoc_id');
            $table->foreign('required_asoc_id')->references('id')->on('asocs');

            //$table->foreignIdFor('condition_set_id',ConditionSet::class);
            $table->unsignedBigInteger('condition_set_id');
            $table->foreign('condition_set_id')->references('id')->on('condition_sets');
            
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
        Schema::dropIfExists('conditional_required_asocs');
    }
}
