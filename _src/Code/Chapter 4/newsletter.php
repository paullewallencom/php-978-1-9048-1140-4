<?
include ("libs/smarty.class.php");
$smarty = new Smarty();

$smarty->assign("issue", 3);
$smarty->assign("month","October");
$smarty->assign("year", 2005);

$books = array("Building websites with Mambo","Building Telephony Systems With Asterisk");
$images = array("http://www.packtpub.com/images/73x90/1904811736.png","http://www.packtpub.com/images/73x90/1904811159.png");

$smarty->assign("books", $books);
$smarty->assign("images", $images);

$review = <<< END
An easy introduction to using and configuring Asterisk to build feature-rich telephony systems for small and medium businesses.
This book shows how to build a telephony system for your home or business using the free and open source application, Asterisk. ‘Building a Telephony System with Asterisk’ takes you step-by-step through the process of installing and configuring Asterisk. It shows you how to make a deployment plan, and how to create a dial plan.
END;

$link = "http://www.packtpub.com/asterisk/book";
$title = "Building Telephony Systems With Asterisk";
$reviews = array("title"=>$title, 
                 "description"=>$review,
                 "link"=>$link);
$smarty->assign("reviews", $reviews);

$output = $smarty->fetch("newsletter.tpl");                

$user = "someuser@somedomain.com";

$headers = "MIME-Version: 1.0 \n" ;
$headers .= "Content-Type: text/html; charset=iso-8859-1 \n";
$headers .= "From: i_am_not_spamming@my_domain.com \n";

mail($user, "Newsletter", $out, $headers);
?>