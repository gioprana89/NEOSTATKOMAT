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

<title>Artikel Jurnal Internasional</title>

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

  
        Artikel Jurnal Internasional

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

  
       Berikut beberapa artikel kami (kolaborasi) yang dipublikasi di jurnal internasional.

</center>

        </font>
</font>
</p>	








<br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Robert Kurniawan, Novan Adi Adi Nugroho, Ahmad Fudholi, Agung Purwanto, Bagus Sumargo, Prana Ugiana Gio, Sri Kuswantono Wongsonadi</font><br>
Judul Artikel: <font color = "green">The ecological footprint of industrial value added and energy consumption in Indonesia</font><br>
Tahun: <font color = "grey">2023</font><br>
Jurnal: <font color = "orange">International Journal of Energy Sector Management</font><br>
Link: <a href = "https://www.emerald.com/insight/content/doi/10.1108/IJESM-05-2023-0006/full/html" target = "_blank">https://www.emerald.com/insight/content/doi/10.1108/IJESM-05-2023-0006/full/html</a><br>

<center><img src = "gambar/artikel jurnal internasional/1/12.png" width="250"></center>


</font>
</font>
</p>










































<br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Budhi Fatanza Wiratama, Robert Kurniawan, Mulyanto, Mohamad Andrian Isnaeni, Bagus Sumargo, Prana Ugiana Gio</font><br>
Judul Artikel: <font color = "green">Measuring the physical infrastructure development as poverty reduction program in Kalimantan, Indonesia</font><br>
Tahun: <font color = "grey">2023</font><br>
Jurnal: <font color = "orange">Cities</font><br>
Link: <a href = "https://www.sciencedirect.com/science/article/abs/pii/S026427512300327X" target = "_blank">https://www.sciencedirect.com/science/article/abs/pii/S026427512300327X</a><br>

<center><img src = "gambar/artikel jurnal internasional/1/11.png" width="250"></center>


</font>
</font>
</p>








































<br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Robert Kurniawan, Anas Rulloh Budi Alamsyah, Ahmad Fudholi, Agung Purwanto, Bagus Sumargo, Prana Ugiana Gio, Sri Kuswantono Wongsonadi, Alton Endarwanto Hadi Susanto</font><br>
Judul Artikel: <font color = "green">Impacts of industrial production and air quality by remote sensing on nitrogen dioxide concentration and related effects: An econometric approach</font><br>
Tahun: <font color = "grey">2023</font><br>
Jurnal: <font color = "orange">Environmental Pollution</font><br>
Link: <a href = "https://www.sciencedirect.com/science/article/abs/pii/S0269749123012149" target = "_blank">https://www.sciencedirect.com/science/article/abs/pii/S0269749123012149</a><br>

<center><img src = "gambar/artikel jurnal internasional/1/10.png" width="250"></center>


</font>
</font>
</p>




































<br><br>








<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Toni Toharudin, Rezzy Eko Caraka, Indah Reski Pratiwi, Yunho Kim, Prana Ugiana Gio, Anjar Dimara Sakti, Maengseok Noh, Farid Azhar Lutfi Nugraha, Resa Septiani Pontoh, Tafia Hasna Putri, Thalita Safa Azzahra, Jessica Jesslyn Cerelia, Gumgum Darmawan, Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Boosting Algorithm to handle Unbalanced Classification of PM2.5 Concentration Levels by Observing Meteorological Parameters in Jakarta-Indonesia using AdaBoost, XGBoost, CatBoost, and LightGBM</font><br>
Tahun: <font color = "grey">2023</font><br>
Jurnal: <font color = "orange">IEEE Access</font><br>
Link: <a href = "https://ieeexplore.ieee.org/document/10093874/authors#authors" target = "_blank">https://ieeexplore.ieee.org/document/10093874/authors#authors</a><br>

<center><img src = "gambar/artikel jurnal internasional/1/9.png" width="250"></center>


</font>
</font>
</p>










<br>
<br><br>





<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka, Irwanda Wisnu Wardhana,Yunho Kim, Anjar Dimara Sakti, Prana Ugiana Gio, Maengseok Noh & Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Connectivity, sport events, and tourism development of Mandalika’s special economic zone: A perspective from big data cognitive analytics</font><br>
Tahun: <font color = "grey">2023</font><br>
Jurnal: <font color = "orange">Cogent Business & Management</font><br>
Link: <a href = "https://www.tandfonline.com/doi/full/10.1080/23311975.2023.2183565" target = "_blank">https://www.tandfonline.com/doi/full/10.1080/23311975.2023.2183565</a><br>

<center><img src = "gambar/artikel jurnal internasional/1/1.png" width="250"></center>


</font>
</font>
</p>










<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka, Youngjo Lee, Jeongseop Han, Hangbin Lee, Maengseok Noh, Il Do Ha, Prana Ugiana Gio & Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Albatross analytics a hands-on into practice: statistical and data science application</font><br>
Tahun: <font color = "grey">2022</font><br>
Jurnal: <font color = "orange">Journal of Big Data</font><br>
Link: <a href = "https://journalofbigdata.springeropen.com/articles/10.1186/s40537-022-00626-y" target = "_blank">https://journalofbigdata.springeropen.com/articles/10.1186/s40537-022-00626-y</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/8.png" width="250"></center>

</font>
</font>
</p>















<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka, Maengseok Noh, Youngjo Lee, Toni Toharudin, Yusra, Avia Enggar Tyasti, Achlan Fahlevi Royanow, Dimas Purnama Dewata, Prana Ugiana Gio, Mohammad Basyuni, Bens Pardamean</font><br>
Judul Artikel: <font color = "green">The Impact of Social Media Influencers Raffi Ahmad and Nagita Slavina on Tourism Visit Intentions across Millennials and Zoomers Using a Hierarchical Likelihood Structural Equation Model</font><br>
Tahun: <font color = "grey">2022</font><br>
Jurnal: <font color = "orange">Sustainability</font><br>
Link: <a href = "https://www.mdpi.com/2071-1050/14/1/524" target = "_blank">https://www.mdpi.com/2071-1050/14/1/524</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/2.png" width="250"></center>

</font>
</font>
</p>





































<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka, Rung-Ching Chen, Su-Wen Huang, Shyue-Yow Chiou, Prana Ugiana Gio & Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Correction to: Big data ordination towards intensive care event count cases using fast computing GLLVMS</font><br>
Tahun: <font color = "grey">2022</font><br>
Jurnal: <font color = "orange">BMC Medical Research Methodology</font><br>
Link: <a href = "https://bmcmedresmethodol.biomedcentral.com/articles/10.1186/s12874-022-01602-z" target = "_blank">https://bmcmedresmethodol.biomedcentral.com/articles/10.1186/s12874-022-01602-z</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/7.png" width="250"></center>

</font>
</font>
</p>












<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Faisal Anggoro, Rezzy Eko Caraka, Fajar Agung Prasetyo, Muthia Ramadhani, Prana Ugiana Gio, Rung-Ching Chen, Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Revisiting Cluster Vulnerabilities towards Information and Communication Technologies in the Eastern Island of Indonesia Using Fuzzy C Means</font><br>
Tahun: <font color = "grey">2022</font><br>
Jurnal: <font color = "orange">Sustainability</font><br>
Link: <a href = "https://www.mdpi.com/2071-1050/14/6/3428" target = "_blank">https://www.mdpi.com/2071-1050/14/6/3428</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/2.png" width="250"></center>

</font>
</font>
</p>






































<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka, Robert Kurniawan,Bahrul Ilmi Nasution, Jamilatuzzahro Jamilatuzzahro, Prana Ugiana Gio, Mohammad Basyuni and Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Micro, Small, and Medium Enterprises’ Business Vulnerability Cluster in Indonesia: An Analysis Using Optimized Fuzzy Geodemographic Clustering</font><br>
Tahun: <font color = "grey">2021</font><br>
Jurnal: <font color = "orange">Sustainability</font><br>
Link: <a href = "https://www.mdpi.com/2071-1050/13/14/7807" target = "_blank">https://www.mdpi.com/2071-1050/13/14/7807</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/2.png" width="250"></center>

</font>
</font>
</p>














<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka, Maengseok Noh, Rung-Ching Chen, Youngjo Lee, Prana Ugiana Gio and Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Connecting Climate and Communicable Disease to Penta Helix Using Hierarchical Likelihood Structural Equation Modelling</font><br>
Tahun: <font color = "grey">2021</font><br>
Jurnal: <font color = "orange">Symmetry</font><br>
Link: <a href = "https://www.mdpi.com/2073-8994/13/4/657/htm" target = "_blank">https://www.mdpi.com/2073-8994/13/4/657/htm</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/3.png" width="250"></center>

</font>
</font>
</p>






















<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka, Hasbi Yasin, Rung-Ching Chen, Noor Ell Goldameir, Budi Darmawan Supatmanto, Toni Toharudin, Mohammad Basyuni, Prana Ugiana Gio and Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Evolving Hybrid Cascade Neural Network Genetic Algorithm Space–Time Forecasting</font><br>
Tahun: <font color = "grey">2021</font><br>
Jurnal: <font color = "orange">Symmetry</font><br>
Link: <a href = "https://www.mdpi.com/2073-8994/13/7/1158" target = "_blank">https://www.mdpi.com/2073-8994/13/7/1158</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/3.png" width="250"></center>

</font>
</font>
</p>



























<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka ,Yusra Yusra, Toni Toharudin, Rung-Ching Chen, Mohammad Basyuni, Vilzati Juned, Prana Ugiana Gio and Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Did Noise Pollution Really Improve during COVID-19? Evidence from Taiwan</font><br>
Tahun: <font color = "grey">2021</font><br>
Jurnal: <font color = "orange">Sustainability</font><br>
Link: <a href = "https://www.mdpi.com/2071-1050/13/11/5946/htm" target = "_blank">https://www.mdpi.com/2071-1050/13/11/5946/htm</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/2.png" width="250"></center>

</font>
</font>
</p>






















<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka, Rung Ching Chen, Young jo Lee, Prana Ugiana Gio, Arif Budiarto and Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Latent Regression and Ordination Risk of Infectious Disease and Climate</font><br>
Tahun: <font color = "grey">2021</font><br>
Proceeding: <font color = "orange">Procedia Computer Science (5th International Conference on Computer Science and Computational Intelligence 2020)</font><br>
Link: <a href = "https://www.sciencedirect.com/science/article/pii/S1877050920324388" target = "_blank">https://www.sciencedirect.com/science/article/pii/S1877050920324388</a><br>


</font>
</font>
</p>























<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Rezzy Eko Caraka, Youngjo Lee, Rung Ching Chen, Toni Toharudin, Prana Ugiana Gio, Robert Kurniawan and Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Cluster Around Latent Variable for Vulnerability Towards Natural Hazards, Non-Natural Hazards, Social Hazards in West Papua</font><br>
Tahun: <font color = "grey">2020</font><br>
Jurnal: <font color = "orange">IEEE Access</font><br>
Link: <a href = "https://ieeexplore.ieee.org/document/9262851/authors#authors" target = "_blank">https://ieeexplore.ieee.org/document/9262851/authors#authors</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/4.png" width="250"></center>

</font>
</font>
</p>

















<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Yusra Yusra, Rezzy Eko Caraka, Arawati Agus, Ahmad Azmi Mohd Ariffin, Prana Ugiana Gio, Rung Ching Chend and Youngjo Lee</font><br>
Judul Artikel: <font color = "green">An Investigation of Online Food Aggretator (OFA) Service: Do Online and Offline Service Quality Distinct?</font><br>
Tahun: <font color = "grey">2020</font><br>
Jurnal: <font color = "orange">Serbian Journal of Management</font><br>
Link: <a href = "https://scindeks-clanci.ceon.rs/data/pdf/1452-4864/2020/1452-48642002277Y.pdf" target = "_blank">https://scindeks-clanci.ceon.rs/data/pdf/1452-4864/2020/1452-48642002277Y.pdf</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/5.png" width="250"></center>

</font>
</font>
</p>





























<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">R.E. Caraka, Y. Lee, R. Kurniawan, R. Herliansyah, P.A. Kaban, B.I. Nasution, P.U. Gio, R.C. Chen, T. Toharudin, B. Pardamean</font><br>
Judul Artikel: <font color = "green">Impact of COVID-19 Large Scale Restriction on Environment and Economy in Indonesia</font><br>
Tahun: <font color = "grey">2020</font><br>
Jurnal: <font color = "orange">Global Journal of Environmental Science and Management</font><br>
Link: <a href = "https://www.gjesm.net/article_40288.html" target = "_blank">https://www.gjesm.net/article_40288.html</a><br>


<center><img src = "gambar/artikel jurnal internasional/1/6.png" width="250"></center>

</font>
</font>
</p>




















<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio, Rezzy Eko Caraka, Elly Rosmalni, Rizki Syahputra, Irna Triannur Lubis, Devidayanty Siregar, Yuni Shara & Bens Pardamean</font><br>
Judul Artikel: <font color = "green">Financial Data Statistics Programs</font><br>
Tahun: <font color = "grey">2019</font><br>
Conferences: <font color = "orange">2018 Indonesian Association for Pattern Recognition International Conference (INAPR)</font><br>
Link: <a href = "https://ieeexplore.ieee.org/document/8627032/authors#authors" target = "_blank">https://ieeexplore.ieee.org/document/8627032/authors#authors</a><br>


</font>
</font>
</p>












<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Dian Utami Sutiksno, Prana Ugiana Gio, Rezzy Eko Caraka and Ansari Saleh Ahmar</font><br>
Judul Artikel: <font color = "green">Brief Overview of STATCAL Statistical Application Program</font><br>
Tahun: <font color = "grey">2018</font><br>
Jurnal: <font color = "orange">Journal of Physics: Conference Series</font><br>
Link: <a href = "https://iopscience.iop.org/article/10.1088/1742-6596/1028/1/012244/meta" target = "_blank">https://iopscience.iop.org/article/10.1088/1742-6596/1028/1/012244/meta</a><br>


</font>
</font>
</p>









<br>
<br><br>


<p style="text-align:justify">

<font style="color:#1114af; text-align: justify; font-family: 'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif;">
      <font size = 4>

Author: <font color = "red">Prana Ugiana Gio & Elly Rosmaini Siregar</font><br>
Judul Artikel: <font color = "green">The Robustness of Two Independent Samples t Test Using Monte Carlo Simulation with R</font><br>
Tahun: <font color = "grey">2018</font><br>
Conferences: <font color = "orange">IOP Conference Series: Materials Science and Engineering</font><br>
Link: <a href = "https://iopscience.iop.org/article/10.1088/1757-899X/300/1/012030" target = "_blank">https://iopscience.iop.org/article/10.1088/1757-899X/300/1/012030</a><br>


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