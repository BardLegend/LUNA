<?php

use LUNA\core\Controller;

// this controller is called when the url contains a path that doesn't exists

class Errors extends Controller
{

    public function index()
    {      
        // Will be removed
        echo "Uknown error occurred!";
    }

    public function pageNotFound()
    {
        $this->view('layout/overall_top');
        $this->view('errors/page_not_found');
        $this->view('layout/overall_bottom');
    }

    public function accessForbidden()
    {
        $this->view('layout/overall_top');
        $this->view('errors/page_access_forbidden');
        $this->view('layout/overall_bottom');
    }
}
