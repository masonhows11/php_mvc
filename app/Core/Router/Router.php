<?php


namespace App\Core\Router;


use App\Utilities\Url;

class Router
{

    private $routes;

        public function __construct()
        {
            $this->routes = [
                '/' => 'home.php',
                '/pages/page_one' => 'pages/page_one.php',
                '/pages/page_two' => 'pages/page_two.php',
                '/pages/page_three' => 'pages/page_three.php',
            ];
        }


        public function run()
        {
            try {
                $current_route = Url::current_route();

                foreach ($this->routes as $route => $view) {
                    if ($current_route == $route){
                        $this->includeViewAndDie(BASE_PATH . "resources/views/$view");
                    }
                }
                header("HTTP/1.1 404 Not Found");
                $this->includeViewAndDie(BASE_PATH . "resources/views/errors/404.php");
            } catch (\Exception $ex) {

                echo $ex->getMessage();
            }

        }


        private function includeViewAndDie($viewPath)
        {
            include $viewPath;
            die();
        }

}