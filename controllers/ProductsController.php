<?php 

class ProductsController {

    public function index(){

        require_once('views/components/layout/head.php');
        require_once('views/products/index.php');
        require_once('views/components/layout/footer.php');

    }

    public function show(){
        require_once('views/components/layout/head.php');
        require_once('views/products/show.php');
        require_once('views/components/layout/footer.php');
    }

    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/products/edit.php');
        require_once('views/components/layout/footer.php');
    }

    public function create(){
        require_once('views/components/layout/head.php');
        require_once('views/products/create.php');
        require_once('views/components/layout/footer.php');
    }
}