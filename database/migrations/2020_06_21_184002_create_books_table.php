<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 50);
            $table->json("genero");
            $table->json("publico");
            $table->json("tags");
            $table->string("sinopse", 2000);
            $table->string("img", 250);
            $table->string("autor", 30);
            $table->year("anoPublicado");
            $table->integer("livrosSaga");
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
        Schema::dropIfExists('books');
    }
}
