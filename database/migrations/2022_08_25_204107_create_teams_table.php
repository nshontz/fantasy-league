<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        Schema::dropIfExists('teams');

        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manager')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        \Illuminate\Support\Facades\DB::statement("INSERT INTO `teams` (id, name) VALUES (1,'Bishop Sycamore'),(2,'Buffalo West'),(3,'Dakstreet Boys'),(4,'Show me Your TDs'),(5,'Latvian Battle Nuns'),(6,'Missoula Reds'),(7,'Mr. McGibblets'),(8,'Reno Quails'),(9,'Silicon Sudo Pirates'),(10,'Sparks Scorpions'),(11,'Touchdowns RX'),(12,'Wakanda Forever');");

        \Illuminate\Support\Facades\DB::table('teams')->update([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
