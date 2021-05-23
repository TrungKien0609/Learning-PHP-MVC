<!-- có bao nhiêu trang ( home,contact,product,...) 
có bấy nhiêu controlers -->
<?php
// require_once "./mvc/Core/Controller.php"; 
class Home extends Controler
{
    function SayHi()
    {
        // echo "hi hi";
        $teo = $this->model('SinhvienModel');
        $view  = $this->view(
            'interface',
            [
                "ten" => $teo->GetSv(),
                "page" => "news",
                "list" => $teo->listSV()
            ]
        );
    }
    function Show()
    {
        echo "Show";
    }
}
?>