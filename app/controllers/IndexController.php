<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        //display all the users from db
        $this->view->users = Users::find();
    }
}