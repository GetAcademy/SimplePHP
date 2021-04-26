<?php
$returnValue = new stdClass(); 
if (array_key_exists("a", $_GET) && array_key_exists("b", $_GET)) {
    $a = (int)$_GET['a'];
    $b = (int)$_GET['b'];    
    $returnValue->a = $a;
    $returnValue->b = $b;
    $returnValue->sum = $a + $b;
} else {
    $returnValue->errorMessage = "Angi URL-parametre, a og b";
    $returnValue->isError = true;
}
echo json_encode($returnValue);
?>
