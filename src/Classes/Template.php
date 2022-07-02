<?php

namespace App\Classes;

class Template
{
    private string $template;

    private array $variables = [];

    /**
     * @param string $string
     */
    public function __construct(string $template)
    {
        $this->template = $template;
    }

    public function __set($name, $value)
    {
        $this->variables[$name] = $value;
    }

    public function __toString()
    {
        extract($this->variables);
        ob_start();
        include $this->template;

        return ob_get_clean();
    }
}