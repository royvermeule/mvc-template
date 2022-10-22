<?php
class HomePage extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('HomepageModel');
    }

    public function index()
    {

        $home = '
            <div class="container-1">
                <div>
                    <p>home</p>
                    <p>home</p>
                    <p>home</p>
                </div>
            </div>
        ';

        $data = [
            'html' => $home,
            'title' => 'Home'
        ];

        $this->view('homepages/index', $data);
    }

    public function about()
    {
        $getAbout = $this->homeModel->getAbout();
        $rows = '';
        foreach ($getAbout as $info) {
            $rows .= "<tr>
                            <td>$info->name</td>
                        </tr>";
        }


        $about = '
            <div class="container-1">
                <div>
            ' .
            $rows
            . '
                </div>
            </div>
        ';

        $data = [
            'html' => $about,
            "title" => 'about'
        ];

        $this->view('homepages/index', $data);
    }
}
