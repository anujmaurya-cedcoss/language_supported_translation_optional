<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        // redirected to index view
        
    }
    
    public function checkLanguageAction() {
        $languages = include_once(APP_PATH.'/config/languages.php');
        $language = $_POST['language'];
        if($languages[$language]) {
            $this->response->redirect("/signup/index?language=$languages[$language]");
        } else {
            echo "The selected language doesn't exist";
        }

    }
}
