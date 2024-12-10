<?php
function taodonhang($madh, $tongtien, $name, $address, $phone, $pttt)
{
    $conn = connectdb();
    $sql = "INSERT INTO donhang (madh,tongtien,name,address,phone,pttt) VALUES ('" . $madh . "','" . $tongtien . "','" . $name . "','" . $address . "','" . $phone . "','" . $pttt . "')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}

function  addcart($iddh, $laptop_id, $tensp, $anhsp, $tongtien, $soluong)
{
    $conn = connectdb();

    // Kiểm tra xem laptop_id có tồn tại trong bảng laptops không
    $sql_check = "SELECT id FROM laptops WHERE id = :laptop_id";
    $stmt = $conn->prepare($sql_check);
    $stmt->bindParam(':laptop_id', $laptop_id, PDO::PARAM_INT);
    $stmt->execute();
    // Nếu laptop_id tồn tại, thực hiện thêm vào bảng chitietdonhang
    $sql = "INSERT INTO chitietdonhang (iddh, laptop_id, tensp, anhsp, tongtien, soluong)
            VALUES (:iddh, :laptop_id, :tensp, :anhsp, :tongtien, :soluong)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':iddh', $iddh, PDO::PARAM_INT);
    $stmt->bindParam(':laptop_id', $laptop_id, PDO::PARAM_INT);
    $stmt->bindParam(':tensp', $tensp, PDO::PARAM_STR);
    $stmt->bindParam(':anhsp', $anhsp, PDO::PARAM_STR);
    $stmt->bindParam(':tongtien', $tongtien, PDO::PARAM_STR);
    $stmt->bindParam(':soluong', $soluong, PDO::PARAM_INT);
    $stmt->execute();

    // $conn = connectdb();
    // $sql = "INSERT INTO chitietdonhang (iddh,laptop_id,tensp,anhsp,tongtien,soluong)
    //  VALUES ('" . $iddh . "','" . $laptop_id . "','" . $tensp . "','" . $anhsp . "','" . $tongtien . "','" . $soluong . "')";
    // $conn->exec($sql);

}
function getshowcart($iddh)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * from chitietdonhang WHERE iddh=" . $iddh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}

function getorderinfo($iddh)

{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * from donhang WHERE id=" . $iddh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq;
}
function addCartByid($id_tk, $laptop_id, $tensp, $anhsp, $soluong, $dongia)
{
    $conn = connectdb();
    $sql_insert = "INSERT INTO giohang (id_tk, laptop_id, tensp, anhsp, soluong, dongia) VALUES (:id_tk, :laptop_id, :tensp, :anhsp, :soluong, :dongia)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bindParam(':id_tk', $id_tk, PDO::PARAM_INT);
    $stmt->bindParam(':laptop_id', $laptop_id, PDO::PARAM_INT);
    $stmt->bindParam(':tensp', $tensp, PDO::PARAM_STR);
    $stmt->bindParam(':anhsp', $anhsp, PDO::PARAM_STR);
    $stmt->bindParam(':soluong', $soluong, PDO::PARAM_INT);
    $stmt->bindParam(':dongia', $dongia, PDO::PARAM_STR);
    $stmt->execute();
}
function getCartByUserId($id_tk)
{
    $conn = connectdb();

    $sql = "SELECT * FROM giohang WHERE id_tk = :id_tk";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_tk', $id_tk, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
