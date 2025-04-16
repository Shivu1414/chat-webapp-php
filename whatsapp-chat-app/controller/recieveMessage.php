<?php
include('../../libs/Smarty.class.php');
class Receive{
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
        $json = file_get_contents('php://input');
        $data = json_decode($json, true); 
        $phone = $data['response'] ?? null;

        $api = new Api();
        $api->receiveMassage($phone);
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
$receive = new Receive();
$receive->index();

?>