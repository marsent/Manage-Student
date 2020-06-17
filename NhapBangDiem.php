<?php include 'View/element/header.php'; ?>
    <div class="container-fluid">
        <span>
            <h1 style=" text-shadow: black; text-align: center;"> Nhập bảng điểm</h1>
        </span>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="chart-area">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="NamHoc">Năm học</label>
                                    </div>
                                    <select class="custom-select" id="iNamHoc">
                                      <option selected>Choose...</option>
                                      <option value="1">2018-2019</option>
                                      <option value="2">2021-2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="HocKy">Học kỳ</label>
                                    </div>
                                    <select class="custom-select" id="HocKy">
                                      <option selected>Choose...</option>
                                      <option value="1">Học kỳ 1</option>
                                      <option value="2">Học kỳ 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="Lop">Lớp</label>
                                    </div>
                                    <select class="custom-select" id="Lop">
                                      <option selected>Choose...</option>
                                      <option value="1">10A1</option>
                                      <option value="2">10A1</option>
                                      <option value="3">10A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="MonHoc">Môn học</label>
                                    </div>
                                    <select class="custom-select" id="MonHoc">
                                      <option selected>Choose...</option>
                                      <option value="1">Tin học</option>
                                      <option value="2">Tin học</option>
                                      <option value="3">Tin học</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="15col">Số cột 15 phút</label>
                                    </div>
                                    <input class="form-control" type="text" name="col15p" placeholder="1">                               </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="1Tcol">Số cột 1 tiết</label>
                                    </div>
                                    <input class="form-control" type="text" name="col15p" placeholder="1">
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end"><button type="submit" class="btn btn-primary">Tạo bảng điểm</button> </div>
                        </div>
                        <br>
                        <!-- bảng nhập điểm -->
                        <div>
                            <table class="table table-striped table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Mã học sinh</th>
                                        <th scope="col">Họ tên</th>
                                        <th scope="col">Điểm 15'</th>
                                        <th scope="col">Điểm 1 tiết</th>
                                        <th scope="col">Điểm trung bình</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>HS01</td>
                                        <td>Hỷ Hoa Phưn</td>
                                        <td contenteditable></td>
                                        <td contenteditable></td>
                                        <td ></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>HS01</td>
                                        <td>Hỷ Hoa Phưn</td>
                                        <td contenteditable></td>
                                        <td contenteditable></td>
                                        <td ></td>
                                    </tr><tr>
                                        <th scope="row">1</th>
                                        <td>HS01</td>
                                        <td>Hỷ Hoa Phưn</td>
                                        <td contenteditable></td>
                                        <td contenteditable></td>
                                        <td ></td>
                                    </tr><tr>
                                        <th scope="row">1</th>
                                        <td>HS01</td>
                                        <td>Hỷ Hoa Phưn</td>
                                        <td contenteditable></td>
                                        <td contenteditable></td>
                                        <td ></td>
                                    </tr><tr>
                                        <th scope="row">1</th>
                                        <td>HS01</td>
                                        <td>Hỷ Hoa Phưn</td>
                                        <td contenteditable></td>
                                        <td contenteditable></td>
                                        <td ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-primary" style=" float:right; ">Cập nhật bảng điểm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php include 'View/element/footer.php'; ?>
