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
            'title' => 'Home'
        ];

        //sending $data array to the view.
        $this->view('views/index', $data);
    }

    public function about()
    {
        /*
            here we put the getAbout function from the HomeModel in a variable so
            we can extract the data
        */
        $getAbout = $this->homeModel->getAbout();

        $rows = '';

        foreach ($getAbout as $info) {
            $rows .= "
                <tr>
                    <p>$info->name</p>
                    <p>$info->info</p>
                    <p>Version: $info->version</p>
                </tr>
            ";
        }

        $data = [
            'about' => $rows,
            'title' => 'about'
        ];

        //sending $data array to the view.
        $this->view('views/about', $data);
    }
}
