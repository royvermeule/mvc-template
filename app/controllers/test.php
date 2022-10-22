<?php
class test extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('HomepageModel');
        $this->homepageHtml = $this->htmlInsert('Homepages');
    }

    public function home()
    {
    }
}
