<?php


namespace App\Core\Router;


use App\Utilities\Url;

class Router
{

    private $routes;

        public function __construct()
        {
            $this->routes = [
                '/pages/page_one' => 'page_one.php',
                '/pages/page_two' => 'page_two.php',
                '/pages/page_three' => 'page_three.php',
            ];
        }


        public function run()
        {
            try {
                $current_route = Url::current_route();

                foreach ($this->routes as $route => $view) {
                    if ($current_route == $route){
                        $this->includeViewAndDie(BASE_PATH . "resources/views/pages/$view");
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