<?php
    session_start();    
    unset ($_SESSION["title"]); 
    unset ($_SESSION["genre"]); 
    unset ($_SESSION["subgenre"]); 
    unset ($_SESSION["country"]); 
    unset ($_SESSION["time"]); 
    unset ($_SESSION["filter"]); 
    
    $_SESSION["title"] = $_POST["title"];
    $_SESSION["genre"] = $_POST["genre"];
    $_SESSION["subgenre"] = $_POST["subgenre"];
    $_SESSION["country"] = $_POST["country"];
    $_SESSION["time"] = $_POST["time"];
    
    $_SESSION["filter"] = $_POST["filter"];
    return header("Location:../catalog_page.php?message=Отсортировано");
?> 