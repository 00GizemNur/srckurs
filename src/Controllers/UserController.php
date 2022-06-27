<?php

require_once "./src/Models/UserModel.php";

function userUpdate()
{

    $data["title"] = "G&F SÜRÜCÜ KURSU | Güncelle";

    if (isset($_POST["update"])) {

        $id = $_POST["id"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $job =  $_POST["job"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        $address = $_POST["address"];
        $about = $_POST["about"];

        if (userUpdateModel($id, $firstname, $lastname, $job, $email, $password, $role, $address, $about)) {

            $data["message"] = "Kullanıcı güncelleme başarılı.";

            header("Refresh:1; /?admin");
            view("message", $data);
        }
    }


    $user_id_list = [];

    foreach (getLastUsersId() as $user) {
        array_push($user_id_list, $user["id"]);
    }

    $is_numeric = is_numeric(array_search($_GET["id"], $user_id_list, true));


    if ($is_numeric) {

        $data["user"] = getUserModel($_GET["id"]);
        view("kullanici_guncelle", $data);
    } else {
        $data["message"] = "Kullanıcı bulunamadı";
        view("message", $data);
    }
}


function userDelete()
{
    $data["title"] = "G&F SÜRÜCÜ KURSU | Silme";

    $user_id_list = [];

    foreach (getLastUsersId() as $user) {
        array_push($user_id_list, $user["id"]);
    }
    
    $is_numeric = is_numeric(array_search($_GET["id"], $user_id_list, true));

    if ($is_numeric) {

        $data["user"] = getUserModel($_GET["id"]);
        $id = $_GET["id"];

        if (userDeleteModel($id)) {

            $data["message"] = "Kullanıcı silme başarılı.";

            header("Refresh:1; /?admin");
            view("message", $data);
        }
    } else {
        $data["message"] = "Kullanıcı bulunamadı";
        view("message", $data);
    }
}
