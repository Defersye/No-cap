<?php

namespace models;

class HomeModel
{
    protected $connect;
    function __construct(){
        $this->connect= \config\DBConnect::getInstance()->getConnect();
    }

    function getProducts(){

        $query=$this->connect->query("select * from Products");

        if($query->num_rows) {
            while ($row = $query->fetch_assoc()) {//перебираем все строчки
                $answer[] = $row;//и помещаем их в масссив
            }
        }
        return $answer;
    }
    function getGenre()
    {
        $query=$this->connect->query("select * from Categories");

        if($query->num_rows) {
            while ($row = $query->fetch_assoc()) {//перебираем все строчки
                $answer[] = $row;//и помещаем их в масссив
            }
        }
        return $answer;
    }
    function getFilteredProducts($genre,$age,$player_count,$minPrice,$maxPrice,$search ){
        $answer=[];
        $sql = "SELECT * FROM Products WHERE 1";
        // Добавляем условия фильтрации, если параметр передан
        if (!empty($genre)&&$genre!="All") {
            $sql .= " AND id_category = '$genre'";
        }
        if (!empty($search)) {
            $sql .= " AND LOWER(name) LIKE LOWER('%$search%')";
        }
        if (!empty($age)) {
            $sql .= " AND age = $age";
        }
        if (!empty($player_count) && $player_count!=0) {
            if( $player_count==11){
                $sql .= " AND countPlayers > 10";
            }else{
                $sql .= " AND countPlayers = $player_count";
            }

        }
        if (!empty($minPrice)) {
            $sql .= " AND price >= $minPrice";
        }
        if (!empty($maxPrice)) {
            $sql .= " AND price <= $maxPrice";
        }
        $query = $this->connect->query($sql);
        if($query->num_rows) {
            while ($row = $query->fetch_assoc()) {//перебираем все строчки
                $answer[] = $row;//и помещаем их в масссив
            }
        }
        return $answer;
    }

}