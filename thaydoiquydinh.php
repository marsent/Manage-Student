<?php include 'View/element/header.php'; ?>

<div class="container-fluid">
    <span>
        <h1 style=" text-shadow: black; text-align: center;"> THAY ĐỔI QUY ĐỊNH</h1>
    </span>
    <div class="card shadow mb-4">
        <div class="card-body">

            <div id="accordion" class="accordion" data-default="1">

                <div class="card">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                            Thay đổi tuổi tối thiểu, tuổi tối đa
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                        <div class="card-body">
                            <form>
                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="inputMinAge">Tuổi tối
                                            thiểu</label>
                                        <input type="number" class="form-control" id="inputMinAge" placeholder="16" min="1" max="100">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputMaxAge">Tuổi tối đa</label>
                                        <input type="number" class="form-control" id="inputPassword4" placeholder="18" min="1" max="100">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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
                                    <div class="form-group col-md-4">
                                        <label for="inputMaxNumberOfStudent">Sĩ số tối đa</label>
                                        <input type="number" class="form-control" id="MaxNumberOfStudent" placeholder="35" min="0" max="100">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputNumberOfClass">Số lượng lớp trong trường</label>
                                        <input type="number" class="form-control" id="NumberOfClass" placeholder="9" min="0" max="100">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Chọn khối</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="">Chọn...</option>
                                            <option>Khối 10</option>
                                            <option>Khối 11</option>
                                            <option>Khối 12</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row row justify-content-center ">
                                    <div class="table-responsive " style="margin: auto;
   width: 75% !important;">
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
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                            Thay đổi số lượng và tên các môn học
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">

                            <form>
                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="inputMinAge">Số lượng môn học
                                        </label>
                                        <input type="number" class="form-control" id="inputMinAge" placeholder="16" min="1" max="100">
                                    </div>


                                </div>



                                <div class="form-row row justify-content-center ">
                                    <div class="table-responsive " style="margin: auto;
   width: 75% !important;">
                                        <div class="col-auto">
                                            <table class="table table-striped table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                                <caption style="caption-side: top">Danh sách tên các môn học</caption>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">STT</th>

                                                        <th scope="col">Tên Môn Học</th>

                                                        <th scope="col">Thao Tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
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

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseFour" aria-expanded="true">
                            Thay đổi điểm đạt môn/đạt
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                           <form>
                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="inputPassingSocreS">Điểm đạt môn</label>
                                        <input type="number" class="form-control" id="PassingSocreS" placeholder="5" min="1" max="10">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassingScore">Điểm đạt</label>
                                        <input type="number" class="form-control" id="PassingScore" placeholder="5" min="1" max="10">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center" style="margin-top: 20px;">
                <button type="button" id="doiquydinh" class="btn btn-primary btn-lg " style="margin-bottom: 8px;"> Đồng
                    ý </button>
            </div>
        </div>
    </div>
</div>


<?php include 'View/element/footer.php'; ?>