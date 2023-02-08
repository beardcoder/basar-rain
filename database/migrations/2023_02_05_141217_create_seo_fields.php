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
    Schema::table("pages", function (Blueprint $table) {
      $table->string("seo_title", 200)->nullable();
      $table->text("seo_description")->nullable();
    });

    Schema::table("events", function (Blueprint $table) {
      $table->string("seo_title", 200)->nullable();
      $table->text("seo_description")->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table("events", function (Blueprint $table) {
      $table->dropColumn("seo_title");
      $table->dropColumn("seo_description");
    });
    Schema::table("pages", function (Blueprint $table) {
      $table->dropColumn("seo_title");
      $table->dropColumn("seo_description");
    });
  }
};
