<?php
//routingnya 
// atau yang ngatur urlnya
class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    

    public function __construct(){
        $url = $this->parseUrl();
        
        //controller
        if($url == NULL)
               {
			$url = [$this->controller];
		}
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        //ada gk file yang namanya home.php/$url[0] didalam folder controller ini 
        //jika ada kita timpa
        
        require_once '../app/controllers/' . $this->controller . '.php'; 
        $this->controller = new $this->controller;
        // /*kelas home diinstansiasi dengan controller baru untuk mendapatkan methodnya
        // */
        
        //method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){ //dari controllernya ada gk methodnya
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if(!empty($url)){
            $this->params = array_values($url);
        }
        
        //jalankan controllers, method, dan kirimkan parameter jika ada
        call_user_func_array([$this->controller,$this->method],$this->params);
        
    }
    public function parseUrl(){
        if (isset($_GET['url']) ){
            $url = trim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode ('/', $url);
            return $url;
        }
    }
};