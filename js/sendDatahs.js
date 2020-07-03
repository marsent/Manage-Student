// $('#themhs').click(async function() {
//     var namhoc = $('#NamHoc').val();
//     var hocky = $('#HocKy').val();
//     var lop = $('#Lop').val();
//     var ten = $('#ten').val();
//     var gioitinh = checkbox("Gender");
//     var tuoi = $('#tuoi').val();
//     var diachi = $('#diachi').val();
//     var email = $('#Email').val();

//     await $.ajax({
//         type: "POST",
//         url: "controllers/themhs.php",
//         data: {
//             namhoc: namhoc,
//             hocky: hocky,
//             lop: lop,
//             ten: ten,
//             tuoi: tuoi,
//             diachi: diachi,
//             gioitinh: gioitinh,
//             email: email,
//         },

//         dataType: "json",
//         success: function(response) {
//             // if (response[0].error == false) {
//             //     $.ajax({
//             //         type: "POST",
//             //         url: "controllers/taobaocaothongkemon.php",
//             //         data: {
//             //             namhoc: namhoc,
//             //             hocky: hocky,
//             //             lop: lop,
//             //             monhoc: monhoc
//             //         },
//             //         dataType: "json",
//             //     });
//             // }
//             $('input[type="text"],textarea').val('');
//             alert(response[0].message);
//         }
//     });

//     // await returnBangdiem(namhoc, hocky, lop, monhoc);
//     // $('#capnhat').show();
// });

// function checkbox(Id) {
//     var checkbox = document.getElementsByName(Id);
//     for (var i = 0; i < checkbox.length; i++) {
//         if (checkbox[i].checked === true) {
//             return checkbox[i].value;
//         }
//     }
// }