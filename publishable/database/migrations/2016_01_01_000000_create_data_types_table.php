<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('data_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->unique();
            $table->string('slug',50)->unique();
            $table->string('display_name_singular',75);
            $table->string('display_name_plural',75);
            $table->string('icon',50)->nullable();
            $table->string('model_name',75)->nullable();
            $table->string('description',150)->nullable();
            $table->boolean('generate_permissions')->default(false);
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->datetime('deleted_at')->nullable();
        });

        // Create table for storing roles
        Schema::create('data_rows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('data_type_id')->unsigned();
            $table->string('field',100);
            $table->string('type',50);
            $table->string('display_name',50);
            $table->boolean('required')->default(false);
            $table->boolean('browse')->default(true);
            $table->boolean('read')->default(true);
            $table->boolean('edit')->default(true);
            $table->boolean('add')->default(true);
            $table->boolean('delete')->default(true);
            $table->text('details')->nullable();

            $table->foreign('data_type_id')->references('id')->on('data_types')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_rows');
        Schema::drop('data_types');
    }
}
