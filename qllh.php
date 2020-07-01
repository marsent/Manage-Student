<?php
include("View/element/header.php");
require "controllers/qllh-submit.php";
?>
<div class="container-fluid">
	<h1 style="text-align: center">THÔNG TIN LỚP HỌC</h1>
	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-header">
					Thông tin lớp học
				</div>
				<form method="POST">
					<div class="card-body">
						<table class="table">
							<tr>
								<td>Mã khối: </td>
								<td>
									<select name="MaKhoiLop" id="" style="margin-left:100px">
										<?php
										$sql_select = "SELECT * FROM khoilop";
										$result_select = mysqli_query($conn, $sql_select);
										if ($result_select->num_rows > 0) {
											while ($row = mysqli_fetch_assoc($result_select)) {
												echo "<option value='$row[MaKhoiLop]'>$row[MaKhoiLop]</option>";
											}
										}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Tên lớp học: </td>
								<td>
									<input type="text" name="TenLop" style="margin-left:60px" required>
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
						</table>
						<div style="text-align:center">
							<button type="submit" name="submit" class="btn btn-primary">Thêm lớp mới</button>
						</div>
					</div>
				</form>
			</div>
			<div class="card">
				<div class="card-header">
					Danh sách học sinh trong lớp
				</div>
				<div class="card-body">
					<div class="table-wrapper-scroll-y my-custom-scrollbar" style="height:300px">
						<form method="POST">
							<select name="lopmay" id="" style="margin-bottom: 21px;">
								<?php
								$malop = "";
								$sql_select = "SELECT * FROM lop";
								$result_select = mysqli_query($conn, $sql_select);
								if ($result_select->num_rows > 0) {
									while ($row = mysqli_fetch_assoc($result_select)) {
										echo "<option value='$row[MaLop]'>$row[TenLop]</option>";
									}
								}
								?>
							</select>
							<select name="hocky" id="" style="margin-bottom: 21px;">
								<?php
								$sql_select = "SELECT DISTINCT HocKy FROM hocky";
								$result_select = mysqli_query($conn, $sql_select);
								if ($result_select->num_rows > 0) {
									while ($row = mysqli_fetch_assoc($result_select)) {
										echo "<option value='$row[HocKy]'>$row[HocKy]</option>";
									}
								}
								?>
							</select>
							<select name="namhoc" id="" style="margin-bottom: 21px;">
								<?php
								$sql_select = "SELECT DISTINCT * FROM namhoc";
								$result_select = mysqli_query($conn, $sql_select);
								if ($result_select->num_rows > 0) {
									while ($row = mysqli_fetch_assoc($result_select)) {
										echo "<option value='$row[MaNam]'>$row[NamHoc]</option>";
									}
								}
								?>
							</select>
							<button type="submit" name="chonlop" class="btn btn-primary">Chọn</button>
						</form>
						<table class="table table-bordered table-striped mb-0">
							<thead>
								<tr>
									<th scope="col">STT</th>
									<th scope="col">Mã học sinh</th>
									<th scope="col">Họ tên</th>
									<th scope="col">Giới tính</th>
									<th scope="col">Năm sinh</th>
									<th scope="col">Địa chỉ</th>
									<th scope="col">Email</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (isset($_POST["lopmay"]) && isset($_POST["chonlop"]) && isset($_POST["hocky"]) && isset($_POST["namhoc"])) {
									$chonlophoc = $_POST["lopmay"];
									$hocky = $_POST["hocky"];
									$namhoc = $_POST["namhoc"];
									$sql_lop = "SELECT DISTINCT * FROM hocsinh h, quatrinhhoc q, hocky hk
												WHERE h.MaHocSinh=q.MaHocSinh AND hk.MaHocKy=q.MaHocKy AND q.MaLop='$chonlophoc'
												AND hk.HocKy='$hocky' AND hk.MaNam='$namhoc'";
									$result_lop = mysqli_query($conn, $sql_lop);
									if ($result_lop->num_rows > 0) {
										$count = 0;
										while ($row = mysqli_fetch_assoc($result_lop)) {
											$count++;
								?>
											<tr>
												<th scope="row"><?php echo $count; ?></th>
												<td><?php echo $row["MaHocSinh"]; ?></td>
												<td><?php echo $row["HoTen"]; ?></td>
												<td><?php echo $row["GioiTinh"]; ?></td>
												<td><?php echo $row["NgaySinh"]; ?></td>
												<td><?php echo $row["DiaChi"]; ?></td>
												<td><?php echo $row["Email"]; ?></td>
											</tr>
								<?php
										}
									}
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="col-6">
			<div class="card">
				<div class="card-header">
					Danh sách lớp học
				</div>
				<div class="card-body">
					<div class="table-wrapper-scroll-y my-custom-scrollbar" style="height: 628px;">
						<table class="table table-bordered table-striped mb-0"">
							<thead>
								<tr>
									
									<th scope=" col">STT</th>
									<th scope="col">Mã lớp</th>
									<th scope="col">Tên lớp học</th>
									<th scope="col">Sĩ số</th>
									<th scope="col">Thao tác</th>

								</tr>
							</thead>
							<tbody>
								<?php
								$sql_select = "SELECT * FROM lop";
								$result_select = mysqli_query($conn, $sql_select);
								if ($result_select->num_rows > 0) {
									$count = 0;
									while ($row = mysqli_fetch_assoc($result_select)) {
										$count++;
								?>
										<tr>
											<th scope="row"><?php echo "$count"; ?></th>
											<td><?php echo "$row[MaLop]"; ?></td>
											<td><?php echo "$row[TenLop]"; ?></td>
											<td><?php echo "$row[SiSo]"; ?></td>
											<td><button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Sửa</button></td>
										</tr>
								<?php
									}
								}
								?>
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Thay đổi tên lớp</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>

											<div class="modal-body">
												<form method="POST">
													<div class="form-group">
														<label class="col-form-label">Mã Lớp </label>
														<input type="text" name="MaLop" id="classCode" class="form-control">
														<label class="col-form-label">Tên lớp: </label>
														<input type="text" name="TenLop" id="className" class="form-control">
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="submit" name="save" class="btn btn-primary">Save changes</button>
													</div>
												</form>
											</div>
											<?php
											if (isset($_POST["save"])) {
												$malop = $_POST["MaLop"];
												$tenlop = $_POST["TenLop"];
												$sql_update = "UPDATE lop SET TenLop='$tenlop' WHERE MaLop='$malop'";
												$result = mysqli_query($conn, $sql_update);
												if ($result) {
													echo "<script> alert('Sửa thành công')</script>";
												} else {
													echo "<script>alert('Sửa không thành công')</script>";
												}
											}
											?>
										</div>
									</div>
								</div>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<footer class="footer">

</footer>
<script>
	$(document).ready(function() {
		$(".edit-btn").click(function() {
			var tr = $(this).closest("tr");
			var data = tr.children("td").map(function() {
				return $(this).text();
			}).get();
			console.log(data);

			$("#classCode").val(data[0]);
			// $("#classCode").prop("disabled", true);
			$("#className").val(data[1]);
			var value = $("#classCode").val();
			$("#classCode").change(function() {
				alert("Khong the thay doi gia tri nay");
				$(this).val(value);

			})
		})
	})
</script>

<!-- JS boostrap 4 -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
include("View/element/footer.php");
?>