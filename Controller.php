<?php
class Controller
{
    private $view;

    public function setView($view)
    {
        $this->view = $view;
    }

    public function getView()
    {
        return $this->view;
    }

    public function indexAction()
    {
        $name = (!empty($_GET['name'])) ? $_GET['name'] : null;

        if ($name) {
            $this->view->setTemplate(__DIR__.'/views/controller/name.php');
            $this->view->name = $name;
        } else {
            $this->view->string1 = "Test 1";
        }
    }

}
