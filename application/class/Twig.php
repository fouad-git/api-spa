<?php
namespace App;


class Twig{
    // avant private $template;
    private $template;

    public function __construct($template_name)
    {
        $loader = new \Twig\Loader\FilesystemLoader(dirname(dirname(__FILE__)).'/template');
        $twig = new \Twig\Environment($loader, [
            'cache' => '../../application/cache',
            'debug' => true,
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());

        $this->template = $twig->load($template_name);
    }

    public function render($arr=[])
    {
        echo $this->template->render($arr);
    }
}
?>