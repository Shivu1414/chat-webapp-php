<?php
include('../libs/Smarty.class.php');
class Chat{
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
        echo "Website in progress";
        
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

?>