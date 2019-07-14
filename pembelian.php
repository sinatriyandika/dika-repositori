<html>
<head>
<title>TUGAS PROYEK</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" ></script>
</head>
<body class="index">
<div class="ketengah" align="center"><h1>TOKO MAINAN</h1></div>
	<center>
		
	<table class="table">
	<div class="table-responsive">
		<p >
		<table class="table  table-striped table-hover">
			<tr>
				<td align="center" colspan="2"><h4> KELOMPOK 7 </h4></td>
			</tr>
			<tr>
				<td align="center">
					<h4>(1800018069)<br>(1800018078)<br>(1800018089)<br>(1800018103)<br>(1800018112)</h4></td> 
				<td>
					<h4> HERU ADI ANGGARA<br>ANISA DEWI PUTRI<br>ILHAM AGUSTIAN SAPUTRA<br>DIANDA RIFALDI<br>SINATRIYANDIKA HARUMAWAN</h4></td>
			</tr>
	</table>
<a aling="center" href="buku.html" class="btn btn-primary btn-lg">Beli Barang</a> | 
<a aling="center" href="lihat.php" class="btn btn-info btn-lg">Struk Pembayaran</a>
</center>
<br>
<p>
<?php
$filecounter="counter.txt";
$fl=fopen($filecounter,"r+");
$hit=fread($fl,filesize($filecounter));
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF><tr>");
echo("<td width=250 valign=middle align=center>");
echo("<font face=verdana size=2 color=#FF0000><b>");
echo("Anda pengunjung yang ke:");
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl);
$fl=fopen($filecounter,"w+");
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit));
fclose($fl);
?>
</body>