<?php include 'View/element/header.php'; ?>
		<div class="" style="padding-bottom: 30px;">
			<h1 style="text-align: center">THÔNG TIN HỌC SINH</h1>
			<div class="row">
				<div class="col-6">
					<div class="card" style="margin-bottom:16px">
						<div class="card-header">
							Thông tin học sinh
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<td>Mã Học Sinh : </td>
									<td>
										<input type="text" style="margin-left:60px">
									</td>
								</tr>
								<tr>
									<td>Họ Và Tên : </td>
									<td>
										<input type="text" style="margin-left:60px">
									</td>
								</tr>
								<tr>
									<td>Giới Tính : </td>
									<td>
										<input type="radio" name="gender" value="Nam" checked="checked" style="margin-left:60px">
										<label for="male">Nam</label>
										<input type="radio" name="gender" value="Nữ">
										<label for="female">Nữ</label>
									</td>
								</tr>
								<tr>
									<td>Ngày Sinh : </td>
									<td>
										<input type="date" style="margin-left:60px">
									</td>
								</tr>
								<tr>
									<td>Địa Chỉ : </td>
									<td>
										<input type="text" style="margin-left:60px">
									</td>
								</tr>
								<tr>
									<td>Email : </td>
									<td>
										<input type="email" style="margin-left:60px">
									</td>
								</tr>

							</table>
							<div class="d-flex justify-content-center">
							<button type="button" class="btn btn-primary d-flex justify-content-center" style="margin-bottom: 8px;">Thêm học sinh mới</button>
						</div>
						</div>
					</div>
					
					<div class="card">
						<div class="card-header">
							Danh sách các lớp
						</div>
						<div class="card-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">STT</th>
										<th scope="col">Mã Lớp</th>
										<th scope="col">Tên Lớp</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>K10</td>
										<td>10A1</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>K11</td>
										<td>10A2</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>K12</td>
										<td>10A3</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-6">
					<div class="card">
						<div class="card-header">
							Danh sách học sinh theo lớp
						</div>
						<div class="card-body">
							<div class="table-wrapper-scroll-y my-custom-scrollbar">
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
											<th scope="col">Mã Học Sinh</th>
											<th scope="col">Tên Học Sinh</th>
											<th scope="col">Điểm Trung Bình</th>
											<th scope="col">Thao Tác</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>L10A1</td>
											<td>Hà Vương Quốc</td>
											<td>10</td>
											<td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
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
	</div>
<?php include 'View/element/footer.php'; ?>
