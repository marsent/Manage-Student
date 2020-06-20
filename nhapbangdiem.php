<?php include 'View/element/header.php';

?>
<div class="container-fluid">
    <span>
        <h1 style=" text-shadow: black; text-align: center;"> Nhập bảng điểm</h1>
    </span>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="NamHoc">Năm học</label>
                        </div>
                        <select class="custom-select" id="NamHoc">

                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="HocKy">Học kỳ</label>
                        </div>
                        <select class="custom-select" id="HocKy">
                            <option selected value="1">Học kỳ 1</option>
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

                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="MonHoc">Môn học</label>
                        </div>
                        <select class="custom-select" id="MonHoc">

                        </select>
                    </div>
                </div>
                <div class="col-4">
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
                </div>
                <div class="col-4">
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
            <div class="col d-flex justify-content-center">
                <button type="submit" id="capnhat" class="btn btn-primary" style=" float:right; ">Cập nhật bảng điểm</button>
            </div>
        </div>
    </div>
</div>

<script>
    /*dropdown môn */
    $.ajax({
        type: "POST",
        url: "controllers/monhoc.php",
        dataType: "json",
        success: function(response) {
            html = "";
            for (value of response) {
                if (value == 0) {
                    html += `<option selected value="${value.MaMonHoc}">${value.TenMonHoc}</option>`;
                } else {
                    html += `<option  value="${value.MaMonHoc}">${value.TenMonHoc}</option>`;
                }
            }
            $('#MonHoc').html(html);
        }
    });
    /** dropdown năm */
    $.ajax({
        type: "POST",
        url: "controllers/namhoc.php",
        dataType: "json",
        success: function(response) {
            html = "";
            for (value of response) {
                if (value.MaNam == 'N1920') {
                    html += `<option selected value="${value.MaNam}">${value.NamHoc}</option>`;
                } else {
                    html += `<option  value="${value.MaNam}">${value.NamHoc}</option>`;
                }
            }
            $('#NamHoc').html(html);
        }
    });
    /** dropdown lớp*/
    $.ajax({
        type: "POST",
        url: "controllers/lop.php",
        dataType: "json",
        success: function(response) {
            html = "";
            for (value of response) {
                if (value == 0) {
                    html += `<option selected value="${value.MaLop}">${value.TenLop}</option>`;
                } else {
                    html += `<option  value="${value.MaLop}">${value.TenLop}</option>`;
                }
            }
            $('#Lop').html(html);
        }
    });
    /*tạo head table */
    $(document).ready(function() {
        var th = '<th scope="col">STT</th>';
        th += '<th scope = "col" > Mã học sinh </th>';
        th += '<th scope = "col" > Họ tên </th>';
        for (var i = 0; i < $('select[name=15Pcol]').val(); i++) {
            th += '<th scope="col">Điểm 15p</th>';
        }
        for (var i = 0; i < $('select[name=1Tcol]').val(); i++) {
            th += '<th scope="col">Điểm 1T</th>';
        }
        th += ' <th scope="col">Điểm trung bình</th>';
        $('#labelTable').html(th);
        /**in danh sách học sinh */
        $.ajax({
            type: "POST",
            url: "controllers/returnhocsinh.php",
            dataType: "json",
            success: function(response) {
                var a = 0;
                var td = "";
                for (value of response) {
                    td += '<tr role="row">';
                    td += `<th scope="row">${++a}</th>`;
                    td += `<td id="hs${a}">${value.MaHocSinh}</td>`
                    td += `<td>${value.HoTen}</td>`
                    for (var i = 0; i < $('select[name=15Pcol]').val(); i++) {
                        td += `<td contenteditable  id="${value.MaHocSinh}15p${i+1}"></td>`
                    }
                    for (var i = 0; i < $('select[name=1Tcol]').val(); i++) {
                        td += `<td contenteditable id="${value.MaHocSinh}1t${i+1}"></td>`
                    }
                    td += `<td></td>;`
                    td += '</tr>';
                }
                $('#tableData').html(td);
            }
        });
    })

    /**tạo bảng điểm */
    $('#taobangdiem').click(function() {
        var th = '<th scope="col">STT</th>';
        th += '<th scope = "col" > Mã học sinh </th>';
        th += '<th scope = "col" > Họ tên </th>';
        for (var i = 0; i < $('select[name=15Pcol]').val(); i++) {
            th += '<th scope="col">Điểm 15p</th>';
        }
        for (var i = 0; i < $('select[name=1Tcol]').val(); i++) {
            th += '<th scope="col">Điểm 1T</th>';
        }
        th += ' <th scope="col">Điểm trung bình</th>';
        $('#labelTable').html(th);
        /*
        var td = '<tr>';
        td += `<th scope="row">${++i}</th>`;
        td += '<td>HS01</td>'
        td += '<td>Hỷ Hoa Phưn</td>'
        for (var i = 0; i < $('select[name=15Pcol]').val(); i++) {
            td += '<td contenteditable></td>'
        }
        for (var i = 0; i < $('select[name=1Tcol]').val(); i++) {
            td += '<td contenteditable></td>'
        }
        td += `<td></td>;`
        td += '</tr>';
        for (var i = 0; i < 10; i++) td += td;
        $('#tableData').html(td);
        */
        $.ajax({
            type: "POST",
            url: "controllers/returnhocsinh.php",
            dataType: "json",
            success: function(response) {
                var a = 0;
                var td = "";
                for (value of response) {
                    td += '<tr role="row">';
                    td += `<th scope="row">${a++}</th>`;
                    td += `<td>${value.MaHocSinh}</td>`
                    td += `<td>${value.HoTen}</td>`
                    for (var i = 0; i < $('select[name=15Pcol]').val(); i++) {
                        td += '<td contenteditable></td>'
                    }
                    for (var i = 0; i < $('select[name=1Tcol]').val(); i++) {
                        td += '<td contenteditable></td>'
                    }
                    td += `<td></td>;`
                    td += '</tr>';
                }
                $('#tableData').html(td);
            }
        });
    });
    /**cập nhật điểm */
    $('#capnhat').click(function() {
                var rowLength = document.getElementById('Table').rows.length;
                for (i = 1; i <= rowLength; i++) {
                    var mshs = $(`#hs${i}`).text();
                    var point15p = new Object();
                    for (j = 0; j < $('select[name=15Pcol]').val(); j++) {
                        var kt15p = $(`#${mshs}15p${j+1}`).text();
                        if(kt15p=="")kt15p=0;
                        //console.log(mshs+` kt 15p lan ${j+1}:`+kt15p);
                        var mbd=$('#MonHoc').val()+mshs;
                        console.log(mbd);
                        $.ajax({
                                type: "POST",
                                url: "controllers/nhapdiem.php",
                                data: {
                                    diem: kt15p,
                                    mabangdiem: mbd,
                                    loaihinh:'KT15p'
                                    },
                                    dataType: "json",
                                    success: function(response) {
                                        console.log(response);
                                    }
                                });
                        }
                        for (j = 0; j < $('select[name=1Tcol]').val(); j++) {
                            var kt1t = $(`#${mshs}1t${j+1}`).text();
                            if(kt1t=="") kt1t=0;
                            //console.log(mshs+` kt 1t lan ${j+1}:`+kt1t);
                            $.ajax({
                                type: "POST",
                                url: "controllers/nhapdiem.php",
                                data: {
                                    diem: kt1t,
                                    mabangdiem: mbd,
                                    loaihinh:'KT1T'
                                    },
                                    dataType: "json",
                                    success: function(response) {
                                        console.log(response);
                                    }
                                });
                        }
                    }

                });
</script>

<?php include 'View/element/footer.php'; ?>