<html>


<head>

<title>Download Tulisan</title>

<link rel="stylesheet" href="file_css.css">


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151378191-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151378191-1');
</script>


</head>





<style>
.zoom {

  padding: 0px;
  background-color: transparent;
  transition: transform .2s; /* Animation */
  width: 100px;
  height: 100px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>

<body>


<div class="topnav">

    <a href="index.php" >Tentang</a>
    <a href="download_tulisan.php">Download Berbagai E-Book</a>
    <a href="artikel nasional.php">Artikel Jurnal Nasional</a>
    <a href="artikel internasional.php">Artikel Jurnal Internasional</a>
    <a href="hak cipta.php">Hak Cipta</a>
    <a href="seminar dan pelatihan.php">Seminar dan Pelatihan</a>


  </div>

  
  
  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
        <font size = 7>

 
        <center>

  
        Download Berbagai E-Book

</center>

        </font>
</font>
</p>	





<center>
<table width = 600 border = 0>
    <tr>
        <td width = 300>

  <center><img src = "gambar/ugi.jpg" width="300"></center>


</td>


<td width = 300>



<center>



<center>

<font style="color:#1e90ff; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">

<font size = 4><b><a href = "https://www.youtube.com/channel/UCF2nM1fSO89f7IYov41mHQg" target = "_blank"><font color = "#1e90ff">My Youtube Channel (STATKOMAT)</font></a></b></font>
</font>
</center>


	
<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCF2nM1fSO89f7IYov41mHQg&key=AIzaSyCkarGlzwNf7UTmOH4SGVw1YjHqMPo5wsE');

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


$result = curl_exec($curl);


curl_close($curl);


$result = json_decode($result, true);


$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];

$nama_channel = $result['items'][0]['snippet']['title'];

$jumlah_subscribe = $result['items'][0]['statistics']['subscriberCount'];

$jumlah_video = $result['items'][0]['statistics']['videoCount'];

$jumlah_views = $result['items'][0]['statistics']['viewCount'];


?>


 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "", { role: "style" } ],
        ["Subscriber", <?php echo json_encode($jumlah_subscribe, JSON_NUMERIC_CHECK); ?>, "#7CFC00"],
		["Video", <?php echo json_encode($jumlah_video, JSON_NUMERIC_CHECK); ?>, "#ADFF2F"],
		["Views", <?php echo json_encode($jumlah_views, JSON_NUMERIC_CHECK); ?>, "#00FF7F"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "My Youtube Channel: STATKOMAT",
        width: 300,
        height: 200,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values"></div>

</center>

</td>

</tr>


</table>
</center>








<br>
<br>










<center>



<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 5>

Terima kasih untuk rekan-rekan bagi yang sudah berdonasi. Donasi dari teman-teman akan menambah semangat STATKOMAT untuk terus berbagi ilmu tentang statistika, matematika dan pemrograman . . . . Terima kasih  &#128512;  &#128512;

<br>
<br>
<center>
  <font color = "red">Donate</font><br>

  <a href = "https://saweria.co/statkomat" target = "\blank">
  <div class="zoom">
<img src = "gambar/donasi.png" width = "100px"></img>
</div>
</a>
</center>
</font>
</font>
</center>



<center>

<br>
<br>
  
<p style="text-align:justify">

<font style="color:red; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 5>
<center>WA STATKOMAT: 0812 6200 4932</center>
</font>
</font>
</p>
</center>





<br><br>










<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio & Rezzy Eko Caraka</font><br>
Judul Buku: <font color = "green">Visualisasi Data dengan STATCAL</font><br>
Tahun: <font color = "red">2023</font><br>
Link Download: <a href = "https://drive.google.com/file/d/17chd8IOMDI408lmNb7-0H5eG-jzEr1_w/view" target = "_blank">Download</a><br>
Beli Versi Cetak: <a href = "https://bukuajar.com/visualisasi-data-dengan-statcal.html" target = "_blank">Beli</a><br>
<img src = "gambar/buku/16/1.jpg" width = "500px"></img>





</font>
</font>
</p>


<br><br>










<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio, Rezzy Eko Caraka, Elly Rosmaini Siregar</font><br>
Judul Buku: <font color = "green">Visualisasi Data dengan R</font><br>
Tahun: <font color = "red">2023</font><br>
Link Download: <a href = "https://drive.google.com/file/d/1DVwiom-ht6gYehuEU8QRLaRImuTaAlJt/view" target = "_blank">Download</a><br>
Beli Versi Cetak: <a href = "https://bukuajar.com/visualisasi-data-dengan-r.html" target = "_blank">Beli</a><br>
<img src = "gambar/buku/15/1.jpg" width = "400px"></img>
<img src = "gambar/buku/15/2.png" width = "500px"></img>




</font>
</font>
</p>




<br><br>










<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio, Anil Hakim Syofra, Robert Kurniawan, Vita Cita Emia Tarigan, Yuni Shara, Irna Triannur Lubis, Isra Suryati, Meutia Nurfahasdi, An Suci Azzahra, Muhammad Khahfi Zuhanda, Rizki Syahputra</font><br>
Judul Buku: <font color = "green">Pengenalan Mengolah Data Menggunakan SPSS, EViews, RStudio, JASP, STATA & Jamovi</font><br>
Tahun: <font color = "red">2023</font><br>
Link Download Versi 1: <a href = "https://drive.google.com/file/d/1cuhvilN1u3uFxr8iAKFPxpyazWKsFqaZ/view" target = "_blank">Download</a><br>
Link Download Versi 2: <a href = "https://drive.google.com/file/d/1Jl-MlBvQJ-3kIQUkg-qQ9xDX8p4nNBZf/view" target = "_blank">Download</a><br>
Beli Versi Cetak: <a href = "https://bukuajar.com/pengenalan-mengolah-data-menggunakan-spss-eviews-rstudio-jasp-stata-jamovi.html" target = "_blank">Beli</a><br>
<img src = "gambar/buku/14/1.jpg" width = "400px"></img>
<img src = "gambar/buku/14/2.png" width = "500px"></img>




</font>
</font>
</p>



  <br><br>














  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Partial least squares structural equation modeling (pls-sem) dengan software smartpls</font><br>
Tahun: <font color = "red">2022</font><br>
Link Download: <a href = "https://drive.google.com/file/d/1F0UPU9SnS08LLD5zGqx6xjX9G4P1DNrR/view" target = "_blank">Download</a><br>
Beli Versi Cetak: <a href = "https://bukuajar.com/partial-least-squares-structural-equation-modeling-pls-sem-dengan-software-smartpls.html" target = "_blank">Beli</a><br>
<img src = "gambar/buku/13/1.jpg" width = "400px"></img>
<img src = "gambar/buku/13/2.png" width = "500px"></img>



</font>
</font>
</p>



  <br><br>











  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio, Rizki Syahputra, Irna Triannur Lubis, Robert Kurniawan, Muhammad Khahfi Zuhanda, Wida Akasah, Yuni Shara, Meigia Nidya Sari</font><br>
Judul Buku: <font color = "green">mengolah data menggunakan software SPSS untuk pemula</font><br>
Tahun: <font color = "red">2022</font><br>
Link Download: <a href = "https://drive.google.com/file/d/19rOm5yxXOwsHtqAFQ7WJz1V-idHM4HQB/view" target = "_blank">Download</a><br>
Beli Versi Cetak: <a href = "https://bukuajar.com/belajar-mengolah-data-menggunakan-software-spss-untuk-pemula.html" target = "_blank">Beli</a><br>
<img src = "gambar/buku/12/1.png" width = "400px"></img>
<img src = "gambar/buku/12/2.jpg" width = "500px"></img>



</font>
</font>
</p>



  <br><br>
















  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio, Rezzy Eko Caraka, Rizki Syahputra, Irna Triannur Lubis, Robert Kurniawan, Muhammad Khahfi Zuhanda, Wida Akasah, Yuni Shara, Meigia Nidya Sari, An Suci Azzahra</font><br>
Judul Buku: <font color = "green">Partial Least Squares Structural Equation Modeling (PLS-SEM) dengan software WarpPLS</font><br>
Tahun: <font color = "red">2022</font><br>
Link Download: <a href = "https://drive.google.com/file/d/1tVtpD13ibZn3PN98QPWcS0Z5DckjjeRp/view" target = "_blank">Download</a><br>
Beli Versi Cetak: <a href = "https://bukuajar.com/partial-least-squares-structural-equation-modeling-pls-sem-dengan-software-warppls.html" target = "_blank">Beli</a><br>
<img src = "gambar/buku/11/1.jpg" width = "400px"></img>
<img src = "gambar/buku/11/2.png" width = "500px"></img>


</font>
</font>
</p>



  <br><br>



















  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio & Rezzy Eko Caraka</font><br>
Judul Buku: <font color = "green">Visualisasi data dengan EAVIS</font><br>
Tahun: <font color = "red">2021</font><br>
Link Download: <a href = "https://drive.google.com/file/d/1IOu4cpBFQho4jejXOEV4EKJKfN1Iigqf/view?pli=1" target = "_blank">Download</a><br>
<img src = "gambar/buku/10/1.png" width = "300px"></img>




</font>
</font>
</p>



  <br><br>













  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio & Rezzy Eko Caraka</font><br>
Judul Buku: <font color = "green">Regresi Logistik Biner dengan STATCAL (Disertai Perbandingan Hasil dengan SPSS, STATA, EViews & JASP)</font><br>
Tahun: <font color = "red">2021</font><br>
Link Download: <a href = "https://drive.google.com/file/d/1dfqmIbZ4r6nB75CZVqEf-Bpy-emUvZx7/view" target = "_blank">Download</a><br>
<img src = "gambar/buku/9/1.png" width = "400px"></img>



</font>
</font>
</p>



  <br><br>











  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio, Rezzy Eko Caraka (UI), Hendrati Dwi Mulyaningsih (UNISBA), Mery Citra Sondari (UNPAD), Sunu Widianto (UNPAD) & Robert Kurniawan (STIS)</font><br>
Judul Buku: <font color = "green">Partial Least Squares Path Modeling dengan STATCAL-PLSPM (Alternatif SmartPLS & WarpPLS)</font><br>
Tahun: <font color = "red">2019</font><br>
Link Download: <a href = "https://drive.google.com/file/d/15sKUeQ3A3vmy8wvklAxkscb5-9PPrq2b/view" target = "_blank">Download</a><br>
<img src = "gambar/buku/8/1.jpg" width = "600px"></img>



</font>
</font>
</p>



  <br><br>

























  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio & Rezzy Eko Caraka (BRIN)</font><br>
Judul Buku: <font color = "green">Pedoman dasar mengolah data dengan program aplikasi statistika Statcal</font><br>
Tahun: <font color = "red">2018</font><br>
Link Download: <a href = "https://osf.io/preprints/inarxiv/796th" target = "_blank">Download</a><br>
<img src = "gambar/buku/7/1.jpg" width = "600px"></img>



</font>
</font>
</p>



  <br><br>





















  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio & Suyanto (USU)</font><br>
Judul Buku: <font color = "green">Statistika Nonparametrik dengan SPSS, Minitab, dan R</font><br>
Tahun: <font color = "red">2017</font><br>
Link Download: <a href = "https://drive.google.com/file/d/1QdQq1eI2eSRPOCMx4VKV-yI_qKVk25vc/view" target = "_blank">Download</a><br>
<img src = "gambar/buku/6/1a.png" width = "400px"></img>



</font>
</font>
</p>



  <br><br>











  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio & Adhitya Ronnie Effendie (UGM)</font><br>
Judul Buku: <font color = "green">Belajar Bahasa Pemrograman R</font><br>
Tahun: <font color = "red">2017</font><br>
Link Download: <a href = "https://osf.io/preprints/inarxiv/ktmy2" target = "_blank">Download</a><br>
<img src = "gambar/buku/5/1a.png" width = "600px"></img>




</font>
</font>
</p>



  <br><br>










  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio & Dasapta Erwin Irawan (ITB)</font><br>
Judul Buku: <font color = "green">Belajar Statistika dengan R</font><br>
Tahun: <font color = "red">2016</font><br>
Link Download: <a href = "https://osf.io/preprints/inarxiv/ez7mg" target = "_blank">Download</a><br>
<img src = "gambar/buku/4/1a.jpg" width = "600px"></img>



</font>
</font>
</p>



  <br><br>

















  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio & Elly Rosmaini (USU)</font><br>
Judul Buku: <font color = "green">Belajar Olah Data dengan SPSS, Minitab, R, Microsoft Excel, LISREL, Amos dan SmartPLS, Disertai Beberapa Contoh Perhitungan Manual</font><br>
Tahun: <font color = "red">2016</font><br>
Link Download: <a href = "https://osf.io/preprints/inarxiv/2z79c" target = "_blank">Download</a><br>
<img src = "gambar/buku/2/1a.jpg" width = "400px"></img>



</font>
</font>
</p>



  <br><br>











  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Belajar Olah Data dengan EViews</font><br>
Tahun: <font color = "red">2015</font><br>
Link Download: <a href = "https://drive.google.com/file/d/1dLMYSViri2tqusPy7GovTaR6Cx9iJyfx/view" target = "_blank">Download</a><br>
<img src = "gambar/buku/3/1a.jpg" width = "500px"></img>


</font>
</font>
</p>



  <br><br>













  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Aplikasi Statistika dalam SPSS, Dilengkapi dengan Penyelesaian Perhitungan Secara Manual</font><br>
Tahun: <font color = "red">2013</font><br>
Link Download: <a href = "https://drive.google.com/file/d/1qR4LTqSXo41Iev_RuL1pBfcQO1-pUtXC/view" target = "_blank">Download</a><br>

<img src = "gambar/buku/1/1a.jpg"></img>

</font>
</font>
</p>



  <br><br>








<br><br>





























<center>
<table width = 1240 border = 0>
    <tr>
        <td width = 300px>

        Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Classification & Regression Trees (CART) dengan R</font><br>
<center><a href = "https://drive.google.com/file/d/17UiAej26o-46DZJAASKc72lRL1Xgtfan/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku cart.png" width = 400px></img></center>

      </td>



      <td width = 20>

</td>





<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Covariance-Based Structural Equation Modeling dengan Software AMOS</font><br>
<center><a href = "https://drive.google.com/file/d/1Ks7t8xikGq6BB09U05t4T8M_iOFtmwUy/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku amos.png" width = 400px></img></center>

</td>



<td width = 20>

</td>



<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Covariance-Based Structural Equation Modeling dengan Software LISREL</font><br>
<center><a href = "https://drive.google.com/file/d/1eP3ioP1c1D8-BsT1uaUVnPnDJ4VAnv72/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku lisrel.png" width = 400px></img></center>

</td>



</tr></table></center>










<br><br>












<center>
<table width = 1240 border = 0>
    <tr>
        <td width = 300px>

        Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Covariance-Based Structural Equation Modeling dengan Software JASP</font><br>
<center><a href = "https://drive.google.com/file/d/16upZn2Ad2oPjVe02WzCo1k14oBFbXbNl/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku jasp.png" width = 400px></img></center>

      </td>



      <td width = 20>

</td>





<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Partial Least Squares Structural Equation Modeling (PLS-SEM) dengan Software WarpPLS</font><br>
<center><a href = "https://drive.google.com/file/d/1sRTqajNl69hdp-7ZAWwSiXjdg8dgPwtL/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku warppls.png" width = 400px></img></center>

</td>



<td width = 20>

</td>



<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Partial Least Squares Structural Equation Modeling (PLS-SEM) dengan Software SmartPLS</font><br>
<center><a href = "https://drive.google.com/file/d/1jt8xoUid4PdOvB__onwLl6AVkxcXtVPw/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku pls baru.png" width = 400px></img></center>

</td>



</tr></table></center>


































<br><br>












<center>
<table width = 1240 border = 0>
    <tr>
        <td width = 300px>

        Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Metode Numerik: Contoh Kasus dan Penyelesaian</font><br>
<center><a href = "https://drive.google.com/file/d/18YGhnAPwe9a4mfqokiG57HLl4_hdc9rr/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/Cover Buku Metode Numeri.png" width = 400px></img></center>

      </td>



      <td width = 20>

</td>





<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Berbagi Ribuan Aplikasi R-Shiny</font><br>
<center><a href = "https://drive.google.com/file/d/1GBKRGP04Rw5gkUjbLuXF5nWmjssSg-2m/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover berbagi ribuan aplikasi r hiny.png" width = 400px></img></center>

</td>



<td width = 20>

</td>



<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Regresi Logistik Multinomial dengan SPSS</font><br>
<center><a href = "https://drive.google.com/file/d/1Be0rpJezyynSYetCXw2QEhGsIz3V6D8C/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku reglog multinomial.png" width = 400px></img></center>

</td>



</tr></table></center>
























<br><br>






<center>
<table width = 1240 border = 0>
    <tr>
        <td width = 300px>

        Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Membuat Peta dengan Leaflet Javascript</font><br>
<center><a href = "https://drive.google.com/file/d/1uJcgozS-YAfFzoEPo2Qf8T9mLPfiBchH/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku membuat peta leaflet js.png" width = 400px></img></center>

      </td>



      <td width = 20>

</td>





<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Aplikasi Maple dalam Kalkulus</font><br>
<center><a href = "https://drive.google.com/file/d/1j52K0jCXGMUcrvZV4epznoMnlp89ihHw/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku kalkulus.png" width = 400px></img></center>

</td>



<td width = 20>

</td>



<td width = 300px valign = "top">
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Simulasi Korelasi Matriks dan Jumlah Sampel pada PLS SEM</font><br>
<center><a href = "https://drive.google.com/file/d/16z5W7MIqsFVHTq6iiHl6N4-q-vXyARjz/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku trik signifikan.png" width = 400px></img></center>

</td>



</tr></table></center>


























































<br><br>






<center>
<table width = 1240 border = 0>
    <tr>
        <td width = 300px>

        Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Regresi Berganda dengan STATA: Data Keuangan</font><br>
<center><a href = "https://drive.google.com/file/d/1cZcYrS6pa6aihVYPohOijHIYL2NxtsbE/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/Cover Buku Stata Regresi Data Keuangan.png" width = 400px></img></center>

      </td>



      <td width = 20>

</td>





<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Regresi Berganda dengan SPSS: Data Keuangan</font><br>
<center><a href = "https://drive.google.com/file/d/1ZHiU1vXIuxxxbHgoOkLIxrJsJ7-dLnxC/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/Cover Buku SPSS Regresi Data Keuangan.png" width = 400px></img></center>

</td>



<td width = 20>

</td>



<td width = 300px valign = "top">
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Regresi Berganda dengan EVIEWS: Data Keuangan</font><br>
<center><a href = "https://drive.google.com/file/d/1cVprSB-rTUYXQLTkjX9o9JMzotwKD4Qw/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/Cover Buku EViews Regresi Data Keuangan.png" width = 400px></img></center>

</td>



</tr></table></center>













































<br><br>






<center>
<table width = 1240 border = 0>
    <tr>
        <td width = 300px>

        Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Vector Auto-Regression (VAR) & Vector Error Correction Model (VECM) dengan Software EViews</font><br>
<center><a href = "https://drive.google.com/file/d/1stkonm6Q9qXyniciAnDsBt2_zLV6FNrF/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku vecm eviews.png" width = 400px></img></center>

      </td>



      <td width = 20>

</td>





<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Vector Auto-Regression (VAR) & Vector Error Correction Model (VECM) dengan Software RStudio</font><br>
<center><a href = "https://drive.google.com/file/d/1ggBIT9UowO6bOmWyNv6AJGB8nEBzIND4/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku vecm r.png" width = 400px></img></center>

</td>



<td width = 20>

</td>



<td width = 300px valign = "top">
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Vector Auto-Regression (VAR) & Vector Error Correction Model (VECM) dengan Software STATA</font><br>
<center><a href = "https://drive.google.com/file/d/1oo-1N99bIFQUEOFAkdxOuoYfCQ4PS2ES/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku vecm stata.png" width = 400px></img></center>

</td>



</tr></table></center>







































<br><br>






<center>
<table width = 1240 border = 0>
    <tr>
        <td width = 300px>

        Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Two-Way ANOVA dengan SPSS, R & STATCAL</font><br>
<center><a href = "https://drive.google.com/file/d/1ZRxVxOWxC34wZVz1XRCjS7qpBx7zrxKl/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/cover buku two way anova.png" width = 400px></img></center>

      </td>



      <td width = 20>

</td>





<td width = 300px>
Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Buku: <font color = "green">Kalkulus Integral: Contoh Kasus & Penyelesaian, Disertai Aplikasi Software Maple, Python & MATLAB</font><br>
<center><a href = "https://drive.google.com/file/d/1Yh82eqN-4YXxHxSeSwzXFaN4Ir_DoQ6_/view?usp=sharing" target = "\blank"><font color = "red"><b>Download<b></font></a></center><br><br>
<center><img src = "gambar/buku/17/Cover Buku Kalkulus Integral.png" width = 400px></img></center>

</td>



<td width = 20>

</td>



<td width = 300px valign = "top">

</td>



</tr></table></center>































<br><br>








<br><br>

<br><br>


<br><br><br><br>



















<br><br><br><br><br><br><br><br><br><br><br><br>






















</body>






</html>