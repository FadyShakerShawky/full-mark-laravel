<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFourmaxratingViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW fourmaxratings AS
        (
            SELECT u.name , t.rating , t.id

            FROM teachers t , users u

            WHERE t.user_id = u.id

            ORDER BY t.rating DESC

            LIMIT 4
        )
      ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::dropIfExists('fourmaxratings');
    }
}
