<html>


<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151378191-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151378191-1');
</script>

<title>Seminar & Pelatihan</title>

<link rel="stylesheet" href="file_css.css">

</head>

<body>


<div class="topnav">

    <a href="index.php" >Tentang</a>
    <a href="download_tulisan.php">Download Berbagai E-Book</a>
    <a href="artikel nasional.php">Artikel Jurnal Nasional</a>
    <a href="artikel internasional.php">Artikel Jurnal Internasional</a>
    <a href="hak cipta.php">Hak Cipta</a>
    <a href="seminar dan pelatihan.php">Seminar dan Pelatihan</a>
    <a href="donasi.php">Donasi</a>

  </div>

  
  
  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
        <font size = 7>

 
        <center>

  
        Seminar dan Pelatihan

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













<br><br>


























<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Kegiatan Memberi Pelatihan Pengolahan Data Menggunakan Aplikasi SmartPLS di Universitas Medan Area (UMA), pada 24 Januari 2023</font><br>
      Tahun: <font color = "grey">2023</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2023/1/1.jpg" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2023/1/2.jpg" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2023/1/3.jpg" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2023/1/4.jpg" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2023/1/5.jpg" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2023/1/6.jpg" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2023/1/7.jpg" width="400"></center>
<br>


<br>

<br>



</font>
</font>
</p>






























<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Kegiatan Kuliah Tamu: Riset dan Statistik Terapan Structural Equation Modeling, yang Diselenggarakan oleh Universitas Indonesia pada 16 Desember 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/1/1.jpg" width="500"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/1/2.jpg" width="500"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/1/3.jpg" width="600"></center>

<br>


<br>

<br>



</font>
</font>
</p>





















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Narasumber dalam Kegiatan Kuliah Tamu dengan Teman "Smart Partial Least Squares (PLS) pada 21 November 2022, yang Diselenggarakan oleh Universitas Gadjah Mada</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/2/1.jpg" width="500"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/2/2.jpg" width="500"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/2/3.jpg" width="600"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/2/4.jpg" width="600"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2022/2/5.jpg" width="600"></center>

<br>


<br>

<br>



</font>
</font>
</p>

























<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pelatihan Olah Data Statistik yang Diselenggarakan oleh ebizmark pada 5-8 Desember 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/3/1.jpg" width="700"></center>

<br>



<br>

<br>



</font>
</font>
</p>










<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pelatihan Statistika Dasar dengan Software SPSS, yang Diselenggarakan oleh Himpunan Mahasiswa Matematika (HMM) Universitas Sumatera Utara (USU) pada 30 Juli 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/4/1.jpg" width="700"></center>

<br>



<br>

<br>



</font>
</font>
</p>







<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Sosialisasi Penggunaan Software STATCAL yang Diselenggarakan oleh Politeknik Pertanian Negeri Samarinda, pada 26 Juli 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/5/1.jpg" width="700"></center>

<br>



<br>

<br>



</font>
</font>
</p>

















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pelatihan Aplikasi SmartPLS yang Diselenggarakan oleh Universitas Trisakti pada 4 Juli 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/6/1.jpg" width="700"></center>

<br>


<center><img src = "gambar/seminar dan pelatihan/2022/6/2.jpg" width="700"></center>

<br>


<br>

<br>



</font>
</font>
</p>




















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pelatihan Pengolahan Data Menggunakan Aplikasi SmartPLS, yang Diselenggarakan oleh Universitas Sriwijaya pada 30-31 Mei 2022</font><br>
      Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2022/7/1.jpg" width="700"></center>

<br>


<center><img src = "gambar/seminar dan pelatihan/2022/7/2.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2022/7/3.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2022/7/4.jpg" width="700"></center>

<br>


<br>

<br>



</font>
</font>
</p>



















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Narasumber pada Kuliah KMMI Pengenalan R-Shiny yang Diselenggarakan oleh Universitas PGRI Adi Buana Surabaya pada 6 Oktober 2021.</font><br>
      Tahun: <font color = "grey">2021</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2021/1/1.png" width="700"></center>

<br>



<br>

<br>



</font>
</font>
</p>











<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Narasumber pada Pelatihan Series II Analisis Data STATCAL yang Diselenggarakan oleh PERBANAS INSTITUTE pada 30 September 2021.</font><br>
      Tahun: <font color = "grey">2021</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2021/2/1.png" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2021/2/2.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2021/2/3.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2021/2/4.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2021/2/5.png" width="700"></center>

<br>


<br>

<br>



</font>
</font>
</p>


















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pemateri pada Acara "Sosialisasi-Kolaborasi Workshop Software Matematika dan Rumpunnya 2021" yang Diselenggarakan oleh IndoMS pada 25 September 2021.</font><br>
      Tahun: <font color = "grey">2021</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2021/3/1.png" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2021/3/2.png" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2021/3/3.jpg" width="700"></center>


<br>


<br>

<br>



</font>
</font>
</p>










<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pemateri pada Acara "Pengolahan dan Analisis Data Kuantitatif" yang Diselenggarakan oleh Lembaga Penelitian dan Pengabdian Masyarakat Universitas Prima Indonesia (UNPRI) pada 22 September 2021.</font><br>
      Tahun: <font color = "grey">2021</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2021/4/1.png" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2021/4/2.png" width="700"></center>

<br>


<br>


<br>

<br>



</font>
</font>
</p>



















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Narasumber pada Pelatihan SmartPLS yang Diselenggarakan oleh Universitas Gadjah Mada, Fakultas Pertanian, Departemen Sosial Ekonomi pada 13 Agustus 2021, Jumat.</font><br>
      Tahun: <font color = "grey">2021</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2021/5/1.png" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2021/5/2.png" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2021/5/3.jpg" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2021/5/4.jpg" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2021/5/5.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2021/5/6.jpg" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2021/5/7.jpg" width="700"></center>

<br>



<br>


<br>

<br>



</font>
</font>
</p>


















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pemateri pada Workshop SPSS, "Cara Jitu Mengolah Data" yang Diselenggarakan oleh Himpunan Mahasiswa Akuntansi Universitas Sumatra Utara (USU).</font><br>
      Tahun: <font color = "grey">2021</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2021/6/1.jpg" width="700"></center>

<br>



<br>


<br>

<br>



</font>
</font>
</p>
















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Sebagai Pembicara (Invited Speaker) pada Acara "World Class Professor 2020 Workshop Series, Teaching Statistics" yang Diselenggarakan oleh Universitas Gadjah Mada, Fakultas Matematika dan Ilmu Pengetahuan Alam.</font><br>
      Tahun: <font color = "grey">2020</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2020/1/1.png" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2020/1/2.png" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2020/1/3.jpg" width="700"></center>



<br>

<br>



</font>
</font>
</p>














<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Nara Sumber pada Acara "Pengolahan & Visualisasi Data dengan STATCAL & ugigrafik.com" yang Diselenggarakan Oleh Komunitas Kolaborasi Tridharma Perguruan Tinggi</font><br>
      Tahun: <font color = "grey">2020</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2020/2/1.jpg" width="700"></center>

<br>


<br>

<br>



</font>
</font>
</p>










<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Dosen Tamu pada Acara "Kuliah Umum Metodologi Penelitian, Mengolah Data Statistika untuk Penelitian Menggunakan STATCAL" yang Diselenggarakan oleh Universitas Padjadjaran (UNPAD)</font><br>
      Tahun: <font color = "grey">2020</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2020/3/1.jpg" width="700"></center>

<br>


<br>

<br>



</font>
</font>
</p>






<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pemateri pada Acara "Kuliah Umum, Olah Data dengan STATCAL" yang Diselenggarakan FMIPA Universitas Negeri Medan (FMIPA UNIMED)</font><br>
      Tahun: <font color = "grey">2020</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2020/4/1.jpg" width="700"></center>

<br>


<br>

<br>



</font>
</font>
</p>





















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pemateri pada Workshop "R Programming Languange & How to Build a Statistical Application with R Shiny" yang Diselenggarakan Oleh Prana Ugiana Gio di Hotel Ibis Style, Medan</font><br>
      Tahun: <font color = "grey">2020</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2020/5/1.jpg" width="700"></center>

<br>


<center><img src = "gambar/seminar dan pelatihan/2020/5/2.jpg" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2020/5/3.jpg" width="700"></center>

<br>

<br>

<br>



</font>
</font>
</p>










<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Pemateri pada Workshop "PLS SEM Data Processing with WarpPLS & STATCAL plus Mendeley" yang Diselenggarakan Oleh Prana Ugiana Gio & Victor Hulu di Hotel Ibis Style, Medan</font><br>
      Tahun: <font color = "grey">2020</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2020/6/1.jpg" width="700"></center>

<br>


<center><img src = "gambar/seminar dan pelatihan/2020/6/2.jpg" width="700"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2020/6/3.jpg" width="700"></center>
<br>

<center><img src = "gambar/seminar dan pelatihan/2020/6/4.jpg" width="700"></center>
<br>

<center><img src = "gambar/seminar dan pelatihan/2020/6/5.jpg" width="700"></center>
<br>

<center><img src = "gambar/seminar dan pelatihan/2020/6/6.jpg" width="700"></center>
<br>

<center><img src = "gambar/seminar dan pelatihan/2020/6/7.jpg" width="700"></center>
<br>

<center><img src = "gambar/seminar dan pelatihan/2020/6/8.jpg" width="700"></center>

<br>

<br>

<br>



</font>
</font>
</p>

















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Juara Paper Kategori Utama (Rekomendasi Scopus) pada "Forum Riset Ekonomi dan Keuangan Syariah 2019" oleh Otoritas Jasa Keuangan (OJK)</font><br>
      Tahun: <font color = "grey">2019</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2019/1/1.jpg" width="700"></center>

<br>


<br>

<br>

<br>



</font>
</font>
</p>



















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Memperkenalkan STATCAL di Laboratorium Komputer, Jurusan Matematika, Universitas Sumatra Utara</font><br>
      Tahun: <font color = "grey">2018</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2018/1/1.jpg" width="400"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2018/1/2.jpg" width="400"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/1/3.jpg" width="400"></center>

<br>

<br>

<br>

<br>



</font>
</font>
</p>














<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Memperkenalkan STATCAL di Jurusan Matematika, Universitas Asaha, Sumatra Utara</font><br>
      Tahun: <font color = "grey">2018</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2018/2/1.jpg" width="400"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2018/2/2.jpg" width="400"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/2/3.jpg" width="400"></center>

<br>

<br>

<br>

<br>



</font>
</font>
</p>










<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">STATCAL Terpilih 5 Inovasi Terbaik pada Acara "Youth Economic Leadership Program-Bank Indonesia Institute" yang Diselenggarakan oleh Bank Indonesia Institute di Hotel The Trans Luxury, Bandung</font><br>
      Tahun: <font color = "grey">2018</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2018/3/1.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2018/3/2.jpg" width="700"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/3/3.jpg" width="600"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/3/4.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/3/5.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/3/6.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/3/7.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/3/8.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/3/9.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/3/10.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/3/11.jpg" width="600"></center>

<br>

<br>

<br>

<br>



</font>
</font>
</p>





















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Memperkenalkan STATCAL pada Mahasiswa Psikologi, Universitas Sumatra Utara</font><br>
      Tahun: <font color = "grey">2018</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2018/4/1.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2018/4/2.jpg" width="700"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/4/3.jpg" width="600"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/4/4.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/4/5.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/4/6.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/4/7.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/4/8.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/4/9.jpg" width="600"></center>

<br>

<br>

<br>

<br>



</font>
</font>
</p>












<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Memperkenalkan STATCAL di Jurusan Psikologi, Universitas Indonesia (UI)</font><br>
      Tahun: <font color = "grey">2018</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2018/5/1.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2018/5/2.jpg" width="700"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/5/3.jpg" width="600"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/5/4.jpg" width="600"></center>

<br>

<br>

<br>

<br>



</font>
</font>
</p>

















<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Memperkenalkan STATCAL di Universitas Padjadjaran (UNPAD)</font><br>
      Tahun: <font color = "grey">2018</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2018/6/1.jpg" width="700"></center>

<br>
<center><img src = "gambar/seminar dan pelatihan/2018/6/2.jpg" width="700"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/6/3.jpg" width="600"></center>

<br><center><img src = "gambar/seminar dan pelatihan/2018/6/4.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/6/5.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/6/6.jpg" width="600"></center>
<br><center><img src = "gambar/seminar dan pelatihan/2018/6/7.jpg" width="600"></center>

<br>

<br>

<br>

<br>



</font>
</font>
</p>























<br><br><br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Kegiatan Memberi Pelatihan Singkat SPSS, yang Diselenggarakan oleh Himpunan Mahasiswa Statistika (HIMASTA), Universitas Sumatera Utara, pada 22 Oktober 2016</font><br>
      Tahun: <font color = "grey">2016</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2016/1/1.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2016/1/2.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2016/1/3.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2016/1/4.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/5.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/6.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/7.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/8.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/9.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/10.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2016/1/11.JPG" width="400"></center>
<br>

<br>

<br>



</font>
</font>
</p>


















<br>
<br><br>
















<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Kegiatan: <font color = "orange">Kegiatan Memberi Seminar SPSS, yang Diselenggarakan oleh Himpunan Mahasiswa Statistika (HIMASTA), Universitas Sumatera Utara, pada 6 Juni 2015</font><br>
      Tahun: <font color = "grey">2015</font><br>


<br><br>


<center><img src = "gambar/seminar dan pelatihan/2015/1/1.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2015/1/2.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2015/1/3.JPG" width="400"></center>

<br>

<center><img src = "gambar/seminar dan pelatihan/2015/1/4.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/5.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/6.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/7.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/8.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/9.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/10.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/11.JPG" width="400"></center>
<br>

<center><img src = "gambar/seminar dan pelatihan/2015/1/12.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/13.JPG" width="400"></center>
<br>
<center><img src = "gambar/seminar dan pelatihan/2015/1/14.JPG" width="400"></center>
<br>

<br>

<br>



</font>
</font>
</p>










































  <br><br>

<br><br>








<br><br>

<br><br>


<br><br><br><br>



















<br><br><br><br><br><br><br><br><br><br><br><br>






















</body>






</html>