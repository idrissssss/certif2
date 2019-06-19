<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeHasProduitsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'liste_has_produits';

    /**
     * Run the migrations.
     * @table liste_has_produits
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('liste_id');
            $table->unsignedInteger('produit_id');
            $table->unsignedInteger('user_id');
            $table->float('quantite')->nullable();

            // $table->index(["produit_id"]);

            // $table->index(["user_id"], 'fk_id_users_idx');

            // $table->index(["liste_id"], 'fk_id_listes_idx');


            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('produit_id')
                ->references('id')->on('produits')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('liste_id')
                ->references('id')->on('listes')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
