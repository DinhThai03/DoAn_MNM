<?php

function getallnsx()
{
    $conn = connectdb();
    $stmt = $conn->prepare("select * from nhasanxuat");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function insertnsx($manhasanxuat, $tennhasanxuat, $mota)
{
    $conn = connectdb();
    $sql = "INSERT INTO nhasanxuat (manhasanxuat,tennhasanxuat,mota) VALUES ('" . $manhasanxuat . "','" . $tennhasanxuat . "','" . $mota . "')";
    $conn->exec($sql);
}
function delnsx($manhasanxuat)
{
    $conn = connectdb();
    $sql = "DELETE from nhasanxuat where manhasanxuat=" . $manhasanxuat;
    $conn->exec($sql);
}

