<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // ID do produto
            $table->string('name-produto'); // Nome do produto
            $table->decimal('preco', 10, 2); // Preço do produto
            $table->string('categoria')->nullable(); // Categoria do produto
            $table->text('descricao')->nullable(); // Descrição do produto
            $table->string('imagem')->nullable(); // Caminho para a imagem do produto
            $table->string('video')->nullable(); // Caminho para o vídeo do produto
            $table->integer('quantidade')->default(0); // Quantidade em estoque
            $table->boolean('status')->default(true); // Status do produto (ativo/inativo)
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
