<?php 

class UsersController {

    public function index(){

        require_once('views/components/layout/head.php');
        require_once('views/users/index.php');
        require_once('views/components/layout/footer.php');

    }

    public function show(){
        require_once('views/components/layout/head.php');
        require_once('views/users/show.php');
        require_once('views/components/layout/footer.php');
    }

    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/users/edit.php');
        require_once('views/components/layout/footer.php');
    }

    public function create(){
        require_once('views/components/layout/head.php');
        require_once('views/users/create.php');
        require_once('views/components/layout/footer.php');
    }
}
