<?php include 'View/element/header.php'; ?>
<div class="container-fluid">
    <span>
        <h1 style=" text-shadow: black; text-align: center;"> Báo Cáo Tổng Kết Học kỳ</h1>
    </span>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="HocKy">Năm học</label>
                            </div>
                            <select class="custom-select" id="namhoc" name="namhoc">
                                <?php
                                $conn = mysqli_connect("localhost","root","", "newcnpm");
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
                                    };
                                };
                                $conn->close();
                                ?>   
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
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
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center mb-3"><button type="submit" id="submit" class="btn btn-primary" style=" float:right; ">Xem kết quả</button> </div>
                </div>
            </form>
            <!-- bảng kết quả -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered " id="dataTable" width="100%" cellspacing="0">
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
                        if (isset($_POST["hocky"])&& isset($_POST["namhoc"])) {
                            $connect = mysqli_connect("localhost", "root", "", "newcnpm");
                            if (!$connect) {
                                die("Fail to connect DB");
                            } else {
                                echo "Connected";
                            }
                            mysqli_set_charset($connect,"utf8");
                            $hocky = $_POST["hocky"];
                            $namhoc = $_POST["namhoc"];
                            $sqlhocky = $hocky.$namhoc;

                            $sql = "SELECT * FROM lop INNER JOIN baocaotongkethocky ON lop.MaLop=baocaotongkethocky.MaLop WHERE baocaotongkethocky.MaHocKy='$sqlhocky';";

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
                                $count++;
                            }
                            $connect->close();
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