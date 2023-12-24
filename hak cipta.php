<html>


<head>


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

  
        Hak Cipta

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




<p style="text-align:justify">

<font style="color:orange; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
        <font size = 6>

 
        <center>

  
       Berikut beberapa hak kami ya.

</center>

        </font>
</font>
</p>	







<br><br>










<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Judul Ciptaan: <font color = "orange">STATCAL (Statistical Calculator)</font><br>
      Jenis Ciptaan: <font color = "red">Program Komputer</font><br>
     Pemegang Hak Cipta: <font color = "green">Prana Ugiana Gio & Rezzy Eko Caraka</font><br>

Uraian Ciptaan: <font color = "purple">
STATCAL mulai dibuat oleh Prana Ugiana Gio (Founder) dan Rezzy Eko Caraka (Co-Founder) pada tahun 2017. STATCAL dibuat dengan menggunakan bahasa pemrograman R, di RStudio, dengan menggunakan berbagai paket R (R packages), yang mana paket R shiny adalah paket utama. STATCAL merupakan software statistik berbasis website. Berbasis website berarti proses pengolahan data dilakukan di browser, seperti Google Chrome, Mozilla Firefox, Internet Explore, Opera dan sebagainya. Namun perlu diingar bahwa pada saat proses pengolahan data tidak perlu terkoneksi internet. Di dalam STATCAL, Anda dapat mengakses secara langsung berbagai tulisan dan video terkait penggunaan menu-menu di STATCAL. Tulisan dan video tersebut akan memandu Anda bagaimana cara menggunakan suatu menu di STATCAL. Di samping itu, beberapa menu di STATCAL dilengkapi bantuan interpretasi dalam bahasa Indonesia yang dapat memudahkan Anda pada saat melakukan interpretasi hasil statistik.</font><br>


Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/hak cipta/hak cipta statcal/1.png" width="700"></center>

<br>


<center><img src = "gambar/hak cipta/hak cipta statcal/2.png" width="500"></center>

<br>


<center><img src = "gambar/hak cipta/hak cipta statcal/3.png" width="1200"></center>

<br>




</font>
</font>
</p>


















<br>
<br><br>




<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>
      Judul Ciptaan: <font color = "orange">REGCAL (Program Komputer Software Berbasis Web)</font><br>
      Jenis Ciptaan: <font color = "red">Program Komputer</font><br>
     Pemegang Hak Cipta: <font color = "green">Prana Ugiana Gio & Rezzy Eko Caraka</font><br>

Uraian Ciptaan: <font color = "purple">

Regression Calculator (REGCAL) merupakan suatu aplikasi statistika berbasis website yang dirancang untuk melakukan regresi linear. REGCAL dapat diakses secara online pada alamat https://gioprana.shinyapps.io/REGCAL/ atau dapat digunakan secara offline dengan mendownload di https://statcal.com/. REGCAL dirancang menggunakan Bahasa pemrograman R (https://www.r-project.org/), di RStudio, melibatkan berbagai paket R. REGCAL dikembangkan oleh Prana Ugiana Gio & Rezzy Eko Caraka, beserta tim.<br>

Tahun: <font color = "grey">2022</font><br>


<br><br>


<center><img src = "gambar/hak cipta/hak cipta regcal/1.png" width="1200"></center>

<br>


<center><img src = "gambar/hak cipta/hak cipta regcal/2.png" width="500"></center>

<br>


<center><img src = "gambar/hak cipta/hak cipta regcal/3.png" width="600"></center>

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