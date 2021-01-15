<?php
if (isset($_POST['submit'])) {
    $pass = md5(md5($_POST['password']));
    $sqlquery = "select * from nguoidung where user=? and pass=? and trangthai=1";
    $stmt = $db->prepare($sqlquery);
    $stmt->bindParam(1, $_POST['username']);
    $stmt->bindParam(2, $pass);
    $stmt->execute();
    $resultSet = $stmt->fetchAll();
    foreach ($resultSet as $row) {
        $_SESSION['username'] = $row['user'];
        $_SESSION['pass'] = $row['pass'];
        $_SESSION['hoten'] = $row['hoten'];
    }
    if (isset($_SESSION['username'])) {
        echo "<script> alert('Đăng nhập thành công');</script>";
        echo "<script> location.href='index.php';  </script>";
    } else {
        echo "<script>alert('Đăng nhập thất bại'); location.href='javascript: history.back(-1);'; </script>";
    }
}
if (isset($_POST['cancel'])) {
    echo "<script> location.href='javascript: history.back(-1);'; </script>";
}
?>