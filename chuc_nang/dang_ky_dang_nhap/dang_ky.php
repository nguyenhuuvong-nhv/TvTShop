<?php if (isset($_SESSION['check1'])) { ?>

    <div class="alert alert-success">
        <strong>Thông báo</strong> <?php echo $_SESSION['check1']; ?>
    </div>
    <?php
    unset($_SESSION['check1']);
} else {
    if (isset($_SESSION['check2'])) {
        ?>
        <div class="alert alert-success">
            <strong>Thông báo</strong> <?php echo $_SESSION['check2']; ?>
        </div>

        <?php unset($_SESSION['check2']);
    }
}
?>

<form action="?menu=exec_dang_ky" method="post">
    <table class="table">
        <tr>
        <input class="form-control" type="text" name="name" placeholder="Họ và tên.." required/> <br>
        </tr>
        <tr>
        <input class="form-control" type="text" name="user" placeholder="Tên đăng nhập.." required/> <br>
        </tr>
        <tr>
        <input class="form-control" type="text" name="address" placeholder="Địa chỉ.." required/><br>
        </tr>
        <tr>
        <div class="custom-select">
            <select class="form-control" name="gioitinh" title="Giới tính">
                <option value="Nam"> Nam</option>
                <option  value="Nữ"> Nữ</option>
                <option  value="Khác"> Khác</option> 
            </select>
        </div><br>
        <tr>
        <input class="form-control" type="email" name="email" placeholder="Email.." /><br>
        </tr>
        <tr>
        <input class="form-control" type="text" name="number" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10" maxlength="10"/><br>
        </tr>
        <tr>
        <input class="form-control" type="password" name="password1" placeholder="Mật khẩu.." required  minlength="5"/><br>
        </tr>
        <tr>
        <input class="form-control" type="password" name="password" placeholder="Xác nhận mật khẩu.." required minlength="5"/><br>
        </tr>
        <tr >
            <td colspan="2" align="center"> <input type="submit" name="submit" class="btn btn-primary" value="Đăng Ký"><br> </td>
        </tr>

    </table>
</form>
