<?php
//Load the model and the view
class BaseController
{
    public function model($model)
    {
        //Require model file
        require_once '../app/models/' . $model . '.php';
        //Instantiate model
        return new $model();
    }

    //Load the view (checks for the file)
    public function view($view, $data)
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View does not exists.");
        }
    }
    public function htmlInsert($htmlInsert,  $dbContent = [])
    {
        require_once '../app/htmlInserts/' . $htmlInsert . '.php';

        return new $htmlInsert();
    }

    public function getController($getController)
    {
        require_once '../app/controllers/' . $getController . '.php';

        return $getController;
    }
}
