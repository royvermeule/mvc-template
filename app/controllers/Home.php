<?php

declare(strict_types=1);

namespace Controllers;

use Libraries\BaseController;
use Models\HomepageModel;

class Home extends BaseController
{
  protected $homeModel;

  public function __construct()
  {
    $this->homeModel = new HomepageModel();
  }

  public function index(): void
  {
    $data = [
      'title' => 'mvc-template'
    ];

    //sending $data array to the view.
    $this->view('homepages/index', $data);
  }
}
