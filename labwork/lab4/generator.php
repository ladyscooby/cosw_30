<?php
    $numParagraphs = $_POST["paragraphs"];
    $text = $_POST["text"];
    
    $textExplode = explode(' ', $text);
    
    shuffle($textExplode);
    
    /*foreach($textExplode as $key => $value){
        echo "<p>$key value: $value</p>";
    }*/
    
    
    $textImplode = implode(' ', $textExplode);
    
    /*$text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."*/
    
    for($i = 0; $i < $numParagraphs; $i++) {
        echo "<p>$textImplode</p>";
    }
    
    

?>

