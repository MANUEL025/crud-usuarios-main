<?php 

class providersController {

    public function index(){

        require_once('views/components/layout/head.php');
        require_once('views/providers/index.php');
        require_once('views/components/layout/footer.php');

    }

    public function show(){
        require_once('views/components/layout/head.php');
        require_once('views/providers/show.php');
        require_once('views/components/layout/footer.php');
    }

    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/providers/edit.php');
        require_once('views/components/layout/footer.php');
    }

    public function create(){
        require_once('views/components/layout/head.php');
        require_once('views/providers/create.php');
        require_once('views/components/layout/footer.php');
    }
}
