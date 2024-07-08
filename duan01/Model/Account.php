<?php
function insertAccount($Email, $username, $password, $rePassword)
{
    $sql = "INSERT INTO  users (Email, Username, Password, RePassword) VALUES ('$Email','$username','$password','$rePassword')";
    pdo_execute($sql);
}

function checkAccount($username, $password)
{
    $sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $account = pdo_query_one($sql);
    return $account;
}


function updateAccount($UserID, $Email, $name, $PhoneNumber, $Address, $username, $UserImg)
{
    if ($UserImg != "") {
        $sql = "UPDATE users SET Email = '" . $Email . "',
        PhoneNumber = '" . $PhoneNumber . "', 
        name = '" . $name . "',
        Address = '" . $Address . "',
        username = '" . $username . "',
        UserImg = '" . $UserImg . "'
           WHERE UserID = " . $UserID;
    } else {
        $sql = "UPDATE users SET Email = '" . $Email . "',
        PhoneNumber = '" . $PhoneNumber . "', 
        name = '" . $name . "',
        Address = '" . $Address . "',
        username = '" . $username . "'
        WHERE UserID = " . $UserID;
    }

    pdo_execute($sql);
}

function checkPass($Email)
{
    $sql = "SELECT * FROM users WHERE Email = '" . $Email . "'";
    $checkPassEmail = pdo_query_one($sql);
    return $checkPassEmail;
}

function renderAccount()
{
    $sql = "SELECT * FROM users order by UserID desc";
    $renderAccount = pdo_query($sql);
    return $renderAccount;
}

function loadone_account($UserID)
{
    $sql = "select * from users where UserID=" . $UserID;
    $dm = pdo_query_one($sql);
    return $dm;
}

function loadall_account()
{
    $sql = "select * from users order by UserID desc";
    $account = pdo_query($sql);
    return $account;
}

function deleteAccount($UserID)
{
    $sql = "delete from users where UserID=" . $UserID;
    pdo_execute($sql);
}

function update_account($UserID, $Email, $name, $username, $PhoneNumber, $Address)
{
    $sql = "update users set Email='" . $Email . "',
     name='" . $name . "',
      username='" . $username . "',
       PhoneNumber='" . $PhoneNumber . "',
       Address='" . $Address . "' where UserID=" . $UserID;
    pdo_execute($sql);
}

function logOut()
{
    if (isset($_SESSION['username'])) {
        unset($_SESSION['username']);
    }
}
