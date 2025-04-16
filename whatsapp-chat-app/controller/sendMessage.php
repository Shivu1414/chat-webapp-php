<?php
include('../../libs/Smarty.class.php');
class Send{
    private $smarty;
    public function __construct() {
        $this->smarty = new \Smarty\Smarty;
    }

    public function index(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $this->data();
        }
        else{
            $this->redirect();
        }
    }

    private function data(){
        require_once '../models/Api.php';
        $msg = $_POST['msg'];
        $phone = $_POST['contact'];

        $api = new Api();
        $api->sendMassage($msg, $phone);
    }

    private function redirect(){
        require_once 'models/helper.php';
        $database=new dataBase();
        $conndb=$database->adminDbConn();
        $sql="SELECT * FROM `users` ";
        $stmt = $conndb->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $rsearchOpt = $result->fetch_all(MYSQLI_ASSOC);

        $this->smarty->assign('users', $rsearchOpt);
        $this->smarty->display('../templates/chatView.tpl');
    }
}
$send = new Send();
$send->index();

?>