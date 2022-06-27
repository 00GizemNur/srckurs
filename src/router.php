<?php

require_once "./src/Controllers/SiteController.php";
require_once "./src/Controllers/UserController.php";


$id = $_GET["id"] ?? ""; // $_GET["id"] tanımlı ise $id=$_GET["id"] degilse $_GET["id"]=""

switch ($_SERVER["QUERY_STRING"]) {
    
    case "": index(); break;
    case "hakkimizda": hakkimizda(); break;
    case "dersler": dersler(); break;
    case "egitmenler": egitmenler(); break;
    case "sinav": sinav(); break;
    case "belge": belge(); break;
    case "iletisim": iletisim(); break;
    case "cikis": logout(); break;
    case "admin": admin(); break;
    case "guncelle&id=$id": userUpdate(); break;
    case "sil&id=$id": userDelete(); break;
    
    default: message(); break;
}


