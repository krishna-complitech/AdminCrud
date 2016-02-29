<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSendmsgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sendmsgs', function (Blueprint $table) {
            $table->text('to_phoneno')->change();
            $table->text('from_phoneno')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sendmsgs', function (Blueprint $table) {
            Schema::dropColumn('to_phoneno');
            Schema::dropColumn('from_phoneno');  
        });
    }
}
