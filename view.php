<?php

class View{
  
    const PATH ='C:\\wamp64\\www\\DevWeb3_cours2\\';
    protected $template = null;

    public function __construct($template) {
        $this->template = $template;
    }

    public function render(Array $data) {
        extract($data);
        ob_start();
        include( self::PATH . $this->template);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}


?>