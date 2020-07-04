/*dropdown môn */
/* $.ajax({
         type: "POST",
         url: "controllers/monhoc.php",
         dataType: "json",
         success: function (response) {
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
     });*/
/** dropdown năm */
/* $.ajax({
         type: "POST",
         url: "controllers/namhoc.php",
         dataType: "json",
         success: function (response) {
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
     });*/
/** dropdown lớp*/
$("#NamHoc").ready(function () {
    var namhoc = $("#NamHoc").val();
    var hocky = $("#HocKy").val();
    returnLop(namhoc, hocky);
});
$("#HocKy").mouseout(function () {
    var namhoc = $("#NamHoc").val();
    var hocky = $("#HocKy").val();
    returnLop(namhoc, hocky);
});
$("#NamHoc").mouseout(function () {
    var namhoc = $("#NamHoc").val();
    var hocky = $("#HocKy").val();
    returnLop(namhoc, hocky);
});
/**tạo bảng điểm */
$("#taobangdiem").click(async function () {
    var namhoc = $("#NamHoc").val();
    var hocky = $("#HocKy").val();
    var lop = $("#Lop").val();
    var monhoc = $("#MonHoc").val();
    if (lop == null) {
        alert("Lớp rỗng không thể tạo bảng điểm lớp");
        return;
    }
    if (namhoc == null) {
        alert("Năm rỗng không thể tạo bảng điểm lớp");
        return;
    }
    if (hocky == null) {
        alert("Học kỳ rỗng không thể tạo bảng điểm lớp");
        return;
    }
    if (monhoc == null) {
        alert("Môn học rỗng không thể tạo bảng điểm lớp");
        return;
    }
    var th = '<th scope="col">STT</th>';
    th += '<th scope = "col" > Mã học sinh </th>';
    th += '<th scope = "col" > Họ tên </th>';
    for (var i = 0; i < 3; i++) {
        th += '<th scope="col">Điểm 15p</th>';
    }
    for (var i = 0; i < 2; i++) {
        th += '<th scope="col">Điểm 1T</th>';
    }
    th += ' <th scope="col">Thi Học Kỳ</th>';
    th += ' <th scope="col">Điểm trung bình</th>';
    $("#labelTable").html(th);

    await $.ajax({
        type: "POST",
        url: "controllers/taobangdiem.php",
        data: {
            namhoc: namhoc,
            hocky: hocky,
            lop: lop,
            monhoc: monhoc,
        },
        dataType: "json",
        success: function (response) {
            if (response[0].error == false) {
                $.ajax({
                    type: "POST",
                    url: "controllers/taobaocaothongkemon.php",
                    data: {
                        namhoc: namhoc,
                        hocky: hocky,
                        lop: lop,
                        monhoc: monhoc,
                    },
                    dataType: "json",
                });
            }
            alert(response[0].message);
        },
    });

    await returnBangdiem(namhoc, hocky, lop, monhoc);
    $("#capnhat").show();
});
/**cập nhật điểm */
$("#capnhat").click(async function () {
    var namhoc = $("#NamHoc").val();
    var hocky = $("#HocKy").val();
    var lop = $("#Lop").val();
    var monhoc = $("#MonHoc").val();
    var rowLength = document.getElementById("Table").rows.length;
    for (i = 1; i < rowLength; i++) {
        var mshs = $(`tr[data-id="hs${i - 1}"]`)
            .children()
            .eq(1)
            .text();
        var kt15p1 = $(`tr[data-id="hs${i - 1}"]`)
            .children()
            .eq(3)
            .text();
        var kt15p2 = $(`tr[data-id="hs${i - 1}"]`)
            .children()
            .eq(4)
            .text();
        var kt15p3 = $(`tr[data-id="hs${i - 1}"]`)
            .children()
            .eq(5)
            .text();
        var kt1t1 = $(`tr[data-id="hs${i - 1}"]`)
            .children()
            .eq(6)
            .text();
        var kt1t2 = $(`tr[data-id="hs${i - 1}"]`)
            .children()
            .eq(7)
            .text();
        var THK = $(`tr[data-id="hs${i - 1}"]`)
            .children()
            .eq(8)
            .text();
        if (isNaN(kt15p1) == true) {
            alert(
                `Error: Điểm kiểm tra 15p lần 1 của học sinh có STT:${i} phải là số từ 0 đến 10`
            );
            return;
        }
        kt15p1 == "" ? (kt15p1 = "null") : (kt15p1 = parseFloat(kt15p1));
        kt15p1 > 10 ? (kt15p1 = 10) : (kt15p1 = kt15p1);
        kt15p1 < 0 ? (kt15p1 = 0) : (kt15p1 = kt15p1);

        if (isNaN(kt15p2) == true) {
            alert(
                `Error: Điểm kiểm tra 15p lần 2 của học sinh có STT:${i} phải là số từ 0 đến 10`
            );
            return;
        }
        kt15p2 == "" ? (kt15p2 = "null") : (kt15p2 = parseFloat(kt15p2));
        kt15p2 > 10 ? (kt15p2 = 10) : (kt15p2 = kt15p2);
        kt15p2 < 0 ? (kt15p2 = 0) : (kt15p2 = kt15p2);

        if (isNaN(kt15p3) == true) {
            alert(
                `Error: Điểm kiểm tra 15p lần 3 của học sinh có STT:${i} phải là số từ 0 đến 10`
            );
            return;
        }
        kt15p3 == "" ? (kt15p3 = "null") : (kt15p3 = parseFloat(kt15p3));
        kt15p3 > 10 ? (kt15p3 = 10) : (kt15p3 = kt15p3);
        kt15p3 < 0 ? (kt15p3 = 0) : (kt15p3 = kt15p3);

        if (isNaN(kt1t1) == true) {
            alert(
                `Error: Điểm kiểm tra 1t lần 1 của học sinh có STT:${i} phải là số từ 0 đến 10`
            );
            return;
        }
        kt1t1 == "" ? (kt1t1 = "null") : (kt1t1 = parseFloat(kt1t1));
        kt1t1 > 10 ? (kt1t1 = 10) : (kt1t1 = kt1t1);
        kt1t1 < 0 ? (kt1t1 = 0) : (kt1t1 = kt1t1);

        if (isNaN(kt1t2) == true) {
            alert(
                `Error: Điểm kiểm tra 1t lần 2 của học sinh có STT:${i} phải là số từ 0 đến 10`
            );
            return;
        }
        kt1t2 == "" ? (kt1t2 = "null") : (kt1t2 = parseFloat(kt1t2));
        kt1t2 > 10 ? (kt1t2 = 10) : (kt1t2 = kt1t2);
        kt1t2 < 0 ? (kt1t2 = 0) : (kt1t2 = kt1t2);

        if (isNaN(THK) == true) {
            alert(
                `Error: Điểm Thi học kỳ của học sinh có STT:${i} phải là số từ 0 đến 10`
            );
            return;
        }
        THK == "" ? (THK = "null") : (THK = parseFloat(THK));
        THK > 10 ? (THK = 10) : (THK = THK);
        THK < 0 ? (THK = 0) : (THK = THK);

        var dtbarr = [];
        isNaN(kt15p1) == true ? dtbarr.push(0) : dtbarr.push(kt15p1);
        isNaN(kt15p2) == true ? dtbarr.push(0) : dtbarr.push(kt15p2);
        isNaN(kt15p3) == true ? dtbarr.push(0) : dtbarr.push(kt15p3);
        isNaN(kt1t1) == true ? dtbarr.push(0) : dtbarr.push(kt1t1);
        isNaN(kt1t2) == true ? dtbarr.push(0) : dtbarr.push(kt1t2);
        isNaN(THK) == true ? dtbarr.push(0) : dtbarr.push(THK);
        var DTB =
            (dtbarr[0] +
                dtbarr[1] +
                dtbarr[2] +
                dtbarr[3] * 2 +
                dtbarr[4] * 2 +
                dtbarr[5] * 3) /
            10;

        var hocsinh = {
            mshs: mshs,
            kt15p1: kt15p1,
            kt15p2: kt15p2,
            kt15p3: kt15p3,
            kt1t1: kt1t1,
            kt1t2: kt1t2,
            THK: THK,
            DTB: DTB,
            namhoc: namhoc,
            hocky: hocky,
            lop: lop,
            monhoc: monhoc,
        };
        await $.ajax({
            type: "POST",
            url: "controllers/nhapdiem.php",
            data: hocsinh,
            success: function (response) {
                response = JSON.parse(response);
                if (response.error == false) {
                    alert(`Nhập điểm học sinh STT${i} thành công`);
                } else {
                    alert(`Nhập điểm học sinh STT${i} thất bại: ${response[0].message} `);
                }
            },
        });
        if (i == rowLength - 1) {
            alert("Cập nhật bảng điểm thành công");
        }
    }

    await returnBangdiem(namhoc, hocky, lop, monhoc);
    await update_CT_BCTKM(namhoc, hocky, lop, monhoc);
    await update_BCTKHK(namhoc, hocky, lop, monhoc);
});

$("#capnhat").hide();

function returnBangdiem(namhoc, hocky, lop, monhoc) {
    $.ajax({
        type: "POST",
        url: "controllers/returnbangdiem.php",
        data: {
            namhoc: namhoc,
            hocky: hocky,
            lop: lop,
            monhoc: monhoc,
        },
        dataType: "json",
        success: function (response) {
            var a = 0;
            var td = "";
            for (value of response) {
                td += `<tr data-id="hs${a}" role="row">`;
                td += `<th scope="row">${++a}</th>`;
                td += `<td >${value.MaHocSinh}</td>`;
                td += `<td>${value.HoTen}</td>`;

                td += `<td contenteditable  >${
          value.kt15p1 == null ? "" : value.kt15p1
        }</td>`;
                td += `<td contenteditable  >${
          value.kt15p2 == null ? "" : value.kt15p2
        }</td>`;
                td += `<td contenteditable  >${
          value.kt15p3 == null ? "" : value.kt15p3
        }</td>`;

                td += `<td contenteditable >${
          value.kt1t1 == null ? "" : value.kt1t1
        }</td>`;
                td += `<td contenteditable >${
          value.kt1t2 == null ? "" : value.kt1t2
        }</td>`;

                td += `<td contenteditable >${value.THK == null ? "" : value.THK}</td>`;
                td += `<td >${value.DTB}</td>;`;
                td += "</tr>";
            }
            $("#tableData").html(td);
        },
    });
}

function returnLop(namhoc, hocky) {
    $.ajax({
        type: "POST",
        url: "controllers/lop.php",
        dataType: "json",
        data: {
            namhoc: namhoc,
            hocky: hocky,
        },
        success: function (response) {
            html = "";
            for (value of response) {
                if (value == 0) {
                    html += `<option selected value="${value.MaLop}">${value.TenLop}</option>`;
                } else {
                    html += `<option  value="${value.MaLop}">${value.TenLop}</option>`;
                }
            }
            $("#Lop").html(html);
        },
    });
}

function update_CT_BCTKM(namhoc, hocky, lop, monhoc) {
    $.ajax({
        type: "POST",
        url: "controllers/update_ct_bctkm.php",
        dataType: "json",
        data: {
            namhoc: namhoc,
            hocky: hocky,
            lop: lop,
            monhoc: monhoc,
        },
    });
}

function update_BCTKHK(namhoc, hocky, lop, monhoc) {
    $.ajax({
        type: "POST",
        url: "controllers/update_bctkhk.php",
        dataType: "json",
        data: {
            namhoc: namhoc,
            hocky: hocky,
            lop: lop,
            monhoc: monhoc,
        },
    });
}