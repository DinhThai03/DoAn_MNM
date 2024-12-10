<?php
function delsp($id)
{
    $conn = connectdb();
    $sql = "DELETE from laptops where id=" . $id;
    $conn->exec($sql);
}
function getallsp()
{
    $conn = connectdb();
    $stmt = $conn->prepare("select * from laptops");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function getallsp_byCate($loai_id)
{
    $conn = connectdb();
    $sql = "SELECT * FROM laptops WHERE 1";
    if ($loai_id > 0) $sql .= " AND loai_id=" . $loai_id;

    $stmt = $conn->prepare("$sql");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function getspbycatensx($loai_id, $manhasanxuat)
{
    $conn = connectdb();
    $sql = "SELECT * FROM laptops WHERE 1";
    if ($loai_id > 0) $sql .= " AND loai_id=" . $loai_id;
    if ($manhasanxuat > 0) $sql .= " AND manhasanxuat=" . $manhasanxuat;

    $stmt = $conn->prepare("$sql");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function getspBynsx($manhasanxuat)
{
    $conn = connectdb();
    $sql = "SELECT * FROM laptops WHERE 1";
    if ($manhasanxuat > 0) $sql .= " AND manhasanxuat=" . $manhasanxuat;
    $stmt = $conn->prepare("$sql");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function getdetail($id)
{
    if ($id > 0) {
        $sql = "SELECT * FROM laptops where id=" . $id;
        $conn = connectdb();
        $stmt = $conn->prepare("$sql");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetch();
        return $kq;
    } else {
        return 0;
    }
}
function getonesp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("select * from laptops where id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function updatesp($id, $loai_id, $manhasanxuat, $tensp, $processor, $ram, $dungluong, $vga, $manhinh, $price,  $mota, $quanity, $anhlaptop)
{

    // Kết nối cơ sở dữ liệu
    $conn = connectdb();

    // Câu lệnh SQL với placeholders
    $sql = "UPDATE laptops 
                SET
                    loai_id=:loai_id,
                    manhasanxuat =:manhasanxuat,
                    tensp = :tensp, 
                    processor = :processor, 
                    ram = :ram, 
                    dungluong = :dungluong, 
                    vga = :vga, 
                    manhinh = :manhinh, 
                    price = :price, 
                    mota = :mota, 
                    quanity = :quanity, 
                    anhlaptop = :anhlaptop
                WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':manhasanxuat', $manhasanxuat);

    $stmt->bindParam(':loai_id', $loai_id);
    $stmt->bindParam(':tensp', $tensp);

    $stmt->bindParam(':processor', $processor);
    $stmt->bindParam(':ram', $ram);
    $stmt->bindParam(':dungluong', $dungluong);
    $stmt->bindParam(':vga', $vga);
    $stmt->bindParam(':manhinh', $manhinh);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':mota', $mota);
    $stmt->bindParam(':quanity', $quanity);
    $stmt->bindParam(':anhlaptop', $anhlaptop);

    $stmt->execute();
}

function insertsp($id, $loai_id, $manhasanxuat, $tensp, $processor, $ram, $dungluong, $vga, $manhinh, $price,  $mota, $quanity, $anhlaptop)
{
    $conn = connectdb();
    $sql = "INSERT INTO laptops (loai_id,manhasanxuat,tensp,processor,ram,dungluong,vga,manhinh, price,mota,quanity,anhlaptop) VALUES ('" . $loai_id . "','" . $manhasanxuat . "','" . $tensp . "','" . $processor . "','" . $ram . "','" . $dungluong . "','" . $vga . "', '" . $manhinh . "','" . $price . "','" . $mota . "','" . $quanity . "','" . $anhlaptop . "')";
    $conn->exec($sql);
}
function searchProducts($keyword)
{
    $conn = connectdb();
    $sql = "SELECT * FROM laptops WHERE tensp LIKE '%" . $keyword . "%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $kq;
}
