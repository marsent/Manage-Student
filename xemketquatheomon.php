<?php include 'View/element/header.php'; ?>
<div class="container-fluid">
    <span>
        <h1 style=" text-shadow: black; text-align: center;"> Tra cứu kết quả theo môn học</h1>
    </span>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="HocKy">Năm học</label>
                            </div>
                            <select class="custom-select" id="namhoc" name="namhoc">
                            <?php
                                $conn = mysqli_connect("localhost","root","","newcnpm");
                                if($conn){
                                    echo "Ok";
                                }else{
                                    die ("Fail");
                                }
                                $Mysql = "SELECT * FROM namhoc";

                                $result1 = $conn->query($Mysql);
                                if ($result1->num_rows>0){
                                    while($row = $result1->fetch_assoc()){
                                        echo "<option value='$row[MaNam]'>$row[NamHoc]</option>";
                                    }
                                }
                                $conn->close();
                                ?> 

                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="HocKy">Học kỳ</label>
                            </div>
                            <select class="custom-select" id="hocky" name="hocky">
                                <option value="HK1">Học kỳ 1</option>
                                <option value="HK2">Học kỳ 2</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="MonHoc">Môn học</label>
                            </div>
                            <select class="custom-select" id="monhoc" name="monhoc">

                            <?php 
                            $conn = mysqli_connect("localhost","root","","newcnpm");
                            $sql = "SELECT * FROM monhoc";
                            mysqli_set_charset($conn,"utf8");

                            $result = $conn->query($sql);
                            if($result->num_rows>0){
                                while($row = $result->fetch_assoc()){
                                    echo "<option value='$row[MaMonHoc]'>$row[TenMonHoc]</option>";
                                }
                            }
                            $conn->close();
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col d-flex justify-content-center"><button type="submit" id="submit" class="btn btn-primary" style=" float:right; ">Xem kết quả</button> </div>
                </div>
            </form>
            <!-- bảng kết quả -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Lớp</th>
                            <th scope="col">Sĩ Số</th>
                            <th scope="col">Số Lượng Đạt</th>
                            <th scope="col">Tỉ Lệ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (isset($_POST["hocky"]) && isset($_POST["monhoc"]) && isset($_POST["namhoc"])) {
                        $connect = mysqli_connect("localhost", "root", "", "newcnpm");
                        if (!$connect) {
                            die("Fail to connect DB");
                        } else {
                            echo "Connected";
                        }
                        mysqli_set_charset($connect,"utf8");
                        $hocky = $_POST["hocky"];
                        $monhoc= $_POST["monhoc"];
                        $namhoc= $_POST["namhoc"];
                        $sqlhocky = $hocky.$namhoc;

                        $sql = "SELECT * FROM lop INNER JOIN ct_bctkm ON lop.MaLop=ct_bctkm.MaLop INNER JOIN baocaothongkemon
                        on baocaothongkemon.MaBCTKM=ct_bctkm.MaBCTKM INNER JOIN monhoc on baocaothongkemon.MaMonHoc = monhoc.MaMonHoc where baocaothongkemon.MaHocKy='$sqlhocky' and baocaothongkemon.MaMonHoc= '$monhoc' ;";
                        $result = $connect->query($sql);
                        if ($result->num_rows > 0) {
                            $count = 1;
                            while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                                echo "<th scope='row'>$count</th>";
                                echo "<td>$row[TenLop]</td>";
                                echo "<td>$row[SiSo]</td>";
                                echo "<td>$row[SoLuongDat]</td>";
                                echo "<td>$row[TiLe]</td>";
                            echo "</tr>";
                            }
                            $count ++ ;
                        }
                        $connect->close();
                    }else{
                        echo "Fail";
                    }

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    // document.querySelector("#hocky").addEventListener("change",function(){
    //     let value = this.value.slice(3);
    //     let year = document.querySelector("#namhoc").value;
    //     if (value!==year) alert ("Bạn đã chọn học kì của năm khác năm ban đầu");
    //     return ;
    // });
    // document.querySelector("#submit").addEventListener("click",function(){
    //     console.log(1);
    //     let value = document.querySelector("#hocky").value.slice(3);
    //     let year = document.querySelector("#namhoc").value;
    //     if (value!==year) alert ("Bạn đã chọn học kì của năm khác năm ban đầu");
    //     return;
    // })
</script>
<?php include 'View/element/footer.php'; ?>
