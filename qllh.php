<?php
include("View/element/header.php");
?>
<div class="container-fluid">
	<h1 style="text-align: center">THÔNG TIN LỚP HỌC</h1>
	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-header">
					Thông tin lớp học
				</div>
				<form action="#" method="post">
					<div class="card-body">
						<table class="table">
							<tr>
								<td>Mã khối: </td>
								<td>
									<input type="text" style="margin-left:60px">
								</td>
							</tr>
							<tr>
								<td>Mã lớp học: </td>
								<td>
									<input type="text" style="margin-left:60px">
								</td>
							</tr>
							<tr>
								<td>Tên lớp học: </td>
								<td>
									<input type="text" style="margin-left:60px">
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
						</table>
						<div style="text-align:center">
						<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Thêm lớp mới</button>
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
						<select name="" id="" style="margin-bottom: 21px;">
							<option value="">10A1</option>
							<option value="">10A2</option>
							<option value="">10A3</option>
							<option value="">11A1</option>
							<option value="">11A2</option>
							<option value="">11A3</option>
							<option value="">12A1</option>
							<option value="">12A2</option>
							<option value="">12A3</option>
						</select>
						<table class="table table-bordered table-striped mb-0">
							<thead>
								<tr>
									<th scope="col">STT</th>
									<th scope="col">Mã học sinh</th>
									<th scope="col">Họ tên</th>
									<th scope="col">Giới tính</th>
									<th scope="col">Năm sinh</th>
									<th scope="col">Địa chỉ</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>HS01</td>
									<td>Đào Huỳnh Minh Thuận</td>
									<td>Nam</td>
									<td>2000</td>
									<td>KTX khu B</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>HS01</td>
									<td>Đào Huỳnh Minh Thuận</td>
									<td>Nam</td>
									<td>2000</td>
									<td>KTX khu B</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>HS01</td>
									<td>Đào Huỳnh Minh Thuận</td>
									<td>Nam</td>
									<td>2000</td>
									<td>KTX khu B</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>HS01</td>
									<td>Đào Huỳnh Minh Thuận</td>
									<td>Nam</td>
									<td>2000</td>
									<td>KTX khu B</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>HS01</td>
									<td>Đào Huỳnh Minh Thuận</td>
									<td>Nam</td>
									<td>2000</td>
									<td>KTX khu B</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>HS01</td>
									<td>Đào Huỳnh Minh Thuận</td>
									<td>Nam</td>
									<td>2000</td>
									<td>KTX khu B</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>HS01</td>
									<td>Đào Huỳnh Minh Thuận</td>
									<td>Nam</td>
									<td>2000</td>
									<td>KTX khu B</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>HS01</td>
									<td>Đào Huỳnh Minh Thuận</td>
									<td>Nam</td>
									<td>2000</td>
									<td>KTX khu B</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>HS01</td>
									<td>Đào Huỳnh Minh Thuận</td>
									<td>Nam</td>
									<td>2000</td>
									<td>KTX khu B</td>
								</tr>

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
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>L10A1</td>
									<td>10A1</td>
									<td>30</td>
									<td><button class="btn btn-primary"> Sửa</button></td>
								</tr>
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