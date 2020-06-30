<?php include 'View/element/header.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwsome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        var helpers =
        {
            buildDropdown: function(result, dropdown, emptyMessage, idname)
            {
                // Remove current options
                dropdown.html('');
                // Add the empty option with the empty message
                dropdown.append('<option value="">' + emptyMessage + '</option>');
                // Check result isnt empty
                if(result != '')
                {
                    // Loop through each of the results and append the option to the dropdown
                    $.each(result, function(k, v) {
                        dropdown.append('<option value="' + v.id + '" id="'+ idname +'">' + v.name + '</option>');
                    });
                }
            }
        }
            function checkbox(Id) {
            var checkbox = document.getElementsByName(Id);
            for (var i = 0; i < checkbox.length; i++) {
                if (checkbox[i].checked === true) {
                    return checkbox[i].value;
                }
            }
        }
        function xemdslop()
        {
            const Class= document.getElementById("xemlop").value;
            const data = {
				Class: Class,
            };
            $.ajax({
            type: "POST",
            url: "controllers/StudentsList.php",
            dataType: "json",
            data: data,
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
                    html += `<td>${value.Diem}</td>`;
                    html += `<td> <button class="btn btn-primary" onclick="XemHs(this.id)" id="${value.MaHs}">Xem thêm</button>`;
					// html += `<button class="btn btn-primary" onclick="XoaHs(this.id)" id="${value.MaHs}"> Xóa</button> </td>`;
                    html += '</tr>'
                }
                $('#StudentsList').html(html);
		}
		});
        }

        function themhs() {
            const Name = document.getElementById("Name").value;
            // const MSHS = document.getElementById("MSHS").value;
            const Gender = checkbox("Gender");
            const Date = document.getElementById("Date").value;
            const Address = document.getElementById("Address").value;
            const Email = document.getElementById("Email").value;
			const Class= document.getElementById("themlop").value;

			const error = {
                // MSHS: "Chưa nhập MSHS",
                Name: "Chưa nhập tên",
                Date: "Chưa nhập ngày tháng năm sinh",
                Address: "Chưa nhập địa chỉ",
                Email: "Chưa nhập Email",
                Class: "Chưa chọn lớp"
            };
			// if(MSHS== '') {
			// 	alert(error.MSHS);
            //     return;
			// }
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
            if(Class == '') {
                alert(error.Class);
                return;
			}
            const data = {
                // MSHS: MSHS,
                Name: Name,
                Gender: Gender,
                Date: Date,
                Address: Address,
                Email: Email,
				Class: Class,
            };
            //alert(data.Class);
            $.ajax({
                url: "controllers/AddStudents.php",
                type: "post",
				method:"post",
				datatype: "json",
                data: data,
				success: function(report)
				{	
                    // console.log(report);
					// if(report == 'true')
                    // {
                    //     alert("Thêm học sinh thành công");
                    // }
                    // else
                    // {
                    //     alert("Không thể thêm xin vui lòng kiểm tra lại thông tin học sinh");
                    // }
				}
            });			
        }
        function suahs(id) {
            //const Name = document.getElementById("Ten").value;
            // const MSHS = document.getElementById("MSHS").value;
            // const Gender = checkbox("GioiTinh");
            // const Date = document.getElementById("NgaySinh").value;
            const Address = document.getElementById("DiaChi").value;
            const Email = document.getElementById("Email").value;

            const data = {
                MSHS: id,
                // Name: Name,
                // Gender: Gender,
                // Date: Date,
                Address: Address,
                Email: Email,
            };
            //alert(data.Class);
            $.ajax({
                url: "controllers/UpdateStudent.php",
                type: "post",
				method:"post",
				datatype: "json",
                data: data,
				success: function(report)
				{	
                
				}
            });			
        }
		window.onload = function() {
		$.ajax({
        type: "POST",
        url: "controllers/Classlist.php",
        dataType: "json",
<<<<<<< HEAD
        success: function(result) {		
			var html = "";
            for (value of result) {
                    if (value == 0) {
                        html += `<option selected value="${value.MaLop}">${value.TenLop}</option>`;
                    } else {
                        html += `<option  value="${value.MaLop}">${value.TenLop}</option>`;
                    }
                }
                console.log(html)
                $('#Lop').html(html);
		}
=======
        success: function(result) {
            helpers.buildDropdown(
                    result,
                    $('#xemlop'),
                    'Select an option',
                    'xemlop'
                );
            helpers.buildDropdown(
                    result,
                    $('#themlop'),
                    'Select an option',
                    'themlop'
                );
            var html = "";
            var i=1;
            for (value of result) {
                html += '<tr>';
                html += '<th scope="row">';
                html += i++;
                html += '</th>';
                html += `<td>${value.id}</td>`;
                html += `<td>${value.name}</td>`;
                html += `<td>${value.value}</td>`;
                html += '</tr>'
            }
            $('#ClassList').html(html);
            }
>>>>>>> b92396f32b5f24be7fdd2eef14476b07fc0fc2ff
		});
		}
		function XemHs(id)
		{
			// $(`#${id}`).closest('tr').addClass('removeRow');
        	// $('.removeRow').fadeOut(1000);
            
            // const MS = document.getElementById(id).value;
            // alert(MS);
        	$.ajax({
            url: 'controllers/In4Student.php',
            type: 'POST',
            dataType: 'json',
            data: { id: id },
            success: function(result) {
                var html='';
                html+='<div class="col-4"> <div class="card"> <div class="card-header"> Thông tin học sinh </div>';
                html+='<div class="card-body"> <table class="table">';
                html+='<tr> <td>Mã học sinh : </td> <td> <b>';
                html+= result[0].MaHs;
                html+='</b> </td> </tr><tr> <td>Họ Và Tên : </td> <td>';
                html+= result[0].TenHs;
                html+= '</td> </tr><tr> <td> Gioi tinh : </td> <td>';
                html+= result[0].GT;
                html+= '</td> </tr><tr> <td> Ngày Sinh : </td> <td>';
                html+= result[0].NS;
                html+= '</td> </tr><tr> <td> Địa chỉ : </td> <td> <input type="text" name="DiaChi" id="DiaChi" placeholder="';
                html+= result[0].DC;
                html+= '"></td> </tr><tr> <td> Email : </td> <td> <input type="email" name="Email" id="Email" placeholder="';
                html+= result[0].Email;
                html+= '"> </td> </tr> </table>';
                html+='<div class="d-flex justify-content-center"><button type="submit" id="UpdateHS" class="btn btn-primary " style="margin-bottom: 8px;" onclick="suahs(';
                html+= result[0].MaHs;
                html+=')">Cập nhật thông tin</button></div>';
                html+='</div> </div> </div> <d class="col-8"><div class="card"><div class="card-header"> Quá trình học </div><div class="card-body"> <table class="table">';
                html+='<thead><tr><th scope="col">STT</th><th scope="col">Năm học</th><th scope="col">Học kỳ</th><th scope="col">Lớp</th><th scope="col"> Điểm Trung Bình</th> </tr></thead><tbody id="QTH"></tbody></table></div></div></div>';                $('#In4S').html(html);
                var html = "";
			    var i=1;
                for (value of result) {
                    html += '<tr>';
					html += '<th scope="row">';
					html += i++;
					html += '</th>';
                    html += `<td id="Mahs">${value.NH}</td>`;
                    html += `<td>${value.HK}</td>`;
                    html += `<td>${value.Lop}</td>`;
                    html += `<td>${value.Diem}</td>`;
                    html += '</tr>'
                }
                $('#QTH').html(html);
                // console.log(result);
            }
        	});
		}
		function xem()
		{
			//var host= document.querySelector('#xemlop');
            const Class= document.getElementById("xemlop").value;
            alert(Class);
		}
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
                            <!-- <tr>
                                <td>Mã Học Sinh : </td>
                                <td>
                                    <input type="text" name="MSHS" id="MSHS" style="margin-left:60px">
                                </td>
                            </tr> -->
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
                                    <input type="date" name="Date" id="Date" style="margin-left:60px" >
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
                                    <input type="email" name="Email" id="Email" style="margin-left:60px" placeholder="...@gmail.com">
                                </td>
                            </tr>
							<tr>
                                <td>Lớp:</td>
                                <td>
									<select style="margin-left:60px;" id="themlop" name="themlop">
                                    </select>
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
                                    <th scope="col">Sĩ số</th>
                                </tr>
                            </thead>
                            <tbody id="ClassList">
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
								<select name="xemlop" id="xemlop" style="margin-bottom: 21px;" onchange="xemdslop()">
								</select>
                                <!-- <button onclick="xemdslop()" class="btn btn-primary " style="margin: 0px auto;"> Xem </button> -->
								<table class ="table table-bordered table-striped mb-0" >
									<thead>
										<tr>
											<th scope="col">STT</th>
											<th scope="col">Mã Học Sinh</th>
											<th scope="col">Tên Học Sinh</th>
											<th scope="col">Điểm Trung Bình</th>
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
            <div class="row" id="In4S">
            </div>
		</div>
<script type="text/javascript" src="js/sendDatahs.js"></script>
<?php include 'View/element/footer.php'; ?>