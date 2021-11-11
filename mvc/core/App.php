<?php

class App
{
    protected $controller = "Home";
    protected $action = "Index";
    protected $param = [];

    public function __construct()
    {
        $arr = $this->getUrl();

        // xử lý controller
        if (isset($arr)) {
            if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];
            }
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller();
        unset($arr[0]);
        //xử lý action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
        }
        unset($arr[1]);

        //xử lý param
        $this->param = $arr ? array_values($arr) : [];

        call_user_func_array([$this->controller, $this->action], $this->param);
    }

    public function getUrl()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
