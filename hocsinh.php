<?php include 'View/element/header.php';
    require './controllers/config/databaseController.php';
    require './controllers/returntable.php';
?>
<script></script>
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
                                    <input type="text" name="Name" id="ten" style="margin-left:60px">
                                </td>
                            </tr>
                            <tr>
                                <td>Giới Tính : </td>
                                <td>
                                    <input type="radio" name="Gender" id="gioitinh" value="Nam" style="margin-left:60px">
                                    <label for="male">Nam</label>
                                    <input type="radio" name="Gender" Id="gioitinh" value="Nữ">
                                    <label for="female">Nữ</label>
                                    <!-- <button type="submit" id="hs" class="btn btn-primary " style="margin-bottom: 8px;" >T</button> -->
                                </td>
                            </tr>
                            <tr>
                                <td>Ngày Sinh : </td>
                                <td>
                                    <input type="date" name="Date" id="tuoi" style="margin-left:60px" >
                                </td>
                            </tr>
                            <tr>
                                <td>Địa Chỉ : </td>
                                <td>
                                    <input type="text" name="Address" id="diachi" style="margin-left:60px">
                                </td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>
                                    <input type="email" name="Email" id="Email" style="margin-left:60px" placeholder="">
                                </td>
                            </tr>
                            <tr>
                                <td>Năm học:</td>
                                <td>
									<select style="margin-left:60px;" id="NamHoc" name="namhoc">
                                    <?php
                                    $html="";
                                    foreach($namhoc as $value){
                                    $html.="<option value=".$value['MaNam'].">".$value['NamHoc']."</option>";
                                    }
                                    echo $html;
                                    ?>
                                    </select>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>Học kỳ:</td>
                                <td>
									<select style="margin-left:60px;" id="HocKy" name="hocky">
                                    <option value="Học Kỳ 1">Học kỳ 1</option>
                                    <option value="Học kỳ 2">Học kỳ 2</option>
                                    </select>
                                </td>
                            </tr> -->
							<tr>
                                <td>Lớp:</td>
                                <td>
									<select style="margin-left:60px;" id="Lop" name="Lop">

                                    </select>
                                </td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="submit" id="themhs" class="btn btn-primary " style="margin-bottom: 8px;" >Thêm học sinh mới</button>
                        </div>
                    </div>
                </div>
					
                <div class="card">
                    <div class="card-header">
                        Danh sách các lớp
                    </div>
                    <div class="card-body">
                        <span>
                            Năm học:<select  id="NamHoc2" name="namhoc" onchange="xemDSL()" style="margin-left: 10px;">
                                    <?php
                                    $html="";
                                    $html.='<option value="" >Chọn năm</option>';
                                    foreach($namhoc as $value){
                                    $html.="<option value=".$value['MaNam'].">".$value['NamHoc']."</option>";
                                    }
                                    echo $html;
                                    ?>
                                    </select>
                        </span>
                        <table class="table table-hover" style="margin-top: 15px;">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Mã Lớp</th>
                                    <th scope="col">Tên Lớp</th>
                                    <th scope="col">Sĩ số</th>
                                </tr>
                            </thead>
                            <tbody id="DSL">
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
                        <table class="table">
                                <td>Năm học:</td>
                                <td>
									<select  id="NamHoc3" name="namhoc">
                                    <?php
                                    $html="";
                                    foreach($namhoc as $value){
                                    $html.="<option value=".$value['MaNam'].">".$value['NamHoc']."</option>";
                                    }
                                    echo $html;
                                    ?>
                                    </select>
                                </td>
                                <td>Học kỳ:</td>
                                <td>
									<select id="HocKy3" name="hocky">
                                    <option value="Học Kỳ 1">Học kỳ 1</option>
                                    <option value="Học kỳ 2">Học kỳ 2</option>
                                    </select>
                                </td>
                                <td>Lớp:</td>
                                <td>
                                    <select id="Lop3" name="Lop" onchange="xemDSHS()">
                                    </select>
                                </td>
                        </table>
							<div class="table-wrapper-scroll-y my-custom-scrollbar">
								<div style="margin: 10px auto 20px auto;">
                                </div>
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
									<tbody id="DSHS">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="row" id="In4S" style="margin-top: 25px;">
            </div>
		</div>
<script type="text/javascript" src="js/sendDatahs.js"></script>
<script src="js/themhs.js"></script>
<?php include 'View/element/footer.php'; ?>