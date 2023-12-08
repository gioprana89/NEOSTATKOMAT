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

<title>Artikel Jurnal Nasional</title>

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

  </div>

  
  
  <p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
        <font size = 7>

 
        <center>

  
        Artikel Jurnal Nasional

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

  
       Berikut beberapa artikel kami (kolaborasi) yang dipublikasi di jurnal nasional.

</center>

        </font>
</font>
</p>	
















<br><br>










<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio</font><br>
Judul Artikel: <font color = "green">Earning per Shares Sebagai Pemediasi Pengaruh Kinerja Keuangan terhadap Harga Saham: Studi Empiris pada Perusahaan Sektor Healthcare Papan Utama di Bursa Efek Indonesia</font><br>
Tahun: <font color = "grey">2023</font><br>
Jurnal: <font color = "orange">Jurnal Riset Akuntansi dan Keuangan</font><br>
Link: <a href = "https://ejournal.upi.edu/index.php/JRAK/article/view/50228" target = "_blank">https://ejournal.upi.edu/index.php/JRAK/article/view/50228</a><br>



</font>
</font>
</p>





























<br><br>










<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Muhammad Khahfi Zuhanda, Anil Hakim Syofra Syofra, Devy Mathelinea, Prana Ugiana Gio, Yuan Anisa Anisa, Nanda Novita</font><br>
Judul Artikel: <font color = "green">Analysis of twitter user sentiment on the monkeypox virus issue using the nrc lexicon</font><br>
Tahun: <font color = "grey">2023</font><br>
Jurnal: <font color = "orange">Jurnal Mantik</font><br>
Link: <a href = "https://iocscience.org/ejournal/index.php/mantik/article/view/3502" target = "_blank">https://iocscience.org/ejournal/index.php/mantik/article/view/3502</a><br>



</font>
</font>
</p>










<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Helmi Ramadan, Prana Ugiana Gio, Elly Rosmaini</font><br>
Judul Artikel: <font color = "green">Monte Carlo Simulation Approach to Determine the Optimal Solution of Probabilistic Supply Cost</font><br>
Tahun: <font color = "grey">2020</font><br>
Jurnal: <font color = "orange">Journal of Research in Mathematics Trends and Technology</font><br>
Link: <a href = "https://talenta.usu.ac.id/jormtt/article/view/3752" target = "_blank">https://talenta.usu.ac.id/jormtt/article/view/3752</a><br>



</font>
</font>
</p>












<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Dasapta Erwin Irawan, Muhammad Aswan Syahputra, Prana Ugiana Gio, Deny Juanda Puradimaja</font><br>
Judul Artikel: <font color = "green">Thermostats: an Open Source Shiny App for Your Open Data Repository</font><br>
Tahun: <font color = "grey">2019</font><br>
Jurnal: <font color = "orange">JOIV : International Journal on Informatics Visualization</font><br>
Link: <a href = "http://joiv.org/index.php/joiv/article/view/282" target = "_blank">http://joiv.org/index.php/joiv/article/view/282</a><br>



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