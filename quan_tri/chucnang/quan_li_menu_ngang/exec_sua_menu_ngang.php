<?php

if (!isset($login)) {
    exit();
}
?>
<?php

if (isset($_POST['submit'])) {
    include('../database/connect.php');
    $id = $_POST['id'];
    $title = mb_strtoupper($_POST['title']);
    $content = $_POST['content'];
    $sql = "update navbar set navitemname= ?,content= ? where id=?";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $title);
    $stmt->bindParam(2, $content);
    $stmt->bindParam(3, $id, PDO::PARAM_INT);
    if ($stmt->execute()) {
        echo "<script> alert('Sửa menu thành công'); location.href='?menu=quanli_menu_ngang';  </script>";
    } else {
        echo "<script> alert('Sửa menu không thành công'); location.href='?menu=quanli_menu_ngang';  </script>";
    }
}
if (isset($_POST['cancel'])) {
    header('location:?menu=quanli_menu_ngang');
}
?>