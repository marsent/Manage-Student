<?php include 'View/element/header.php';
require './controllers/config/databaseController.php';
require './controllers/returntable.php'
?>

<div class="container-fluid">
    <span>
        <h1 style=" text-shadow: black; text-align: center;"> THAY ĐỔI QUY ĐỊNH</h1>
    </span>
    <div class="card shadow mb-4">
        <div class="card-body">

            <div id="accordion" class="accordion" data-default="1">
                <!-- tuổi -->
                <div class="card">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                            Thay đổi tuổi tối thiểu, tuổi tối đa
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                            <form>
                                <div class="row d-flex justify-content-center ">

                                    <div class="form-group col-md-4" id="minAge">

                                    </div>
                                    <div class="form-group col-md-4" id="maxAge">

                                    </div>

                                </div>
                                <div class=" d-flex justify-content-center" style="margin-top: 20px;">
                                    <button type="button" class="btn btn-primary   " id="updateAge" style="margin-bottom: 8px;"> Cập nhật tuổi</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <!-- sỉ số -->
            <div class="card">
                <div class="card-header">
                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                        Thay đổi sĩ số tối đa của các lớp, thay đổi số lượng và tên các lớp trong trường
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                    <div class="card-body">
                        <form>

                            <div class="form-row">
                                <div class="form-group col-md-4" id="SSTD">
                                    <!-- <label for="inputMaxNumberOfStudent">Sĩ số tối đa</label>
                                    <input type="number" class="form-control" id="MaxNumberOfStudent" value="35" min="0" max="100"> -->
                                </div>
                                <div class="form-group col-md-4" id="nCL">
                                    <label for="inputNumberOfClass">Số lượng lớp trong trường</label>
                                    <input type="number" class="form-control" id="NumberOfClass" value="10" min="0" max="100">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Chọn khối</label>
                                    <select id="inputState" class="form-control">
                                        <option selected value="SLTDK10">Khối 10</option>
                                        <option value="SLTDK11">Khối 11</option>
                                        <option value="SLTDK12">Khối 12</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="form-row row justify-content-center ">
                                <div class="table-responsive " style="margin: auto; width: 75% !important;">
                                    <div class="col-auto">
                                        <table class="table table-striped table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                            <caption style="caption-side: top">Danh sách tên lớp theo khối</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">STT</th>

                                                    <th scope="col">Tên Lớp</th>

                                                    <th scope="col">Thao Tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>

                                                    <td>10A1</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>


                                                <tr>
                                                    <th scope="row">2</th>

                                                    <td>10A2</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>

                                                    <td>10A3</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>

                                                    <td>10A4</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>

                                                    <td>10A5</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>

                                                <tr>
                                                    <th scope="row">6</th>

                                                    <td>10A6</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> -->
                            <div class="d-flex justify-content-center col" style="margin-top: 20px;">
                                <button type="button" class="btn btn-primary   " id="updatenumclass" style="margin-bottom: 8px;"> Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- môn học -->
            <div class="card">
                <div class="card-header">
                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                        Thay đổi số lượng và tên các môn học
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                    <div class="card-body">

                        <form>
                            <div class="form-row" style="margin: auto;width: 75% !important;">

                                <div class="form-group col-md-4">
                                    <label for="inputMinAge">Số lượng môn học
                                    </label>
                                    <input readonly type="number" class="form-control" id="inputMinAge" placeholder="<?php echo count($monhoc) ?>" min="1" max="100">
                                </div>


                            </div>



                            <div class="form-row row justify-content-center ">
                                <div class="table-responsive " style="margin: auto;width: 75% !important;">
                                    <div class="col-auto">
                                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                            <caption style="caption-side: top">Danh sách tên các môn học</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Mã Môn Học</th>
                                                    <th scope="col">Tên Môn Học</th>
                                                    <th scope="col">Thao Tác</th>
                                                </tr>
                                            </thead>
                                            <tbody id="listSubject">
                                                <!-- <tr>
                                                    <th scope="row">1</th>
                                                    <td>Toán</td>
                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>

                                                    <td>Vật lí</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>

                                                    <td>Hóa học</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>

                                                    <td>Văn học</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>

                                                    <td>Lịch sử</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr>

                                                <tr>
                                                    <th scope="row">6</th>

                                                    <td>Địa lí</td>

                                                    <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Button trigger modal -->
                            <div class="d-flex justify-content-center col" style="margin-top: 20px;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Thêm môn học
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Thông tin môn học</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td>Mã môn học:</td>
                                                    <td>
                                                        <input id="txtmamonhocadd" type="text" style="margin-left:60px" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tên môn học: </td>
                                                    <td>
                                                        <input id="txttenmonhocadd" type="text" style="margin-left:60px" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hệ Số: </td>
                                                    <td>
                                                        <input id="numhesoadd" type="number" value="1" style="margin-left:60px" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bang: </td>
                                                    <td>
                                                        <select id="cmbbangadd" style="margin-left:60px">
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Khối: </td>
                                                    <td>
                                                        <select id="cmbkhoiadd" style="margin-left:60px">
                                                            <option value="Khối 10">Khối 10</option>
                                                            <option value="Khối 11">Khối 11</option>
                                                            <option value="Khối 12">Khối 12</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Năm: </td>
                                                    <td>
                                                        <select id="cmbnamadd" style="margin-left:60px">
                                                        </select>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                            <button type="button" class="btn btn-primary" id="addSubject">Thêm môn học</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- điểm đạt -->
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseFour" aria-expanded="true">
                        Thay đổi điểm đạt môn/đạt
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                    <div class="card-body">
                        <form>
                            <div class="form-row d-flex justify-content-center">

                                <div class="form-group col-md-4" id="diemdatmon">
                                    <!-- <label for="inputPassingSocreS">Điểm đạt môn</label>
                                    <input type="number" class="form-control" placeholder="5" min="1" max="10"> -->
                                </div>
                                <div class="form-group col-md-4" id="diemdat">
                                    <!-- <label for="inputPassingScore">Điểm đạt</label>
                                    <input type="number" class="form-control" id="PassingScore" placeholder="5" min="1" max="10"> -->
                                </div>

                            </div>
                            <div class="d-flex justify-content-center col" style="margin-top: 20px;">
                                <button type="button" class="btn btn-primary   " id="updateScore" style="margin-bottom: 8px;"> Cập nhật điểm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</div>
<script src=js/thaydoiquydinh.js></script>
<?php include 'View/element/footer.php'; ?>