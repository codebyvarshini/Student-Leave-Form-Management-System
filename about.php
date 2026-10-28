<?php
include 'designbasic.html';
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      .about-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
            background-color: white;
            max-width: 1100px;
            margin: 40px auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .about-text {
            flex: 1;
            padding: 20px;
            font-size: 16px;
            line-height: 1.8;
        }

        .about-image {
            flex: 0 0 450px;
            padding: 20px;
            text-align: center;
        }

        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<center><font color="black"><h1>STUDENT  LEAVE FORM SYSTEM</h1></font></center>
<body background="">

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About Us</a></li>
 
  <li class="dropdown">
    <a href="#" class="dropbtn">LOGIN</a>
    <div class="dropdown-content">
      <a href="login2.php">Admin Login</a>
      <a href="login1.php">Student Login</a>
    </div>
  </li>
</ul>


<h1>About G. Venkataswamy Naidu College</h1>

<div class="about-section">
    <div class="about-text">
        <p><strong>The idea of starting a college at Kovilpatti was mooted on 29 April, 1966</strong> by the G.Kuppuswamy Naidu Charity Trust for Education and Medical Relief.</p>
        <p>G. Venkataswamy Naidu College was born on 30 June, 1966. The regular classes commenced with the blessings of the Zamindar of Illayarasanendal, Shri K.R.Appaswamy Naidu.</p>
        <p>The college was formally inaugurated on 17 July, 1966 by Honorable Mr. M. Bakthavatsalam, then Chief Minister of Madras. Initially, the college offered four Pre-University sections—two in Science and two in Humanities.</p>
        <p>The following year, it became affiliated with Madurai University and launched B.A. (History) and B.Sc. (Mathematics). Over the years, the college introduced B.Sc. programs in Physics, Chemistry, Botany, B.Com, and later upgraded to a postgraduate institution by starting M.Sc. (Mathematics).</p>
    </div>
    <div class="about-image">
        <img src="images/clg1.jpg" alt="GVN College">
    </div>
</div>
</body>
</html>