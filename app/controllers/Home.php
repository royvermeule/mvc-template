<?php
class Home extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('HomepageModel');
        $this->homepageHtml = $this->htmlInsert('Homepages');
    }

    public function index()
    {
        $home = $this->homepageHtml->home();

        $data = [
            'html' => $home,
            'title' => 'Home'
        ];

        $this->view('homepages/index', $data);
    }

    public function about()
    {
        $about = $this->homepageHtml->about();

        $data = [
            'html' => $about,
            'title' => 'About'
        ];

        $this->view('homepages/index', $data);
    }
}
