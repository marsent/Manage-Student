<?php include 'View/element/header.php'; ?>
<div class="container-fluid">
    <span>
        <h1 style=" text-shadow: black; text-align: center;"> Tra cứu kết quả theo học kỳ</h1>
    </span>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="HocKy">Học kỳ</label>
                            </div>
                            <select class="custom-select" id="HocKy" name="hocky">
                                <option value="1">Học kỳ 1</option>
                                <option value="2">Học kỳ 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center mb-3"><button type="submit" class="btn btn-primary" style=" float:right; ">Xem kết quả</button> </div>
                </div>
            </form>
            <!-- bảng kết quả -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">lớp</th>
                            <th scope="col">Sĩ Số</th>
                            <th scope="col">Số Lượng Đạt</th>
                            <th scope="col">Tỉ Lệ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (isset($_POST["hocky"])) {
                        $connect = mysqli_connect("localhost", "root", "", "cnpm");
                        if (!$connect) {
                            die("Fail to connect DB");
                        } else {
                            echo "Connected";
                        }

                        $hocky = $_POST["hocky"];

                        $sql = "SELECT * FROM lop INNER JOIN baocaotongkethocky ON lop.malop=baocaotongkethocky.malop INNER JOIN
                        hocky on baocaotongkethocky.mahocky=hocky.mahocky;";

                        $result = $connect->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                            $count = 0;
                            echo "<tr>";
                                echo "<th scope='row'>$count</th>";
                                echo "<td>$row[TenLop]</td>";
                                echo "<td>$row[SiSo]</td>";
                                echo "<td>$row[SoLuongDat]</td>";
                                echo "<td>$row[Tile]</td>";
                            echo "</tr>";
                            }
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
<?php include 'View/element/footer.php'; ?>