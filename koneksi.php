<?php
  class koneksi{
    function getkoneksi(){
        $db =new PDO("mysql:host=localhost;dbname=ppdbb",'root','');
    }
}