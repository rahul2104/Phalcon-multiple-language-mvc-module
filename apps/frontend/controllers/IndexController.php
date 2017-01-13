<?php

namespace Multiple\Frontend\Controllers;

use Phalcon\Mvc\Url;
use Phalcon\Mvc\Controller;
use Phalcon\Translate\Adapter\NativeArray;

class IndexController extends Controller
{
    protected function getTranslation($language)
    {
        // Ask browser what is the best language
        if($language==''){
            $language = $this->request->getBestLanguage();
        }
        $translationFile = __DIR__ ."/../../../apps/messages/" . $language . ".php";

        // Check if we have a translation file for that lang
        if (file_exists($translationFile)) {
            require $translationFile;
        } else {
            // Fallback to some default
            require __DIR__ ."/../../../apps/messages/en.php";
        }

        // Return a translation object
        return new NativeArray(
            [
                "content" => $messages,
            ]
        );
    }

    public function indexAction()
    {
        //$url = new Url();
        //echo $url->getBaseUri();die;
        $lang   = $this->dispatcher->getParam('language');
        $this->view->name = "Rahul Singh";
        $this->view->language=$lang;
        $this->view->t    = $this->getTranslation($lang);
    }
}
