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
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('codice_treno', 10)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
