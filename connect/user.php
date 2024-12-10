<?php

function checkuser($username, $userpass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * from taikhoan where username ='" . $username . "' and password='" . $userpass . "' ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    if (count($kq) > 0)
        return $kq[0]['role'];
    else
        return null;
}
function getuserinfo($username, $userpass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * from taikhoan where username ='" . $username . "' and password='" . $userpass . "' ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function getalluser()
{
    $conn = connectdb();
    $stmt = $conn->prepare("select * from taikhoan");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function deltk($id_tk)
{
    $conn = connectdb();
    $sql = "DELETE from taikhoan where id_tk=" . $id_tk;
    $conn->exec($sql);
}
