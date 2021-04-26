<?php
$inputJson = file_get_contents('php://input');
$input = json_decode($inputJson);
$returnValue = new stdClass();
if (
    is_object($input)
    && property_exists($input, 'a')
    && property_exists($input, 'b')
) {
    $a = $input->a;
    $b = $input->b;
    $returnValue->a = $a;
    $returnValue->b = $b;
    $returnValue->sum = $a + $b;
} else {
    $returnValue->errorMessage = "Angi URL-parametre, a og b";
    $returnValue->isError = true;
}
echo json_encode($returnValue);
