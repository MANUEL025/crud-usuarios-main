<?php 

class CompaniesController {

    public function index(){

        require_once('views/components/layout/head.php');
        require_once('views/companies/index.php');
        require_once('views/components/layout/footer.php');

    }

    public function show(){
        require_once('views/components/layout/head.php');
        require_once('views/companies/show.php');
        require_once('views/components/layout/footer.php');
    }

    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/companies/edit.php');
        require_once('views/components/layout/footer.php');
    }

    public function create(){
        require_once('views/components/layout/head.php');
        require_once('views/companies/create.php');
        require_once('views/components/layout/footer.php');
    }
}
