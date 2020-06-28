<?php include 'View/element/header.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwsome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        function checkbox(Id) {
            var checkbox = document.getElementsByName(Id);
            for (var i = 0; i < checkbox.length; i++) {
                if (checkbox[i].checked === true) {
                    return checkbox[i].value;
                }
            }
        }

        function themhs() {
            const Name = document.getElementById("Name").value;
            const MSHS = document.getElementById("MSHS").value;
            const Gender = checkbox("Gender");
            const Date = document.getElementById("Date").value;
            const Address = document.getElementById("Address").value;
            const Email = document.getElementById("Email").value;
			const Class = checkbox("lop");
			const error = {
                MSHS: "Chưa nhập MSHS",
                Name: "Chưa nhập tên",
                Date: "Chưa nhập ngày tháng năm sinh",
                Address: "Chưa nhập địa chỉ",
                Email: "Chưa nhập Email"
            };
			if(MSHS== '') {
				alert(error.MSHS);
                return;
			}
			if(Name=='') {
				alert(error.Name);
                return;
            }			
			if(Date == '') {
                alert(error.Date);
                return;
			}
			if(Address == '') {
                alert(error.Address);
                return;
			}
			if(Email == '') {
                alert(error.Email);
                return;
			}
            const data = {
                MSHS: MSHS,
                Name: Name,
                Gender: Gender,
                Date: Date,
                Address: Address,
                Email: Email,
				Class: Class
            };
            $.ajax({
                url: "controllers/AddStudents.php",
                type: "post",
				method:"post",
				datatype: "json",
                data: data,
				success: function(report)
				{	
					alert(report);
				}
            });			
        }
		window.onload = function() {
		$.ajax({
        type: "POST",
        url: "controllers/StudentsList.php",
        dataType: "json",
        success: function(result) {
			
			var html = "";
			var i=1;
            for (value of result) {
                    html += '<tr>';
					html += '<th scope="row">';
					html += i++;
					html += '</th>';
                    html += `<td id="Mahs">${value.MaHs}</td>`;
                    html += `<td>${value.TenHs}</td>`;
                    html += `<td> <button class="btn btn-primary" onclick="XemHs(this.id)" id="${value.MaHs}">Xem thêm</button>`;
					html += `<button class="btn btn-primary" onclick="XoaHs(this.id)" id="${value.MaHs}"> Xóa</button> </td>`;
                    html += '</tr>'
                }
                $('#StudentsList').html(html);
		}
		});
		$.ajax({
        type: "POST",
        url: "controllers/Classlist.php",
        dataType: "json",
        success: function(result) {		
			console.log(result);
			var html = "";
			var i=1;
            for (value of result) {
                    html += '<tr>';
					html += '<th scope="row">';
					html += i++;
					html += '</th>';
                    html += `<td>${value.MaLop}</td>`;
                    html += `<td>${value.TenLop}</td>`;
                    html += '</tr>'
                }
                $('#ClassList').html(html);
		}
		});
		}
		function XoaHs(id)
		{
			$(`#${id}`).closest('tr').addClass('removeRow');
        	$('.removeRow').fadeOut(1000);
        	$.ajax({
            url: 'controllers/DeleteStudent.php',
            type: 'POST',
            dataType: 'json',
            data: { id: id },
        	});
		}
		function XemHs(id)
		{
			myWindow = window.open("controllers/In4Student.php");
		}
	// 	$.ajax({
    //     type: "POST",
    //     url: "controllers/lop.php",
    //     dataType: "json",
    //     success: function(response) {
    //         html = "";
    //         for (value of response) {
    //             if (value == 0) {
    //                 html += `<option selected value="${value.MaLop}">${value.TenLop}</option>`;
    //             } else {
    //                 html += `<option  value="${value.MaLop}">${value.TenLop}</option>`;
    //             }
    //         }
    //         $('#Lop').html(html);
    //     }
    // });
    </script>
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
                                    <input type="text" name="MSHS" id="MSHS" style="margin-left:60px">
                                </td>
                            </tr>
                            <tr>
                                <td>Họ Và Tên : </td>
                                <td>
                                    <input type="text" name="Name" id="Name" style="margin-left:60px">
                                </td>
                            </tr>
                            <tr>
                                <td>Giới Tính : </td>
                                <td>
                                    <input type="radio" name="Gender" id="Gender" value="Nam" checked="checked" style="margin-left:60px">
                                    <label for="male">Nam</label>
                                    <input type="radio" name="Gender" Id="Gender" value="Nữ">
                                    <label for="female">Nữ</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Ngày Sinh : </td>
                                <td>
                                    <input type="date" name="Date" id="Date" style="margin-left:60px">
                                </td>
                            </tr>
                            <tr>
                                <td>Địa Chỉ : </td>
                                <td>
                                    <input type="text" name="Address" id="Address" style="margin-left:60px">
                                </td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>
                                    <input type="email" name="Email" id="Email" style="margin-left:60px">
                                </td>
                            </tr>
							<tr>
                                <td>Lớp: </td>
                                <td>
                                    <!-- <input type="text" name="lop" id="lop" style="margin-left:60px"> -->
									<select style="margin-left:60px;" id="Lop"></select>
                                </td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="submit" id="addHS" class="btn btn-primary " style="margin-bottom: 8px;" onclick="themhs()">Thêm học sinh mới</button>
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
								<tbody id="ClassList">
									<!-- <tr>
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
									</tr> -->
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
											<!-- <th scope="col">Điểm Trung Bình</th> -->
											<th scope="col">Thao Tác</th>
										</tr>
									</thead>
									<tbody id="StudentsList">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</>
	</div>
	<div id="error">
		
	</div>
<script type="text/javascript" src="js/sendDatahs.js"></script>
<?php include 'View/element/footer.php'; ?>