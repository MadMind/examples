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
        $this->view->string1 = "Test 1";
    }

}
