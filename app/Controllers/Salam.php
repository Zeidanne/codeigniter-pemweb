<?php
namespace App\Controllers;


use App\Models\SalamModel;

class Salam extends BaseController{
        
    public function index(){
        echo "hello"   ;
    }
    public function nama($params){
        $model = new SalamModel();
        if ($params == ""){
            $params = "User";
        }
        echo $model -> getData($params);
    }
}
?>