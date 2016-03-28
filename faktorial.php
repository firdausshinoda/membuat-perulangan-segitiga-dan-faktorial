<html>
<title>
  FAKTORIAL
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
  <sidebar>
		<div id="sidebar">
				<ul class="slider">
					<li><a class="page-scrool" href="#for"><h3>Menggunakan For</h3></a></li>
					<li><a class="page-scrool" href="#while"><h3>Menggunakan While</h3></a></li>
					<li><a class="page-scrool" href="#dowhile"><h3>Menggunakan Do-While</h3></a></li>
				</ul>
			</div>
		</div>
	</sidebar>

  <div class="form-for" id="for">
    <div class="intro-for">
      <h1>Faktorial Menggunakan For</h1><br>
    </div>
    <div class="fm-for1">
      <div class="for-script1">
        <form name="frm01" method="post">
          <table class="tabel-for">
            <tr>
              <td>Masukkan Angka</td>
              <td><input type="text" name="txtAngka" size="20" class="input-for"/></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="hasil" value="Hasil" class="btn-for"/></td>
            </tr>
          </table>
          <?php
          error_reporting(0);
          if($_POST['hasil']!=''){
            $angka=$_POST['txtAngka'];
            function faktorial($angka){
              if($angka<=1){
                $hasil=1;
                return $hasil;
              }elseif($angka>1){
                for($i=1; $i<=$angka; $i++){
                  $hasil=$angka * faktorial($angka-1);
                }
                return $hasil;
              }
            }
            echo "Angka : ".$angka."<br>";
            echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);
          }
          ?>
        </form>
      </div>
    </div>
    <div class="fm-for2">
      <div class="for-script2">
        Script : <br><br>
        <?php
        echo "&lt;php<br/>";
        echo "error_reporting(0);<br/>";
        echo "if(\$_POST['hasil']!=''){<br/>";
        echo "&nbsp&nbsp\$angka=\$_POST['txtAngka'];<br/>";
        echo "&nbsp&nbspfunction faktorial(\$angka){<br/>";
        echo "&nbsp&nbsp&nbsp&nbspif(\$angka<=1){<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$hasil=1;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspreturn \$hasil;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp}elseif(\$angka>1){<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspfor(\$i=1; \$i<=\$angka; \$i++){<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$hasil=\$angka * faktorial(\$angka-1);<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp}<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspreturn \$hasil;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp}<br/>";
        echo "&nbsp&nbsp}<br/>";
        echo "&nbsp&nbspecho \"Angka :\".\$angka.\"&lt;/br&gt\";<br/>";
        echo "&nbsp&nbspecho \"Faktorial dari \".\" \".\$angka.\" \".\"adalah :\".\" \".faktorial(\$angka);<br/>";
        echo "}<br/>";
        echo "?&gt";
        ?>
      </div>
    </div>
  </div>

  <div class="form-while" id="while">
    <div class="intro-while">
      <h1>Faktorial Menggunakan While</h1><br>
    </div>
    <div class="fm-while1">
      <div class="while-script1">
        <form name="frm02" method="post">
          <table class="tabel-while">
            <tr>
              <td>Masukkan Angka</td>
              <td><input type="text" name="txtAngka-while" size="20" class="input-while"/></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="hasil-while" value="Hasil" class="btn-while"/></td>
            </tr>
          </table>
          <?php
          error_reporting(0);
          if($_POST['hasil-while']!=''){
            $angkawhile=$_POST['txtAngka-while'];
            function faktorial($angkawhile){
              if($angkawhile<=1){
                $hasilwhile=1;
                return $hasilwhile;
              }elseif($angkawhile>1){
                          $i=1;
                          while($i<=5)
                          {
                              $i=$i+1;
                               $hasilwhile=$angkawhile * faktorial($angkawhile-1);
                          }
                          return $hasilwhile;
              }
            }
            echo "Angka : ".$angkawhile."<br>";
            echo "Faktorial dari "." ".$angkawhile." "."adalah :"." ".faktorial($angkawhile);
          }
          ?>
        </form>
      </div>
    </div>
    <div class="fm-while2">
      <div class="while-script2">
        Script : <br><br>
        <?php
        echo "&lt;php<br/>";
        echo "error_reporting(0);<br/>";
        echo "if(\$_POST['hasil-while']!=''){<br/>";
        echo "&nbsp&nbsp\$angkawhile=\$_POST['txtAngka-while'];<br/>";
        echo "&nbsp&nbspfunction faktorial(\$angkawhile){<br/>";
        echo "&nbsp&nbsp&nbsp&nbspif(\$angkawhile<=1){<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$hasilwhile=1;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspreturn \$hasilwhile;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp}elseif(\$angkawhile>1){<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$i=1;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspwhile(\$i<=5)<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$i=\$i+1;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$hasilwhile=\$angkawhile * faktorial(\$angkaw-1);<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp}<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspreturn \$hasilwhile;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp}<br/>";
        echo "&nbsp&nbsp}<br/>";
        echo "&nbsp&nbspecho \"Angka : \".\$angkawhile.\"&lt;br&gt\";<br/>";
        echo "&nbsp&nbspecho \"Faktorial dari \".\" \".\$angkawhile.\" \".\"adalah :\".\" \".faktorial(\$angkawhile);<br/>";
        echo "}<br/>";
        echo "?&gt";
        ?>
      </div>
    </div>
  </div>

  <div class="form-dowhile" id="dowhile">
    <div class="intro-dowhile">
      <h1>Faktorial Menggunakan Do-While</h1><br>
    </div>
    <div class="fm-dowhile1">
      <div class="dowhile-script1">
        <form name="frm03" method="post">
          <table class="tabel-dowhile">
            <tr>
              <td>Masukkan Angka</td>
              <td><input type="text" name="txtAngka-dowhile" size="20" class="input-dowhile"/></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="hasil-dowhile" value="Hasil" class="btn-dowhile"/></td>
            </tr>
          </table>
          <?php
          error_reporting(0);
          if($_POST['hasil-dowhile']!=''){
            $angkadowhile=$_POST['txtAngka-dowhile'];
            function faktorial($angkadowhile){
              if($angkadowhile<=1){
                $hasildowhile=1;
                return $hasildowhile;
              }elseif($angkadowhile>1){
                          $i=1;
                          do
                          {
                               $hasildowhile=$angkadowhile * faktorial($angkadowhile-1);
                               $i=$i+1;
                          }while($i<=5);
                          return $hasildowhile;
              }
            }
            echo "Angka :".$angkadowhile."<br>";
            echo "Faktorial dari "." ".$angkadowhile." "."adalah :"." ".faktorial($angkadowhile);
          }
          ?>
        </form>
      </div>
    </div>
    <div class="fm-dowhile2">
      <div class="dowhile-script2">
        Script : <br><br>
        <?php
        echo "&lt;php<br/>";
        echo "error_reporting(0);<br/>";
        echo "if(\$_POST['hasil-dowhile']!=''){<br/>";
        echo "&nbsp&nbsp\$angkadowhile=\$_POST['txtAngka-dowhile'];<br/>";
        echo "&nbsp&nbspfunction faktorial(\$angkadowhile){<br/>";
        echo "&nbsp&nbsp&nbsp&nbspif(\$angkadowhile<=1){<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$hasildowhile=1;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspreturn \$hasildowhile;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp}elseif(\$angkadowhile>1){<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$i=1;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspdo<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$hasildowhile=\$angkadowhile * faktorial(\$angkadowhile-1);<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\$i=\$i+1;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp}while(\$i<=5);<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspreturn \$hasildowhile;<br/>";
        echo "&nbsp&nbsp&nbsp&nbsp}<br/>";
        echo "&nbsp&nbsp}<br/>";
        echo "&nbsp&nbspecho \"Angka :\".\$angkadowhile.\"&lt;br%gt\";<br/>";
        echo "&nbsp&nbspecho \"Faktorial dari \".\" \".\$angkadowhile.\" \".\"adalah :\".\" \".faktorial(\$angkadowhile);<br/>";
        echo "}<br/>";
        echo "?&gt";
        ?>
      </div>
    </div>
  </div>
  <div class="kaki">
    <marquee> <font face = "Calibri">Copyright ©
      <a class="brand" color ='red' href="http://www.firdausns44.blogspot.com">firdausns44.blogspot.com</a>
    </marquee>
	</div>
</body>
</html>
