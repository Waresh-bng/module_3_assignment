<?php
function string($modifiedText){
$modifiedText=strtolower($modifiedText);
$search="brown";
$replace="red";
$modifiedText =str_replace($search,$replace,$modifiedText);
echo $modifiedText;
}
$text=("The quick brown fox jumps over the lazy dog.");
string($text);
?>
