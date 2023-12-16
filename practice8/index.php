<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<Link rel="stylesheet" href="advance.css"></Link>
<script src="../practice4/js/DomElement.js"></script>
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
  margin: 2rem 0;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  text-align: center;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu a{
  text-decoration: none;
  font-weight: bold;
  color: #ffffff;
  margin-left: 10px;
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  margin: 2rem 0;
}
.date{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  
}
.date button{
  background-color: pink;
  border-color: #ffffff;
  border-radius: 5px;
  padding: 0.5rem;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>

<div class="header">
  <h1>FEBY SETYANY LESTARI</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li><a href="phpIntro.php" >PHP Intro</a></li>      
      <li><a href="phpInstall.php">PHP Install</a></li>
      <li><a href="phpSyntax.php">PHP Syntax</a></li>
      <li><a href="phpComments.php">PHP Comments</a></li>
      <li><a href="phpVariables.php">PHP Variables</a></li>
      <li><a href="phpEchoPrint.php">PHP Echo/Print</a></li>
      <li><a href="phpDataTypes.php">PHP Data Types</a></li>
      <li><a href="phpString.php">PHP String</a></li>
      <li><a href="phpNumbers.php">PHP Numbers</a></li>
      <li><a href="phpCasting.php">PHP Casting</a></li>
      <li><a href="phpNMath.php">PHP Math</a></li>
      <li><a href="phpConstans.php">PHP Constans</a></li>
      <li><a href="phpMagicConstans.php">PHP Magic Constans</a></li>
      <li><a href="phpOperator.php">PHP Operator</a></li>
      <li><a href="phpIfElseIf.php">PHP If Else If</a></li>
      <li><a href="phpSwitch.php">PHP Switch</a></li>
      <li><a href="phpLoops.php">PHP Loops</a></li>
      <li><a href="phpfunctions.php">PHP Functions</a></li>
      <li><a href="phpArrays.php">PHP Arrays</a></li>
      <li><a href="phpSuperglobals.php">PHP Superglobals</a></li>
      <li><a href="phpRegex.php">PHP Regex</a></li>
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <div class="city">
      <h1>Pemrograman Web</h1>
      <p>Mata kuliah pemrograman web adalah mengajarkan mahasiswa tentang pengembangan situs web melalui penggunaan bahasa markup (HTML), gaya (CSS), JavaScript, pemrograman server-side, basis data, desain responsif, dan keamanan web. Ini membekali mahasiswa dengan keterampilan untuk merancang, mengembangkan, dan memelihara situs web.</p>
      <h1>Modul 4 : PHP</h1>
      <p>PHP (Hypertext Preprocessor) adalah bahasa pemrograman server-side yang sangat populer untuk pengembangan web. Diciptakan pada tahun 1994 oleh Rasmus Lerdorf, PHP dirancang untuk menghasilkan konten web dinamis. Sebagai bahasa open source, kode sumber PHP dapat diakses dan dimodifikasi oleh siapa saja, mendukung pertumbuhan besar komunitas pengembang. PHP dapat dengan mudah disisipkan ke dalam HTML, memungkinkan pembuatan halaman web dinamis dengan mudah. Keunggulan lainnya adalah kemampuannya berinteraksi dengan berbagai jenis basis data, seperti MySQL dan PostgreSQL, untuk menyimpan dan mengambil data. PHP juga terkenal karena kinerjanya yang cepat, dapat digunakan di berbagai lingkungan server, dan memiliki komunitas pengembang yang besar dan aktif. Meskipun memberikan fleksibilitas dalam penulisan kode, banyak praktik terbaik dan kerangka kerja mendorong pengembang PHP untuk menulis kode yang terstruktur dan mudah dibaca. Dengan semua karakteristik ini, PHP tetap menjadi pilihan utama untuk pengembangan aplikasi web dinamis.</p>
    </div>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
    <h1>Tentang Saya</h1>
        <img class="image" src="..//practice8/img/feby.png" alt="error" width="150" height="150" />
         <p><strong>Hallo aku feby!</strong></p>
         <p>Mahasiswa semester 5 prodi Teknik Informatika di Institut Teknologi Telkom Purwokerto dengan semangat juang tinggi terus belajar untuk membangun negri.
         </p>
      <!-- <h2>What?</h2>
      <p>Feby is a dedicated student pursuing a degree at Institut Teknologi Telkom Purwokerto. She is currently working towards her academic goals, which might include completing a specific major or course of study.</p>
      <h2>Where?</h2>
      <p>Feby is located in Purwokerto, a city in Central Java, Indonesia. Specifically, she is attending Institut Teknologi Telkom Purwokerto, which is part of the larger Institut Teknologi Telkom Purwokerto system.</p>
      <h2>How?</h2>
      <p>Feby is achieving her academic aspirations by attending classes, studying, and actively participating in the campus community. She likely goes to lectures, takes part in discussions, conducts research, and works on assignments and projects. Feby might also engage in extracurricular activities, seek guidance from professors or academic advisors, and make use of the university's resources to support her learning and growth.</p> -->
    </div>
  </div>
</div>

<div class="footer">
  <p>Sweet greetings from feby</p>
</div>

</body>
</html>


