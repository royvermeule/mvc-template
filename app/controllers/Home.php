<?php
class Home extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('HomepageModel');
    }

    public function index()
    {

        //here we write the html so we can send it to the index.php file.
        $home = '
            <div class="container-1">
                <div class="home">
                    <p>MVC - TEMPLATE</p>
                </div>
            </div>
        ';

        $data = [
            'html' => $home,
            'title' => 'Home'
        ];

        //sending $data array to the view.
        $this->view('pages/index', $data);
    }
}
