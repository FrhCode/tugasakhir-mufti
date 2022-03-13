<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledges', function (Blueprint $table) {
            $table->id();
            $table->string('disease_id')->constrained();
            $table->string('symptom_id')->constrained();
            $table->decimal('mb', $precision = 8, $scale = 2);
            $table->decimal('md', $precision = 8, $scale = 2);
            $table->index(['disease_id', 'symptom_id']);
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
        Schema::dropIfExists('knowledges');
    }
}
