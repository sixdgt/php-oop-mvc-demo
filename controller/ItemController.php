<?php 

include "../model/Item.php";

class ItemController{
    function index(){
        header("location: ../view/item_index.php");
    }

    function getItemList(){
        $con = new mysqli("localhost", "root", "", "ajax_crud");
        $sql = "SELECT * FROM items";
        $result = $con->query($sql);
        $data = array();
        
        while($row = mysqli_fetch_assoc($result)){
            $item = new Item();
            $item->setTitle($row['title']);
            $item->setDesc($row['description']);
            array_push($data, $item);
        }

        return $data;
    }
}