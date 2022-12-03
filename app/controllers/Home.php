<?php
class Home extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('HomepageModel');
    }

    public function index()
    {

        $data = [
            'title' => 'mvc-template'
        ];

        //sending $data array to the view.

        $this->view('homepages/index', $data);
    }
}


