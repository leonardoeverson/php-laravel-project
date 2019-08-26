<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductsModel extends Model{

    public function listaProdutos(){
        return DB::table("produtos")->get();
    }

    public function getProdutobyId(){

    }

    public function getProdutobyData($query){

    }


    public function cadastraProduto(){

    }

    public function alteraProduto(){

    }

    public function excluiProduto(){

    }
}
