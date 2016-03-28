<html>
<title>
  SEGITIGA
</title>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
  <nav>
    <ul id="menu">
      <li><a href="index.php"> HOME </a></li>
      <li><a href="segitiga.php"> SEGITIGA </a></li>
      <li><a href="faktorial.php"> FAKTORIAL </a></li>
    </ul>
  </nav>
  <div class="form-segitiga">
    <div class="intro-segitiga">
      <h1>Segitiga Menggunakan Perulangan For Dan While</h1><br>
    </div>
    <div class="fm-segitiga1">
      <div class="segitiga-script1">
        Hasil : <br><br>
        <?php
        for ($i=1; $i <=5 ; $i++) {
          $j=1;
          while ($j <= $i) {
            $j++;
            echo $i;
          }
          echo "<br/>";
        }
         ?>
      </div>
    </div>
    <div class="fm-segitiga2">
      <div class="segitiga-script2">
        Script : <br><br>
        <?php
        echo "&lt;?php<br/>";
        echo "for (\$i=1; \$i <=5 ; \$i++) {<br/>";
        echo "&nbsp&nbsp\$j=1;<br/>";
        echo "&nbsp&nbspwhile (\$j <= \$i) {<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp\$j++;<br/>";
        echo "&nbsp&nbsp&nbsp&nbspecho \$i;<br/>";
        echo "&nbsp&nbsp}<br/>";
        echo "&nbsp&nbspecho &lt;/br&gt;<br/>";
        echo "}<br/>";
        echo "?&gt<br/>";
        ?>
      </div>
    </div>
    <div class="kaki-sgt">
      <marquee> <font face = "Calibri">Copyright ©
        <a class="brand" color ='red' href="http://www.firdausns44.blogspot.com">firdausns44.blogspot.com</a>
      </marquee>
  	</div>
  </div>
</body>
</html>
