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
		<a class="navbar-brand" href="#">Quản lí học sinh</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link " href="#">Dashboard</a>
				<a class="nav-item nav-link " href="#">Lớp học</a>
				<a class="nav-item nav-link " href="#">Học sinh</a>
				<div class=" nav-item nav-link dropdown active"> 
					<a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Bảng điểm
					</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item active" href="#">Xem kết quả</a>
						<a class="dropdown-item" href="#">Nhập bảng điểm</a>
						</div>
				</div>
				<a class="nav-item nav-link " href="#">Quy định</a>
			</div>
		</div>
		</nav>
