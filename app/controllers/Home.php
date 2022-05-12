<?php
class Home extends Controller {
    public function __construct() {
        //$this->homeModel = $this->model('Home');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }
}
