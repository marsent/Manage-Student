<?php include 'View/element/header.php';
?>
<style>
    body,
    html {
        height: 100%;
    }

    .bg {
        /* The image used */
        background-image: url("./img/background.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .main{
        height: 100%;
    }
    .navbar.navbar-expand-lg{
        margin-bottom: 0 !important; 
    }
    h2{
        text-align: right;
        font-size: 4rem;
        color : #ffc300; 
    }
</style>
<div class="main">
    <div class="bg">
    <h2>Phần Mềm Quản Lí Học Sinh</h2>
    </div>
</div>


<?php include 'View/element/footer.php'; ?>