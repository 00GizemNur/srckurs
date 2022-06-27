<?php


function getLastUsersId()
{
    global $conn;
    $sql = "SELECT id FROM user";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) > 0 ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
}

function getUserModel($id)
{
    global $conn;

    $sql = "SELECT * FROM user WHERE user.id='$id'";
    $result = mysqli_query($conn, $sql);

    return mysqli_num_rows($result) > 0 ? mysqli_fetch_all($result, MYSQLI_ASSOC)[0] : [];
}

function getUsersModel()
{
    global $conn;
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);

    return mysqli_num_rows($result) > 0 ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
}

function getEducatorModel()
{
    global $conn;

    $sql = "SELECT * FROM user WHERE user.role='educator'";
    $result = mysqli_query($conn, $sql);

    return mysqli_num_rows($result) > 0 ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
}


function userSignupModel($firstname, $lastname, $job, $address, $email, $password)
{
    global $conn;

    $sql = "INSERT INTO user (firstname, lastname,job, address,email,password,role,about) 
    VALUES ('$firstname','$lastname','$job','$address','$email','$password','user','');";

    return mysqli_query($conn, $sql) ? true : false;
}

function userSigninModel($email, $password)
{
    global $conn;

    $sql = "SELECT email, password, role FROM user WHERE user.email='$email' AND user.password='$password'";
    $result = mysqli_query($conn, $sql);

    return mysqli_num_rows($result) > 0 ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
}


function userUpdateModel($id, $firstname, $lastname, $job, $email, $password, $role, $address, $about)
{
    global $conn;

    $sql = "UPDATE user
    SET firstname = '$firstname',
    lastname= '$lastname',
    job= '$job',
    email= '$email',
    password= '$password',
    role= '$role',
    address= '$address',
    about= '$about'
    WHERE id = '$id'";

    return mysqli_query($conn, $sql) ? true : false;
}

function userDeleteModel($id)
{
    global $conn;

    $sql = "DELETE FROM user WHERE id='$id'";

    return mysqli_query($conn, $sql) ? true : false;
}
