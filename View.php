<?php
class View
{
    private $vars = array();
    private $template;

    // Set template file
    public function setTemplate($file)
    {
        $this->template = $file;
    }

    public function __set($name, $value)
    {
        $this->vars[$name] = $value;
    }

    public function __get($name)
    {
        return (!empty($this->vars[$name])) ? $this->vars[$name] : null;
    }

    public function render()
    {
        extract($this->vars);
        // $string1

        ob_start();

        include $this->template;

        $html = ob_get_clean();

        return $html;
    }

}
