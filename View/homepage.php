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
	<!-- Custom fonts for this template-->
  	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom css -->
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">
</head>
<body>
	<header id="header" class="">
		<div class="font-rale font-size-14 text-black-50 m-0">
			<a href="#" class="px-3 border-right border-left text-dark">Hệ thống</a>
			<a href="#" class="px-3 border-right text-dark">Quản lý Dữ Liệu</a>
			<div class="dropdown px-3 border-right text-dark d-inline" style="cursor: pointer;">
				<a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Chức năng
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Thêm lớp</a>
					<a class="dropdown-item" href="#">Thêm điểm</a>
					<a class="dropdown-item" href="#">Thêm học sinh</a>
				</div>
			</div>
			<a href="#" class="px-3 border-right text-dark">Trợ giúp</a>
			<a href="#" class="px-3 border-right text-dark">Thông tin phần mềm</a>
		</div>
	</header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white mb-4 static-top shadow">
		<a class="navbar-brand" href="index.php">Quản lí học sinh</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="index.php">Dashboard</a>
				<a class="nav-item nav-link " href="#">Lớp học</a>
				<a class="nav-item nav-link " href="#">Học sinh</a>
				<div class=" nav-item nav-link dropdown " style="cursor: pointer;"> 
					<a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Bảng điểm
					</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="XemKetQua.php">Xem kết quả</a>
						<a class="dropdown-item " href="NhapBangDiem.php">Nhập bảng điểm</a>
						</div>
				</div>				
				<a class="nav-item nav-link " href="#">Quy định</a>
			</div>
		</div>
		</nav>


<!-- Page Wrapper -->
<div id="wrapper">
	<!-- content wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">
		<!-- content -->		
		<div id="content">
			<!-- Begin page content -->
		<div class="container-fluid">
			<!-- content row -->
			<!-- analysis class data-->
			
			<div class="row">
            	<!-- Number of class -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-primary shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Số lớp học</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800">30</div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-school fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <!-- Number of students -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-success shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số học sinh toàn trường</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800">3000</div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fas fa-user-graduate fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	             <!-- Pending Requests Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-warning shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Số môn</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-book fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <!-- Earnings (Monthly) Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-info shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tỉ lệ qua môn</div>
	                      <div class="row no-gutters align-items-center">
	                        <div class="col-auto">
	                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">86%</div>
	                        </div>
	                        <div class="col">
	                          <div class="progress progress-sm mr-2">
	                            <div class="progress-bar bg-info" role="progressbar" style="width: 86%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
          </div>

          <!-- Content Row -->
          <!-- char -->
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Điểm trung bình học sinh qua các năm</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="myAreaChart" style="display: block; width: 611px; height: 320px;" width="611" height="320" class="chartjs-render-monitor"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Số lượng học sinh mỗi khối</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="myPieChart" width="272" height="245" class="chartjs-render-monitor" style="display: block; width: 272px; height: 245px;"></canvas>
                  </div>
                  <div style="margin-top: 2.6rem"></div>
                </div>
              </div>
            </div>

            <!-- Bar Chart -->

            <div class="col-xl-12 col-lg-7">
				<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Thống kê điểm các môn</h6>
                </div>
                <div class="card-body">
                  <div class="chart-bar"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="myBarChart" width="611" height="320" class="chartjs-render-monitor" style="display: block; width: 611px; height: 320px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
		</div>
	</div>
	</div>
</div>