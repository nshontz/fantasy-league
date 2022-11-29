<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('scores');

        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id');
            $table->integer('week');
            $table->double('played_projected')->nullable();
            $table->double('played_score')->nullable();
            $table->double('benched_projected')->nullable();
            $table->double('benched_score')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
};
