function returnLop_CDK(namhoc) {
    $.ajax({
        type: "POST",
        url: "controllers/DSlop.php",
        dataType: "json",
        data: {
            namhoc: namhoc
        },
        success: function(response) {
            html = "";
            html += `<option  value="">Chọn lớp</option>`;
            for (value of response) {
                // if (value == 0) {
                //     html += `<option selected value="${value.MaLop}">${value.TenLop}</option>`;
                // } else {
                //     html += `<option  value="${value.MaLop}">${value.TenLop}</option>`;
                // }
                if (Number(value.SiSo) < Number(value.SSTD)) {
                    html += `<option  value="${value.MaLop}">${value.TenLop}</option>`;
                }
            }
            $('#Lop').html(html);
        }
    });
}

function returnLop(namhoc) {
    $.ajax({
        type: "POST",
        url: "controllers/DSlop.php",
        dataType: "json",
        data: {
            namhoc: namhoc
        },
        success: function(response) {
            html = "";
            html += `<option  value="">Chọn lớp</option>`;
            for (value of response) {
                html += `<option  value="${value.MaLop}">${value.TenLop}</option>`;
            }
            $('#Lop3').html(html);
        }
    });
}
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
$('#NamHoc').mouseout(function() {
    var namhoc = $('#NamHoc').val();
    returnLop_CDK(namhoc);
});

$('#Lop3').mouseover(function() {
    var namhoc = $('#NamHoc3').val();
    returnLop(namhoc);
});
$('#NamHoc3').mouseout(function() {
    var namhoc = $('#NamHoc3').val();
    returnLop(namhoc);
});

$('#themhs').click(async function() {
    var namhoc = $('#NamHoc').val();
    var lop = $('#Lop').val();
    var ten = $('#ten').val();
    var gioitinh = checkbox("Gender");
    var tuoi = $('#tuoi').val();
    var diachi = $('#diachi').val();
    var email = $('#Email').val();
    const error = {
        ten: "Chưa nhập tên",
        gt: "Chưa chọn giới tính",
        ngaysinh: "Chưa nhập ngày tháng năm sinh",
        dc: "Chưa nhập địa chỉ",
        Email: "Chưa nhập Email",
        lop: "Chưa chọn lớp"
    };
    if (ten == '') {
        alert(error.ten);
        return;
    }
    if (gioitinh != 'Nam' && gioitinh != 'Nữ') {
        alert(error.gt);
        return;
    }
    if (tuoi == '') {
        alert(error.ngaysinh);
        return;
    }
    if (diachi == '') {
        alert(error.dc);
        return;
    }
    if (email == '') {
        alert(error.email);
        return;
    }
    if (lop == '') {
        alert(error.lop);
        return;
    }
    await $.ajax({
        type: "POST",
        url: "controllers/themhs.php",
        data: {
            namhoc: namhoc,
            lop: lop,
            ten: ten,
            tuoi: tuoi,
            diachi: diachi,
            gioitinh: gioitinh,
            email: email,
        },

        dataType: "json",
        success: function(response) {
            alert(response[0].message);
            location.reload();
        }
    });
});

function xemDSL() {
    namhoc = $('#NamHoc2').val();
    $.ajax({
        type: "POST",
        url: "controllers/DSlop.php",
        data: {
            namhoc: namhoc
        },
        dataType: "json",
        success: function(result) {
            var html = "";
            var i = 1;
            for (value of result) {
                html += '<tr>';
                html += '<th scope="row">';
                html += i++;
                html += '</th>';
                html += `<td>${value.MaLop}</td>`;
                html += `<td>${value.TenLop}</td>`;
                html += `<td>${value.SiSo}</td>`;
                html += '</tr>'
            }
            $('#DSL').html(html);
        }
    });
}

function xemDSHS() {
    namhoc = $('#NamHoc3').val();
    hocky = $('#HocKy3').val();
    lop = $('#Lop3').val();
    $.ajax({
        type: "POST",
        url: "controllers/DSHS.php",
        data: {
            namhoc: namhoc,
            lop: lop,
            hocky: hocky
        },
        dataType: "json",
        success: function(result) {
            var html = "";
            var i = 1;
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
            $('#DSHS').html(html);
        }
    });
}

function XemHs(id) {
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
            var html = '';
            html += '<div class="col-4"> <div class="card"> <div class="card-header"> Thông tin học sinh </div>';
            html += '<div class="card-body"> <table class="table">';
            html += '<tr> <td>Mã học sinh : </td> <td id="MHS"> <b>';
            html += result[0].MaHs;
            html += '</b> </td> </tr><tr> <td>Họ Và Tên : </td> <td>';
            html += result[0].TenHs;
            html += '</td> </tr><tr> <td> Gioi tinh : </td> <td>';
            html += result[0].GT;
            html += '</td> </tr><tr> <td> Ngày Sinh : </td> <td>';
            html += result[0].NS;
            html += '</td> </tr><tr> <td> Địa chỉ : </td> <td> <input type="text" name="DiaChi" id="suaDiaChi" placeholder="';
            html += result[0].DC;
            html += '"></td> </tr><tr> <td> Email : </td> <td> <input type="email" name="Email" id="suaEmail" placeholder="';
            html += result[0].Email;
            html += '"> </td> </tr> </table>';
            html += '<div class="d-flex justify-content-center"><button type="submit" id="';
            html += result[0].MaHs;
            html += '" class="btn btn-primary " style="margin-bottom: 8px;" onclick="suahs(this.id)">Cập nhật thông tin</button></div>';
            html += '</div> </div> </div> <d class="col-8"><div class="card"><div class="card-header"> Quá trình học </div><div class="card-body"> <table class="table">';
            html += '<thead><tr><th scope="col">STT</th><th scope="col">Năm học</th><th scope="col">Học kỳ</th><th scope="col">Lớp</th><th scope="col"> Điểm Trung Bình</th> </tr></thead><tbody id="QTH"></tbody></table></div></div></div>';
            $('#In4S').html(html);
            var html = "";
            var i = 1;
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

function suahs(id) {
    //const Name = document.getElementById("Ten").value;
    // const MSHS = document.getElementById("MSHS").value;
    // const Gender = checkbox("GioiTinh");
    // const Date = document.getElementById("NgaySinh").value;
    const Address = $('#suaDiaChi').val();
    const Email = $('#suaEmail').val();
    // const id = document.getElementById("MHSs").value
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
        url: "controllers/suaHS.php",
        type: "post",
        method: "post",
        datatype: "json",
        data: data,
        success: function() {
            alert("Cập nhật thông tin thành công");
            window.location.reload();
        }
    });
}

function checkbox(Id) {
    var checkbox = document.getElementsByName(Id);
    for (var i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked === true) {
            return checkbox[i].value;
        }
    }
}