<?php

	
		?>
<html>
<Head>
<title>Oferte</title>
<style>
body {
	background-image: url("travel.jpg")
}
</style>
</head>
<body>
 <div class="wrap">
 <h2>Oferte disponibile</h2>
</br>
<?
	require('interog.inc');
	$query="select o.cod_oferta,o.data1,o.data2, o.nr_zile, o.destinatia, o.transport, o.hotel1,o.hotel2, o.nr_locuri, t.cod_oferta, t.pret1,t.pret2 from oferta_elias_pr o, pret_elias_pr t where o.cod_oferta=t.cod_oferta and o.nr_locuri>0;";
	if( ($nr=InterogareSQL($query, $mat))==0) echo "Tabela vida";
	else{?>
	<table id="oferte" border=1>
	<tr><td>Destinatia</td><td>nr zile</td><td>nr locuri</td><td>transport</td><td>Data inceperii</td><td>Data incheierii</td><td>hotel </td><td>pret (EURO) </td></tr>
	<?	for($i = 0; $i < $nr; $i ++){
	$row = CitesteLinie($mat, $i);
	echo "<tr><td>",$row['destinatia'],"</td><td>",$row['nr_zile'],"</td><td>",$row['nr_locuri'],"</td><td>",$row['transport'],"</td><td>",$row['data1'],"</td><td>",$row['data2'],"</td><td>",$row['hotel1'],"</td><td>",$row['pret1'],"</td></tr>";
	echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>",$row['hotel2'],"</td><td>",$row['pret2'],"</td></tr>";
	
	}?>
	</table>
<?}?>
</div>
</body>
</html>