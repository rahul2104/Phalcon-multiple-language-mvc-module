<?php

namespace Multiple\Frontend\Controllers;

use Phalcon\Mvc\Controller;

class UsersController extends Controller
{

    public function indexAction()
    {
       // $lang   = $this->dispatcher->getParam('lg');
      //$lang=$this->request->get('lg');
        //echo '<pre>';print_r($lang);die;
        echo '<br>', __METHOD__;
    }
}
