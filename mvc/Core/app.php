<?php
class App
{
    protected $controller = "Home";
    protected $action = "SayHi";
    protected $param = [];
    public function __construct()
    {
        $arr = $this->UrlProcess();
        if (file_exists("./mvc/Controlers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/Controlers/" . $this->controller . ".php";
        // Xử lí action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) // method_exist: kiểm tra xem phương 
            //  thức đưa vào có có trong class/Object đó hay không?
            {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        // xử lí param
        $this->param = $arr? array_values($arr):[];
        call_user_func_array([$this->controller,$this->action],$this->param); // tự động chạy  các callback function / đối số truyền vào tương ứng
        // call_user_func_array(array(tên lớp,phương thức cần thực hiện),tham số cần cho phương thức cần thực hiện đó)
        // phướng thức đó nếu có trả về kết quả cũng có thể gán  $temp = call_user_func_array() . Muốn chạy một phương thức nhưng k cần khởi tạo đối tượng. 
        // Không dùng static mà vẫn gọi được phương thức ??????????????????????????????
    }
    function UrlProcess()
    {
        if (isset($_GET['url'])) {
            return   explode("/", filter_var(trim($_GET['url'])));
        }
    }
}
