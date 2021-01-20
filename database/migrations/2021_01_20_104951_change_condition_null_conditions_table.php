<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeConditionNullConditionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('conditions', function (Blueprint $table) {
      //nullを許容
      $table->string('condition')->nullable()->change();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('conditions', function (Blueprint $table) {
      //
      $table->string('condition')->nullable(false)->change();
    });
  }
}
