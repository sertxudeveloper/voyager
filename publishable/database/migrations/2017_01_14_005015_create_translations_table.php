<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('table_name',25);
            $table->string('column_name',50);
            $table->integer('foreign_key')->unsigned();
            $table->string('locale',5);

            $table->text('value');

            $table->unique(['table_name', 'column_name', 'foreign_key', 'locale']);

            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at');
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translations');
    }
}
