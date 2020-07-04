<?php include 'View/element/header.php';
    require './controllers/config/databaseController.php';
    require './controllers/returntable.php';
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
                            
                            <?php
                                $html="";
                            foreach($namhoc as $value){
                                $html.="<option value=".$value['MaNam'].">".$value['NamHoc']."</option>";
                            }
                                echo $html;
                            ?>
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
                        <?php
                                $html="";
                            foreach($monhoc as $value){
                                $html.="<option value=".$value['MaMonHoc'].">".$value['TenMonHoc']."</option>";
                            }
                                echo $html;
                            ?>
                        </select>
                    </div>
                </div>
              
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
