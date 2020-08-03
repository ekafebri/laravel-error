<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->decimal('width', 10, 2)->nullable()->change();
            $table->decimal('height', 10, 2)->nullable()->change();
            $table->decimal('length', 10, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->decimal('width', 10, 2)->nullable(false)->change();
            $table->decimal('height', 10, 2)->nullable(false)->change();
            $table->decimal('length', 10, 2)->nullable(false)->change();
        });
    }
}
