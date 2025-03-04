<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->float('bmi'); // Body Mass Index
            $table->boolean('family_history')->default(false);
            $table->boolean('physical_activity')->default(true);
            $table->boolean('smoking')->default(false);
            $table->boolean('hypertension')->default(false);
            $table->boolean('high_cholesterol')->default(false);
            $table->float('risk_score')->nullable(); // Calculated risk score
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
        Schema::dropIfExists('assessments');
    }
}
