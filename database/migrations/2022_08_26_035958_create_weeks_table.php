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
        Schema::create('weeks', function (Blueprint $table) {
            $table->id();
            $table->integer('week_number');
            $table->date('date');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::statement("insert into weeks (id, week_number, date) values(null, 1, '2022/09/11');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 2, '2022/09/18');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 3, '2022/09/25');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 4, '2022/10/02');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 5, '2022/10/09');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 6, '2022/10/16');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 7, '2022/10/23');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 8, '2022/10/30');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 9, '2022/11/06');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 10, '2022/11/13');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 11, '2022/11/20');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 12, '2022/11/27');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 13, '2022/12/04');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 14, '2022/12/11');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 14, '2022/12/11');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 15, '2022/12/18');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 16, '2022/12/25');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 17, '2022/01/02');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 17, '2023/01/01');");
        DB::statement("insert into weeks (id, week_number, date) values(null, 18, '2022/01/09');");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weeks');
    }
};
