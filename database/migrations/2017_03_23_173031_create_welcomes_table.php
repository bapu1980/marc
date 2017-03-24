<?php

//INSERT INTO `welcomes`(`id`, `titre`, `valeur`) VALUES (1,'citation',"ON VOYAGE POUR CHANGER,
NON DE LIEU, MAIS D'IDÉES.")
//INSERT INTO `welcomes`(`id`, `titre`, `valeur`) VALUES (2,'compteur pays visités','6')
//INSERT INTO `welcomes`(`id`, `titre`, `valeur`) VALUES (3,'compteur kilomètres','14 666')

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWelcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcomes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
			$table->string('valeur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('welcomes');
    }
}
