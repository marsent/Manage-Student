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
				<form  method="POST">
					<div class="card-body">
						<table class="table">
							<tr>
								<td>Mã khối: </td>
								<td>
									<input type="text" name="MaKhoiLop" style="margin-left:60px" required>
								</td>
							</tr>
							<tr>
								<td>Mã lớp học: </td>
								<td>
									<input type="text" name="MaLop" style="margin-left:60px" required>
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
							<button type="submit" name="submit" class="btn btn-primary" >Thêm lớp mới</button>
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
											$sql_select="SELECT * FROM lop";
											$result_select=mysqli_query($conn, $sql_select);
											if($result_select->num_rows>0){
												while($row=mysqli_fetch_assoc($result_select)){	
													echo "<option value='$row[MaLop]'>$row[TenLop]</option>";
												}
											}
								?>
							</select>
							<select name="hocky" id="" style="margin-bottom: 21px;">
								<?php
											$sql_select="SELECT DISTINCT HocKy FROM hocky";
											$result_select=mysqli_query($conn, $sql_select);
											if($result_select->num_rows>0){
												while($row=mysqli_fetch_assoc($result_select)){	
													echo "<option value='$row[HocKy]'>$row[HocKy]</option>";
												}
											}
								?>
							</select>
							<select name="namhoc" id="" style="margin-bottom: 21px;">
								<?php
											$sql_select="SELECT DISTINCT MaNam FROM HocKy";
											$result_select=mysqli_query($conn, $sql_select);
											if($result_select->num_rows>0){
												while($row=mysqli_fetch_assoc($result_select)){	
													echo "<option value='$row[MaNam]'>$row[MaNam]</option>";
												}
											}
								?>
							</select>
							<button type="submit" name="chonlop" class="btn btn-primary" >Chọn</button>
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
									if(isset($_POST["lopmay"])&&isset($_POST["chonlop"])&&isset($_POST["hocky"])&&isset($_POST["namhoc"])){
										$chonlophoc=$_POST["lopmay"];
										$hocky=$_POST["hocky"];
										$namhoc=$_POST["namhoc"];
										$sql_lop="SELECT DISTINCT * FROM hocsinh h, quatrinhhoc q, hocky hk
												WHERE h.MaHocSinh=q.MaHocSinh AND hk.MaHocKy=q.MaHocKy AND q.MaLop='$chonlophoc'
												AND hk.HocKy='$hocky' AND hk.MaNam='$namhoc'";
										$result_lop=mysqli_query($conn, $sql_lop);
										if($result_lop->num_rows>0){
											$count=0;
											while($row=mysqli_fetch_assoc($result_lop)){
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
									$sql_select="SELECT * FROM lop";
									$result_select=mysqli_query($conn, $sql_select);
									if($result_select->num_rows>0){
										$count=0;
										while($row=mysqli_fetch_assoc($result_select)){	
											$count ++ ;
								?>
									<tr>
										<th scope="row"><?php echo "$count"; ?></th>
										<td><?php echo "$row[MaLop]"; ?></td>
										<td><?php echo "$row[TenLop]"; ?></td>
										<td><?php echo "$row[SiSo]"; ?></td> 
										<td><button class="btn btn-primary"> Sửa</button></td>
									</tr>
								<?php
										}
									} 
								?>
								
								
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

<!-- JS boostrap 4 -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
	include ("View/element/footer.php");
?>