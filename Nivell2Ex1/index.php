<?php
require_once('DidacticResource.php');


$resource1 = new DidacticResource("Guía de PHP", Topic::PHP, "https://www.example.com/php-guide", ResourceType::WebArticle);
$resource2 = new DidacticResource("Curso de CSS", Topic::CSS, "https://www.example.com/css-course", ResourceType::Video);

echo $resource1 . "<br>";
echo $resource2 . "<br>";
?>