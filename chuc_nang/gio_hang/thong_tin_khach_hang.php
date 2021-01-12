<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Giỏ hàng';
    });

</script><p class="alert alert-success">Bạn có thể <a href="?menu=dang_ky">đăng ký</a> làm thành viên để có thể nhận được nhiều ưu đãi hơn từ chúng tôi.<br>Hoặc có thể mua hàng trực tiếp không cần đăng ký thành viên trực tiếp qua form đăng ký bên dưới.</p>
<p class="alert alert-warning"><strong>Chú ý:</strong> Các thông tin có dấu <span style="color: red;">(*)</span> đều là bắt buộc.</p>
<form id="form" action="?menu=hoa_don" method="post">
	<table class="table">
		<tr>
			<td><label for="tenkh">Họ và tên: </label> <span style="color: red;">(*)</span></td>
			<td><input type="text" class="form-control" name="tenkh" id="tenkh" placeholder="Nhập họ và tên.." required ></td>
		</tr>
		<tr>
			<td><label for="email">Email:</label> </td>
			<td><input type="email" class="form-control" name="email" id="email" placeholder="Nhập địa chỉ Email.." ></td>
		</tr>
		<tr>
			<td><label for="sdt">Sdt:</label> <span style="color: red;">(*)</span></td>
			<td><input type="text" class="form-control" name="sdt" id="sdt" placeholder="Nhập số điện thoại.." required></td>
		</tr>
		<tr>
			<td><label for="diachi">Địa chỉ:</label> <span style="color: red;">(*)</span></td>
			<td><input type="text" class="form-control" name="diachi" id="diachi" placeholder="Tổ, thôn, xã, huyện, tỉnh    .." required></td>
		</tr>
		
		<tr>
			<td><input class="btn btn-primary" type="submit" name="submit" value="Mua hàng"></td></form>
			<td><form action="?menu=hoa_don" method="post"><input class="btn btn-primary" type="submit" name="cancel" value="Hủy"></form></td>
		</tr>
	</table>