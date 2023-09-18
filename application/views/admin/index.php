<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .navbar h1 {
            margin: 0;
        }

        .search-container {
            float: right;
        }

        .search-box {
            padding: 2px;
            border: none;
            border-radius: 5px;
        }

        /* Side Navbar (Samping) Styles */
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 2;
            top: 0;
            left: 0;
            background-color: #333;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 0px;
        }

        .sidenav a {
            padding: 5px 10px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            background-color: #555;
        }

        /* Content Styles */
        .content {
            margin-left: 0;
            padding: 60px;
            transition: margin-left 0.5s;
        }

        /* Card Styles */
        .card {
            background-color: #20B2AA;
            border: 1px solid #ccc;
            border-radius: 2px;
            padding: 10px;
            margin: 5px;
            width: 150px;
            display: inline-block;
            color: white;
            margin-left: 0;
            transition: margin-left 0.5s;
        }

        /* Button Styles */
        .login-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #008B8B;
            color: #fff;
            text-decoration: none;
            text-align: center;
            font-size: 10px;
            border: none;
            width: 100px;
        }

        /* Button Hover Styles */
        .openbtn:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <!-- Navbar -->

    <div class="navbar">
        <span class="openbtn" onclick="openNav()">&#9776;</span>
        <span class="ml-3">Notsonic</span>
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Cari...">
            <button type="submit">Cari</button>
        </div>
    </div>

    <!-- Side Navbar (Samping) -->
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; closs</a>
        <a href="<?php echo base_url('admin') ?>">Beranda</a>
        <a href="<?php echo base_url('admin/siswa') ?>">Siswa</a>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="card">
            <p>Jumlah Kelas</p>
            <h1>9</h1>
            <a href="" target="_blank" class="login-button">Info untuk lebih lanjut</a>
        </div>
        <div class="card">
            <p>Jumlah Mapel</p>
            <h1>12</h1>
            <a href="" target="_blank" class="login-button">Info untuk lebih lanjut</a>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementsByClassName("content")[0].style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementsByClassName("content")[0].style.marginLeft = "0";
        }
    </script>
</body>
</html>
