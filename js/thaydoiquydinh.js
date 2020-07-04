/* cập nhật môn học */
async function updateSubject(id) {
    var btn = $(id);
    if (btn.text().trim() == "Sửa") {
        btn.text("Cập nhật");
        btn.closest("tr").children().eq(1).attr("contenteditable", "true");
    } else {
        btn.text("Sửa");
        btn.closest("tr").children().eq(1).attr("contenteditable", "false");
        var tenmonhoc = btn.closest("tr").children().eq(1).text();
        var mamonhoc = btn.closest("tr").children().eq(0).text();
        await $.ajax({
            type: "POST",
            url: "controllers/updateSubject.php",
            data: {
                tenmonhoc: tenmonhoc,
                mamonhoc: mamonhoc,
            },
            dataType: "json",
            success: function (response) {
                alert(response[0].message);
            },
        });
    }
}
async function deleteSubject(id) {
    var btn = $(id);
    var mamonhoc = btn.closest("tr").children().eq(0).text();
    btn.closest("tr").addClass("deleteSubject");
    $(".deleteSubject").fadeOut(800);
    await $.ajax({
        type: "POST",
        url: "controllers/deleteSubject.php",
        data: {
            mamonhoc: mamonhoc,
        },
        dataType: "json",
        success: function (response) {
            alert(response[0].message);
        },
    });
}
$.ajax({
    type: "POST",
    url: "controllers/returnthongso.php",
    dataType: "json",
    success: function (response) {
        var minAge = getthongso(response, "TTT");
        var maxAge = getthongso(response, "TTD");
        var passingScoreS = getthongso(response, "DDM");
        var passingScore = getthongso(response, "DD");
        var siso = getthongso(response, "SSTD");
        var htmlSSTD = `<label for="inputMaxNumberOfStudent">Sĩ số tối đa</label>`;
        htmlSSTD += `<input type="number" class="form-control" id="MaxNumberOfStudent" value="${siso.giatri}" min="0" max="100">`;
        var htmlTTT = `   <label for="inputMinAge">Tuổi tối thiểu</label>`;
        htmlTTT += `<input type="number" class="form-control" id="inputMinAge" value="${minAge.giatri}" min="1" max="100">`;
        var htmlTTD = `  <label for="inputMaxAge">Tuổi tối đa</label>`;
        htmlTTD += `<input type="number" class="form-control" id="inputMaxAge" value="${maxAge.giatri}" min="1" max="100">`;
        var HTMLPSS = `<label for="inputPassingSocreS">Điểm đạt môn</label>`;
        HTMLPSS += `<input type="number" class="form-control" id="inputPassingSocreS" value="${passingScoreS.giatri}" min="1" max="10">`;
        var HTMLPS = `<label for="inputPassingScore">Điểm đạt</label>`;
        HTMLPS += `<input type="number" class="form-control" id="inputPassingScore" value="${passingScore.giatri}" min="1" max="10">`;
        $("#minAge").html(htmlTTT);
        $("#maxAge").html(htmlTTD);
        $("#diemdatmon").html(HTMLPSS);
        $("#diemdat").html(HTMLPS);
        $("#SSTD").html(htmlSSTD);
    },
});
$.ajax({
    type: "POST",
    url: "controllers/monhoc.php",
    dataType: "json",
    success: function (response) {
        var html = "";
        for (value of response) {
            html += `<tr id="${value.MaMonHoc}">
                        <td scope="row">${value.MaMonHoc}</td>
                        <td  >${value.TenMonHoc}</td>
                        <td > <button onclick="updateSubject(this)" type="button" class="btn btn-primary update"> Sửa</button> <button onclick="deleteSubject(this)" class="btn btn-primary"> Xóa</button> </td>
                    </tr>`;
        }
        $("#listSubject").html(html);
    },
});
$.ajax({
    type: "POST",
    url: "controllers/namhoc.php",
    dataType: "json",
    success: function (response) {
        var html = "";
        for (value of response) {
            html += `<option value="${value.MaNam}">${value.NamHoc}</option>`;
        }
        $("#cmbnamadd").html(html);
    },
});
$("#addSubject").click(async function () {
    var mamonhoc = $("#txtmamonhocadd").val();
    var tenmonhoc = $("#txttenmonhocadd").val();
    var heso = $("#numhesoadd").val();
    var khoi = $("#cmbkhoiadd").val();
    var namhoc = $("#cmbnamadd").val();
    var bang = $("#cmbbangadd").val();
    await $.ajax({
        type: "POST",
        url: "controllers/AddSubject.php",
        data: {
            mamonhoc: mamonhoc,
            tenmonhoc: tenmonhoc,
            heso: heso,
            khoi: khoi,
            namhoc: namhoc,
            bang: bang,
        },
        dataType: "json",
        success: function (response) {
            alert(response[0].message);
        },
    });
    $.ajax({
        type: "POST",
        url: "controllers/monhoc.php",
        dataType: "json",
        success: function (response) {
            var html = "";
            for (value of response) {
                html += `<tr id="${value.MaMonHoc}">
                        <td scope="row">${value.MaMonHoc}</td>
                        <td  >${value.TenMonHoc}</td>
                        <td > <button onclick="updateSubject(this)" type="button" class="btn btn-primary update"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                    </tr>`;
            }
            $("#listSubject").html(html);
        },
    });
});
$("#updateAge").click(function () {
    var minAge = $("#inputMinAge").val();
    var maxAge = $("#inputMaxAge").val();
    $.ajax({
        type: "POST",
        url: "controllers/changemaxminAge.php",
        data: {
            minAge: minAge,
            maxAge: maxAge,
        },
        dataType: "json",
        success: function (response) {
            alert(response[0].message + "\n" + response[1].message);
        },
    });
});

$("#updateScore").click(async function () {
    var pSS = $("#inputPassingSocreS").val();
    var pS = $("#inputPassingScore").val();
    await $.ajax({
        type: "POST",
        url: "controllers/changeScore.php",
        data: {
            pSS: pSS,
            pS: pS,
        },
        dataType: "json",
        success: function (response) {
            alert(response[0].message + "\n" + response[1].message);
        },
    });
});

$("#updatenumclass").click(async function () {
    var numStudent = $("#MaxNumberOfStudent").val();
    var numClass = $("#NumberOfClass").val();
    var state = $("#inputState").val();
    await $.ajax({
        type: "POST",
        url: "controllers/changeClass.php",
        data: {
            numStudent: numStudent,
            numClass: numClass,
            state: state,
        },
        dataType: "json",
        success: function (response) {
            alert(response[0].message + "\n" + response[1].message);
        },
    });
});

function getthongso(response, mathongso) {
    for (value of response) {
        if (value.mathongso == mathongso) return value;
    }
}