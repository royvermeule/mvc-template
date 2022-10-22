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

    public function about()
    {
        /*
            here we put the getAbout function from the HomeModel in a variable so
            we can extract the data
        */
        $getAbout = $this->homeModel->getAbout();

        //extracting data
        foreach ($getAbout as $info)

            //here we write the html so we can send it to the view.
            $about = '
            <div class="container-1">
                <div>
                    <section class="about">
                        <p>' . $info->name . '</p>
                        <p>' . $info->info . '</p>
                        <p>Version: ' . $info->version . '</p>
                    </section>
                </div>
            </div>
        ';

        $data = [
            'html' => $about,
            "title" => 'about'
        ];

        //sending $data array to the view.
        $this->view('pages/index', $data);
    }
}
