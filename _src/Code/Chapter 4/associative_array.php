<?
   include_once("libs/smarty.class.php");
   $smarty = new smarty();	
   $students = array(
      "didar" => array("name"=>"Didar Bhuiyan","roll"=>12), 
      "emran" => array("name"=>"Emran Hasan","roll"=>18),
      "hasan" => array("name"=>"Tanveer Hasan","roll"=>23));
   $smarty->assign("students",$students);
   $smarty->display("associative_array.tpl");  
?>
