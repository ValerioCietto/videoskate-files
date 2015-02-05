<?php


$verz="1.0";
$comPort = "/dev/ttyUSB0"; /*change to correct com port */

if (isset($_POST["rcmd"])) {
$rcmd = $_POST["rcmd"];
switch ($rcmd) {
     case avanti:
        $fp =fopen($comPort, "w");
	
  	fwrite($fp, '0'); /* this is the number that it will write */
        
  	fclose($fp);
  	break;
     case indietro:
        $fp =fopen($comPort, "w");
        
 	fwrite($fp, '1'); /* this is the number that it will write */
 	fclose($fp);
  	break;
     case Slow:
        $fp =fopen($comPort, "w");
        sleep(2);
  	fwrite($fp, 2); /* this is the number that it will write */
  	fclose($fp);
  	break;
     case Medium:
        $fp =fopen($comPort, "w");
        sleep(2);
  	fwrite($fp, 3); /* this is the number that it will write */
  	fclose($fp);
  	break;
     case Fast:
        $fp =fopen($comPort, "w");
  	fwrite($fp, 4); /* this is the number that it will write */
  	fclose($fp);
  	break;
    case Right:
        $fp =fopen($comPort, "w");
        sleep(2);
  	fwrite($fp, 'a'); /* this is the number that it will write */
  	fclose($fp);
  	break;
    case Left:
        $fp =fopen($comPort, "w");
        sleep(2);
  	fwrite($fp, 'd'); /* this is the number that it will write */
  	fclose($fp);
  	break;
    default:
  	die('Controlla che la porta sia giusta, arduino sia collegato e riprova');
    }

}
?>
<html>
<body>

<center><h1>Prova comunicazione</h1><b>Version <?php echo $verz; ?></b></center>
<center>
<br />
<br />
<br />

<form method="post" action="<?php echo $PHP_SELF;?>">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="avanti" name="rcmd"><br/>
<br />
&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="sinistra" name="rcmd">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="destra" name="rcmd"><br/>
<br />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="indietro" name="rcmd"><br/>
<br />
&nbsp&nbsp&nbsp
<input type="submit" value="lento" name="rcmd">
<input type="submit" value="medio" name="rcmd">
<input type="submit" value="veloce" name="rcmd">
</center>
<br />
<br />
<br />
<br />
<br />
<br />

</form>
</body>
</html>
