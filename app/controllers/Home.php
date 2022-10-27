<?php
class Home extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('HomepageModel');
    }

    public function index()
    {
        /*
            here we put the getAbout function from the HomeModel in a variable so
            we can extract the data
        */
        $data = [
            'title' => 'Home'
        ];

        //sending $data array to the view.
        $this->view('views/index', $data);
    }
}
