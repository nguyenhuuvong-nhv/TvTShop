<?php
if (!isset($_SESSION['username'])) {
    echo "<script> location.href='?menu=dang_nhap'; </script>";
}
$user = $_SESSION['username'];
$sqlquery = "select * from nguoidung where user='$user'";
$stmt = $db->prepare($sqlquery);
$stmt->execute();
$resultSet = $stmt->fetchAll();
foreach ($resultSet as $row) {
    ?>

    <form action="?menu=update_info" method="post">
        <h4 class="title-main" style="text-align: center;">THAY ĐỔI THÔNG TIN </h4>
        <?php if (isset($_SESSION['check1'])) { ?>
        <div class="alert alert-success">
            <strong>Thông báo</strong> <?php echo $_SESSION['check1']; ?>
        </div>
        <?php
        unset($_SESSION['check1']);
        } ?>
        <table class="table">
            <tr>
            <input class="form-control" type="text" name="name" placeholder="Họ và tên.." value="<?php echo $row['hoten']; ?>" required/> <br>
            </tr>
            <tr>
            <input class="form-control" type="text" name="address" placeholder="Địa chỉ.."value="<?php echo $row['diachi']; ?>" required/><br>
            </tr>
            <tr>
            <div class="custom-select">
                <select class="form-control" name="gioitinh" title="Giới tính">
                    <option <?= ($row['gioitinh'] == 'Nam') ? 'selected' : '' ?> value="Nam"> Nam</option>
                    <option <?= ($row['gioitinh'] == 'Nữ') ? 'selected' : '' ?> value="Nữ"> Nữ</option>
                    <option <?= ($row['gioitinh'] == 'Khác') ? 'selected' : '' ?> value="Khác"> Khác</option>
                </select>
            </div><br>
            <tr>
            <input class="form-control" type="email" name="email" placeholder="Email.." value="<?php echo $row['email']; ?>" /><br>
            </tr>
            <tr>
            <input class="form-control" type="text" name="sdt" placeholder="Số điện thoại.." value="<?php echo $row['sdt']; ?>" required pattern="[0-9]+" minlength="10" maxlength="10"/><br>
            </tr>
            <tr >
                <td colspan="2" align="center"> <input type="submit" name="submit" class="btn btn-primary" value="Cập Nhật"><br> </td>
            </tr>

        </table>
    </form>
<?php } ?>


<form action="?menu=doi_mk" method="post">
    <h4 class="title-main" style="text-align: center;">ĐỔI MẬT KHẨU</h4>
    
    <?php if (isset($_SESSION['check1'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?php echo $_SESSION['check1']; ?>
    </div>
    <?php
    unset($_SESSION['check1']);
    } ?>
    <table class="table">
        <tr>
        <input class="form-control" type="password" name="password_old" placeholder="Mật khẩu cũ.." minlength="6" required/><br>
        </tr>
        <tr>
        <input class="form-control" type="password" name="password_new" placeholder="Mật khẩu mới.." required  minlength="6"/><br>
        </tr>
        <tr>
        <input class="form-control" type="password" name="password_re" placeholder="Xác nhận mật khẩu.." required minlength="6"/><br>
        </tr>
        <tr >
            <td colspan="2" align="center"> <input type="submit" name="submit" class="btn btn-primary" value="Cập Nhật"><br> </td>
        </tr>

    </table>
</form>