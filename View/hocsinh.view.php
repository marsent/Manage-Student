<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản lí học sinh</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Custom css -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 500px;
            overflow: auto;
        }

        .table-wrapper-scroll-y {
            display: block;
        }
    </style>
</head>

<body>
    <header id="header" class="">
        <div class="font-rale font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark">Hệ thống</a>
            <a href="#" class="px-3 border-right text-dark">Quản lý Dữ Liệu</a>
            <div class="dropdown px-3 border-right text-dark d-inline" style="cursor: pointer;">
                <a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <a href="#" class="px-3 border-right text-dark">Trợ giúp</a>
            <a href="#" class="px-3 border-right text-dark">Thông tin phần mềm</a>
        </div>
    </header>
    <div class="fluid-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light color-blue">
            <a class="navbar-brand" href="#">Quản lí học sinh</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Lớp học<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link " href="#">Học sinh</a>
                    <a class="nav-item nav-link " href="#">Bảng điểm</a>
                    <a class="nav-item nav-link " href="#">Quy định</a>
                </div>
            </div>
        </nav>
        <div class="" style="padding-bottom: 30px;">
            <h1 style="text-align: center">THÔNG TIN HỌC SINH</h1>
            <div class="row">
                <div class="col-6">
                    <form action="CNPM-QLHS/test.php" method="post">
                        <div class="card" style="margin-bottom:16px">
                            <div class="card-header">
                                Thông tin học sinh
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <td>Mã Học Sinh : </td>
                                        <td>
                                            <input required type="text" style="margin-left:60px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Họ Và Tên : </td>
                                        <td>
                                            <input required type="text" style="margin-left:60px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Giới Tính : </td>
                                        <td>
                                            <input required type="radio" name="gender" id="male" style="margin-left:60px">
                                            <label for="male">Nam</label>
                                            <input required type="radio" name="gender" id="female">
                                            <label for="female">Nữ</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ngày Sinh : </td>
                                        <td>
                                            <input required type="date" style="margin-left:60px;padding-right: 11px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Địa Chỉ : </td>
                                        <td>
                                            <input required type="text" style="margin-left:60px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email : </td>
                                        <td>
                                            <input required type="email" style="margin-left:60px">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <input type="submit" class="btn btn-primary" style="margin-bottom: 8px; width: 20%;" value="Thêm mới học sinh">
                        </div>
                    </form>
                    <!-- <div class="card">
                        <div class="card-header">
                            Danh sách học sinh theo môn học
                        </div>
                        <div class="card-body">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <select name="" id="" style="margin-bottom: 21px;">
                                    <option value="">SE104.K21</option>
                                    <option value="">SE104.K21</option>
                                    <option value="">SE104.K21</option>
                                    <option value="">SE104.K21</option>
                                    <option value="">SE104.K21</option>
                                    <option value="">SE104.K21</option>
                                    <option value="">SE104.K21</option>
                                    <option value="">SE104.K21</option>
                                    <option value="">SE104.K21</option>
                                </select>
                                <table class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Mã Học Sinh</th>
                                            <th scope="col">Tên Học Sinh</th>
                                            <th scope="col">Điểm Trung Bình Môn</th>
                                            <th scope="col">Thao Tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            Danh sách học sinh theo lớp
                        </div>
                        <div class="card-body">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <select name="" id="" style="margin-bottom: 21px;">
                                    <option value="">10A1</option>
                                    <option value="">10A2</option>
                                    <option value="">10A3</option>
                                    <option value="">11A1</option>
                                    <option value="">11A2</option>
                                    <option value="">11A3</option>
                                    <option value="">12A1</option>
                                    <option value="">12A2</option>
                                    <option value="">12A3</option>
                                </select>
                                <table class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Mã Học Sinh</th>
                                            <th scope="col">Tên Học Sinh</th>
                                            <th scope="col">Điểm Trung Bình</th>
                                            <th scope="col">Thao Tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>L10A1</td>
                                            <td>Hà Vương Quốc</td>
                                            <td>10</td>
                                            <td> <button class="btn btn-primary"> Sửa</button> <button class="btn btn-primary"> Xóa</button> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
    <footer class="footer" style="text-align:center;margin-bottom: 16px;">
    </footer>

    <!-- JS boostrap 4 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>