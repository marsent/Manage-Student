

$('submit').click(async function(){
    var namhoc = $('#namhoc').val();
    var hocky = $('#hocky').val();
    var monhoc = $('#monhoc').val();
    
})

function update_CT_BCTKM(namhoc, hocky , monhoc) {
    $.ajax({
        type: "POST",
        url: "controllers/update_ct_bctkm.php",
        dataType: "json",
        data: {
            namhoc: namhoc,
            hocky: hocky,
            lop: lop,
            monhoc: monhoc
        }
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
            monhoc: monhoc
        }
    });
}