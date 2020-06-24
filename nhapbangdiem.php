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
                            <option selected value="HK1">Học kỳ 1</option>
                            <option value="HK2">Học kỳ 2</option>
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
<div id="error"></div>
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
    // $(document).ready(function() {
    //     var th = '<th scope="col">STT</th>';
    //     th += '<th scope = "col" > Mã học sinh </th>';
    //     th += '<th scope = "col" > Họ tên </th>';
    //     for (var i = 0; i < $('select[name=15Pcol]').val(); i++) {
    //         th += '<th scope="col">Điểm 15p</th>';
    //     }
    //     for (var i = 0; i < $('select[name=1Tcol]').val(); i++) {
    //         th += '<th scope="col">Điểm 1T</th>';
    //     }
    //     th += ' <th scope="col">Điểm trung bình</th>';
    //     $('#labelTable').html(th);
    //     /**in danh sách học sinh */
    //     $.ajax({
    //         type: "POST",
    //         url: "controllers/returnhocsinh.php",
    //         dataType: "json",
    //         success: function(response) {
    //             var a = 0;
    //             var td = "";
    //             for (value of response) {
    //                 td += '<tr role="row">';
    //                 td += `<th scope="row">${++a}</th>`;
    //                 td += `<td id="hs${a}">${value.MaHocSinh}</td>`
    //                 td += `<td>${value.HoTen}</td>`
    //                 for (var i = 0; i < $('select[name=15Pcol]').val(); i++) {
    //                     td += `<td contenteditable  id="${value.MaHocSinh}15p${i+1}"></td>`
    //                 }
    //                 for (var i = 0; i < $('select[name=1Tcol]').val(); i++) {
    //                     td += `<td contenteditable id="${value.MaHocSinh}1t${i+1}"></td>`
    //                 }
    //                 td += `<td></td>;`
    //                 td += '</tr>';
    //             }
    //             $('#tableData').html(td);
    //         }
    //     });
    // })

    /**tạo bảng điểm */
    $('#taobangdiem').click(function() {
        var namhoc = $('#NamHoc').val();
        var hocky = $('#HocKy').val();
        var lop = $('#Lop').val();
        var monhoc = $('#MonHoc').val();

        // var th = '<th scope="col">STT</th>';
        // th += '<th scope = "col" > Mã học sinh </th>';
        // th += '<th scope = "col" > Họ tên </th>';
        // for (var i = 0; i < $('select[name=15Pcol]').val(); i++) {
        //     th += '<th scope="col">Điểm 15p</th>';
        // }
        // for (var i = 0; i < $('select[name=1Tcol]').val(); i++) {
        //     th += '<th scope="col">Điểm 1T</th>';
        // }
        // th += ' <th scope="col">Điểm trung bình</th>';
        // $('#labelTable').html(th);

        var th = '<th scope="col">STT</th>';
        th += '<th scope = "col" > Mã học sinh </th>';
        th += '<th scope = "col" > Họ tên </th>';
        for (var i = 0; i < 3; i++) {
            th += '<th scope="col">Điểm 15p</th>';
        }
        for (var i = 0; i < 2; i++) {
            th += '<th scope="col">Điểm 1T</th>';
        }
        th += ' <th scope="col">Thi Học Kỳ</th>'
        th += ' <th scope="col">Điểm trung bình</th>';
        $('#labelTable').html(th);

        $.ajax({
            type: "POST",
            url: "controllers/taobangdiem.php",
            data: {
                namhoc: namhoc,
                hocky: hocky,
                lop: lop,
                monhoc: monhoc
            },
            dataType: "json",
            success: function(response) {
                var error = false;
                var message = "";
                for (i of response) {
                    if (i.error == true) {
                        error = true;
                        message = i.message;
                    }
                }
                if (error == false) alert("tạo bảng điểm thành công");
                else alert('Bảng Điểm đã có: ');
            }
        });

        $.ajax({
            type: "POST",
            url: "controllers/returnbangdiem.php",
            data: {
                namhoc: namhoc,
                hocky: hocky,
                lop: lop,
                monhoc: monhoc
            },
            dataType: "json",
            success: function(response) {
                var a = 0;
                var td = "";
                for (value of response) {
                    td += '<tr role="row">';
                    td += `<th scope="row">${++a}</th>`;
                    td += `<td id="hs${a}">${value.MaHocSinh}</td>`
                    td += `<td>${value.HoTen}</td>`

                        td += `<td contenteditable  id="${value.MaHocSinh}15p${1}">${value.kt15p1==0?"":value.kt15p1}</td>`;
                        td += `<td contenteditable  id="${value.MaHocSinh}15p${2}">${value.kt15p2==0?"":value.kt15p2}</td>`;
                        td += `<td contenteditable  id="${value.MaHocSinh}15p${3}">${value.kt15p3==0?"":value.kt15p3}</td>`
                    
                    
                        td += `<td contenteditable id="${value.MaHocSinh}1t${1}">${value.kt1t1==0?"":value.kt1t1}</td>`;
                        td += `<td contenteditable id="${value.MaHocSinh}1t${2}">${value.kt1t2==0?"":value.kt1t2}</td>`
                    
                    td += `<td contenteditable id="${value.MaHocSinh}THK">${value.THK==0?"":value.THK}</td>`
                    td += `<td id="${value.MaHocSinh}DTB">${value.DTB}</td>;`
                    td += '</tr>';
                }
                $('#tableData').html(td);
            }
        });
    });
    /**cập nhật điểm */
    $('#capnhat').click(function() {

        var rowLength = document.getElementById('Table').rows.length;
        for (i = 1; i < rowLength; i++) {
            var mshs = $(`#hs${i}`).text();
            var kt15p1 = $(`#${mshs}15p${1}`).text();
            var kt15p2 = $(`#${mshs}15p${2}`).text();
            var kt15p3 = $(`#${mshs}15p${3}`).text();
            var kt1t1 = $(`#${mshs}1t${1}`).text();
            var kt1t2 = $(`#${mshs}1t${2}`).text();
            var THK = $(`#${mshs}THK`).text();
            kt15p1 == "" ? kt15p1 = 0 : kt15p1 = parseFloat(kt15p1);
            kt15p2 == "" ? kt15p2 = 0 : kt15p2 = parseFloat(kt15p2);
            kt15p3 == "" ? kt15p3 = 0 : kt15p3 = parseFloat(kt15p3);
            kt1t1 == "" ? kt1t1 = 0 : kt1t1 = parseFloat(kt1t1);
            kt1t2 == "" ? kt1t2 = 0 : kt1t2 = parseFloat(kt1t2);
            THK == "" ? THK = 0 : THK = parseFloat(THK);
            var DTB = (kt15p1 + kt15p2 + kt15p3 + kt1t1 * 2 + kt1t2 * 2 + THK * 3) / 10
            var hocsinh = {
                mshs: mshs,
                kt15p1: kt15p1,
                kt15p2: kt15p2,
                kt15p3: kt15p3,
                kt1t1: kt1t1,
                kt1t2: kt1t2,
                THK: THK,
                DTB: DTB,
                namhoc: $('#NamHoc').val(),
                hocky: $('#HocKy').val(),
                lop: $('#Lop').val(),
                monhoc: $('#MonHoc').val()

            }
            $(`#${mshs}DTB`).html(DTB);
            $.ajax({
                type: "POST",
                url: "controllers/nhapdiem.php",
                data: hocsinh,
                success: function(response) {
                    $('#error').html(response);
                    console.log(response)
                }
            });

            // for (j = 0; j < 3; j++) {
            //     var kt15p = $(`#${mshs}15p${j+1}`).text();
            //     if (kt15p == "") kt15p = 0;
            //     var mbd = $('#MonHoc').val() + mshs;
            //     console.log(kt15p);
            //     $.ajax({
            //         type: "POST",
            //         url: "controllers/nhapdiem.php",
            //         data: {
            //             diem: kt15p,
            //             mabangdiem: mbd,
            //             loaihinh: 'KT15p'
            //         },
            //         dataType: "json",
            //         success: function(response) {
            //             console.log(response);
            //         }
            //     });
            // }
            // for (j = 0; j < 2; j++) {
            //     var kt1t = $(`#${mshs}1t${j+1}`).text();
            //     if (kt1t == "") kt1t = 0;
            //     console.log(kt1t);
            //     $.ajax({
            //         type: "POST",
            //         url: "controllers/nhapdiem.php",
            //         data: {
            //             diem: kt1t,
            //             mabangdiem: mbd,
            //             loaihinh: 'KT1T'
            //         },
            //         dataType: "json",
            //         success: function(response) {
            //             console.log(response);
            //         }
            //     });
            // }
            if (i == rowLength - 1) alert("xong");
        }

    });
</script>

<?php include 'View/element/footer.php'; ?>