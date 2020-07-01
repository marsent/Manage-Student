<?php include 'View/element/header.php';

?>
<div class="container-fluid">
    <span>
        <h1 style=" text-shadow: black; text-align: center;"> Tạo bảng điểm</h1>
    </span>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="NamHoc">Năm học</label>
                        </div>
                        <select class="custom-select" id="NamHoc">

                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="HocKy">Học kỳ</label>
                        </div>
                        <select class="custom-select" id="HocKy">
                            <option selected value="Học Kỳ 1">Học kỳ 1</option>
                            <option value="Học kỳ 2">Học kỳ 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="Lop">Lớp</label>
                        </div>
                        <select class="custom-select" id="Lop">

                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="MonHoc">Môn học</label>
                        </div>
                        <select class="custom-select" id="MonHoc">

                        </select>
                    </div>
                </div>
                <!-- <div class="col-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="15col">Số cột 15 phút</label>
                        </div>
                    <select class="custom-select" id="15Pcol" name="15Pcol">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option selected value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="col-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="1Tcol">Số cột 1 tiết</label>
                        </div>
                        <select class="custom-select" id="1Tcol" name="1Tcol">
                            <option value="1">1</option>
                            <option selected value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                </div> -->
                <div class="col d-flex justify-content-center"><button id="taobangdiem" type="submit" class="btn btn-primary">Tạo bảng điểm</button> </div>
            </div>
            <!-- bảng nhập điểm -->
            <div class="table table-responsive"></div>
            <table class="table table-striped table-bordered" id="Table" width="100%" cellspacing="0">


                <thead class="thead-light" style="text-align: center;">
                    <tr id="labelTable">

                    </tr>
                </thead>

                <tbody id="tableData" style="text-align: center;">

                </tbody>

            </table>
            <div class="col d-flex justify-content-center" id="submit-btn">
                <button type="submit" id="capnhat" class="btn btn-primary" style=" float:right; ">Cập nhật bảng điểm</button>
            </div>
        </div>
    </div>
</div>

<script src="js/taobangdiemmon.js"></script>

<?php include 'View/element/footer.php'; ?>
