<?php

function getallcate()
{
    $conn = connectdb();
    $stmt = $conn->prepare("select * from laptop_categories");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function getallcate_byID($manhasanxuat)
{
    $conn = connectdb();
    $sql = "SELECT * from laptop_categories dm join nhasanxuat nsx on dm.manhasanxuat = nsx.manhasanxuat WHERE dm.manhasanxuat=" . $manhasanxuat;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function insertcate($id, $tenloaisanpham, $manhasanxuat)
{
    $conn = connectdb();
    $sql = "INSERT INTO laptop_categories (tenloaisanpham,manhasanxuat) VALUES ('" . $tenloaisanpham . "','" . $manhasanxuat . "')";
    $conn->exec($sql);
}
function getonecate($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("select * from laptop_categories where id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}

function updatecate($id, $tenloaisanpham, $manhasanxuat)
{
    $conn = connectdb();
    $sql = "UPDATE laptop_categories 
                SET
                    tenloaisanpham = :tenloaisanpham, 
                    manhasanxuat =:manhasanxuat
                   
                WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':tenloaisanpham', $tenloaisanpham);
    $stmt->bindParam(':manhasanxuat', $manhasanxuat);
    $stmt->execute();
}

function delcate($id)
{
    $conn = connectdb();
    $sql = "DELETE from laptop_categories where id=" . $id;
    $conn->exec($sql);
}
