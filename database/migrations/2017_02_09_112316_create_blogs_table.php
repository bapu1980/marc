<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
			$table->string('picture');
			$table->string('ville');
			$table->string('pays');
			$table->decimal('longitude',10,7);
			$table->decimal('latitude',10,7);
            $table->longText('blog_text');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blogs');
    }
}
