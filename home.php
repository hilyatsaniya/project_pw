<!DOCTYPE html>
<html>
<head>

	<title>Pustaka Online Universitas Padjdjaran</title>
	<link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet" type="text/css" />
	

</head>
<body >

	<div class="header">
		<img class="logo" src="<?php echo base_url();?>asset/unpad.png"/>
		<h1>Perpustakaan Unpad</h1>
	</div>


   <!-- end header -->
    
    <div class="navbar">
        <a class="left" href="home.html">Home</a>
        <a class="left" href="#">About</a>
        <a class="right" href="Register.html">Register</a>
        <a class="right" href="Login.html">Login</a>
        
    </div>
    <!-- end navigasi -->
    <div class="container">
        
        <div class="content">
            <div class="column1">
            	<img class="contimg" src="<?php echo base_url();?>asset/download.jpg">    
            </div>
            <div class="column2 ">
                <table style="width: 50%; height: 50%; text-align: left;">
                    <tr>
                        <td rowspan="2"><img class="tblimg" src="<?php echo base_url();?>asset/index.png"></td>
                        <td>Katalog Perpustakaan</td>
                    </tr>
                    <tr>
                        <td ><a href ="<?php echo base_url();?>index.php/TestView/show_katalog">Lihat isi katalog</a></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td rowspan="2"><img class="tblimg" src="<?php echo base_url();?>asset/index2.png" ></td>
                        <td>Katalog e-book</td>
                    </tr>
                    <tr>
                        <td>Lihat Katalog e-book</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td rowspan="2"><img class="tblimg" src="<?php echo base_url();?>asset/index.jpg"></td>
                        <td>Katalog Skripsi</td>
                    </tr>

                    <tr>
                        <td>Lihat Katalog Skripsi</td>
                    </tr>
                </table>
            </div>           	
        </div> 
    </div>
    
</div>
	
</body>
</html>