<?php
namespace dasauser\Renderer;
class Renderer
{
    /**
     * @param string $viewPath
     * @param array $vars
     * @return void
     * @throws \Exception
     */
    public static function render(string $viewPath, array $vars = []) : void
    {
        if (!is_file($viewPath) || !file_exists($viewPath))
            throw new \Exception('View "'. $viewPath . ' " not exists');
        extract($vars);
        ob_start();
        require($viewPath);
        echo ob_get_clean();
    }
}
