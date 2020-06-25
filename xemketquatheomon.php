<?php include 'View/element/header.php'; ?>
<div class="container-fluid">
    <span>
        <h1 style=" text-shadow: black; text-align: center;"> Tra cứu kết quả theo môn học</h1>
    </span>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="NamHoc">Năm học</label>
                            </div>
                            <select class="custom-select" id="iNamHoc" name="year">
                                <option selected>Choose...</option>
                                <option value="1">2018-2019</option>
                                <option value="2">2021-2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="HocKy">Học kỳ</label>
                            </div>
                            <select class="custom-select" id="HocKy" name="term">
                                <option selected>Choose...</option>
                                <option value="1">Học kỳ 1</option>
                                <option value="2">Học kỳ 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="MonHoc">Môn học</label>
                            </div>
                            <select class="custom-select" id="MonHoc" name="subject">
                                <option selected>Choose...</option>
                                <option value="1">Tin học</option>
                                <option value="2">Tin học</option>
                                <option value="3">Tin học</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3"><button type="submit" class="btn btn-primary btn-block" style=" float:right; ">Xem kết quả</button> </div>
                </div>
            </form>
            <!-- bảng kết quả -->
            <table class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">lớp</th>
                        <th scope="col">Sĩ Số</th>
                        <th scope="col">Số Lượng Đạt</th>
                        <th scope="col">Tỉ Lệ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST["year"]) || isset($_POST["term"]) || isset($_POST["subject"])) {
                        $connect = mysqli_connect("localhost", "root", "", "test");
                        if (!$connect) {
                            die("Fail to connect DB");
                        } else {
                            echo "Connected";
                        }

                        $sql = "SELECT * FROM hocsinh INNER JOIN lop ON hocsinh.malop = lop.malop
                        INNER JOIN ct_bctkm ON lop.malop=ct_bctkm.malop ;";
                        $result = $connect->query($sql);
                        // if ($result->num_rows > 0) {
                        //     while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                    echo "<th scope='row'>1</th>";
                                    echo "<td>10A1</td>";
                                    echo "<td>10</td>";
                                    echo "<td>9</td>";
                                    echo "<td>90%</td>";
                                echo "</tr>";
                        //     }
                        // }
                        $connect->close();
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
<?php include("./View/element/footer.php") ?>