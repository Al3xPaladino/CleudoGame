<!DOCTYPE html>
<?php session_start(); ?>
<html>

<style type="text/css">
	*{
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	body{
		background-color: #54aedb;
	}
	#bordo{
		background-color: #54aedb;
	}
	input[type=text]{
		width: 50px;
		text-align: center;
	}
	#nomi{
		background-color: white;
		padding-left: 5px;
	}
	input[type=button], input[type=submit], input[type=reset]{
		background-color: #d2691e;
		border-color: yellow;
		border-radius: 10px;
	}
</style>

<head>
	<title>Cluedo</title>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, minimum-scale=0.1, maximum-scale=10.0" />-->
</head>

<body>
	<p><b>Legenda:<br>'O' per essere SICURO che ha quella carta<br>'X' per essere SICURO che NON ha quella carta<br>'?' per dire che POTREBBE avere quella carta</b></p>
<form method="GET" action="#">
	<table border=0 cellpadding="0" cellspacing="6">
		<tr>
			<td id=bordo colspan="2">
				<center><b>INVESTIGATORI</b></center>
			</td>
			<td>
				<input type="text" name="player1" value=<?php echo @$_SESSION["n1"] ?> >
			</td>
			<td>
				<input type="text" name="player2" value=<?php echo @$_SESSION["n2"] ?> >
			</td>
			<td>
				<input type="text" name="player3" value=<?php echo @$_SESSION["n3"] ?> >
			</td>
			<td>
				<input type="text" name="player4" value=<?php echo @$_SESSION["n4"] ?> >
			</td>
			<td>
				<input type="text" name="player5" value=<?php echo @$_SESSION["n5"] ?> >
			</td>
			<td>
				<input type="text" name="player6" value=<?php echo @$_SESSION["n6"] ?> >
			</td>
		</tr>

		<tr>
			<td id=nomi>
				<b>CHI?</b>
			</td>
			<td id=bordo colspan="7">
				
			</td>
		</tr>

		<tr id=scelta1>
			<td id=nomi style="background-color:green;">
				Green
			</td>
			<td>
				<input type="text" name="Nscelta10" value=<?php echo @$_SESSION["Nz1"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta11" value=<?php echo @$_SESSION["Nu1"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta12" value=<?php echo @$_SESSION["Nd1"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta13" value=<?php echo @$_SESSION["Nt1"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta14" value=<?php echo @$_SESSION["Nq1"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta15" value=<?php echo @$_SESSION["Nc1"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta16" value=<?php echo @$_SESSION["Ns1"] ?> >
			</td>
		</tr>

		<tr id=scelta2>
			<td id=nomi style="background-color:#daa520;">
				Mustard
			</td>
			<td>
				<input type="text" name="Nscelta20" value=<?php echo @$_SESSION["Nz2"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta21" value=<?php echo @$_SESSION["Nu2"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta22" value=<?php echo @$_SESSION["Nd2"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta23" value=<?php echo @$_SESSION["Nt2"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta24" value=<?php echo @$_SESSION["Nq2"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta25" value=<?php echo @$_SESSION["Nc2"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta26" value=<?php echo @$_SESSION["Ns2"] ?> >
			</td>
		</tr>

		<tr id=scelta3>
			<td id=nomi style="background-color:#f400a1;">
				Orchid
			</td>
			<td>
				<input type="text" name="Nscelta30" value=<?php echo @$_SESSION["Nz3"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta31" value=<?php echo @$_SESSION["Nu3"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta32" value=<?php echo @$_SESSION["Nd3"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta33" value=<?php echo @$_SESSION["Nt3"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta34" value=<?php echo @$_SESSION["Nq3"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta35" value=<?php echo @$_SESSION["Nc3"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta36" value=<?php echo @$_SESSION["Ns3"] ?> >
			</td>
		</tr>

		<tr id=scelta4>
			<td id=nomi style="background-color:blue;">
				Peacock
			</td>
			<td>
				<input type="text" name="Nscelta40" value=<?php echo @$_SESSION["Nz4"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta41" value=<?php echo @$_SESSION["Nu4"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta42" value=<?php echo @$_SESSION["Nd4"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta43" value=<?php echo @$_SESSION["Nt4"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta44" value=<?php echo @$_SESSION["Nq4"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta45" value=<?php echo @$_SESSION["Nc4"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta46" value=<?php echo @$_SESSION["Ns4"] ?> >
			</td>
		</tr>

		<tr id=scelta5>
			<td id=nomi style="background-color:purple;">
				Plum
			</td>
			<td>
				<input type="text" name="Nscelta50" value=<?php echo @$_SESSION["Nz5"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta51" value=<?php echo @$_SESSION["Nu5"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta52" value=<?php echo @$_SESSION["Nd5"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta53" value=<?php echo @$_SESSION["Nt5"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta54" value=<?php echo @$_SESSION["Nq5"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta55" value=<?php echo @$_SESSION["Nc5"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta56" value=<?php echo @$_SESSION["Ns5"] ?> >
			</td>
		</tr>

		<tr id=scelta6>
			<td id=nomi style="background-color:red;">
				Scarlett
			</td>
			<td>
				<input type="text" name="Nscelta60" value=<?php echo @$_SESSION["Nz6"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta61" value=<?php echo @$_SESSION["Nu6"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta62" value=<?php echo @$_SESSION["Nd6"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta63" value=<?php echo @$_SESSION["Nt6"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta64" value=<?php echo @$_SESSION["Nq6"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta65" value=<?php echo @$_SESSION["Nc6"] ?> >
			</td>
			<td>
				<input type="text" name="Nscelta66" value=<?php echo @$_SESSION["Ns6"] ?> >
			</td>
		</tr>

		<tr>
			<td id=nomi>
				<b>CHE COSA?</b>
			</td>
			<td id=bordo colspan="7">
				
			</td>
		</tr>

		<tr id=scelta7>
			<td id=nomi>
				Candeliere
			</td>
			<td>
				<input type="text" name="Ascelta10" value=<?php echo @$_SESSION["Az1"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta11" value=<?php echo @$_SESSION["Au1"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta12" value=<?php echo @$_SESSION["Ad1"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta13" value=<?php echo @$_SESSION["At1"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta14" value=<?php echo @$_SESSION["Aq1"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta15" value=<?php echo @$_SESSION["Ac1"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta16" value=<?php echo @$_SESSION["As1"] ?> >
			</td>
		</tr>

		<tr id=scelta8>
			<td id=nomi>
				Pugnale
			</td>
			<td>
				<input type="text" name="Ascelta20" value=<?php echo @$_SESSION["Az2"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta21" value=<?php echo @$_SESSION["Au2"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta22" value=<?php echo @$_SESSION["Ad2"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta23" value=<?php echo @$_SESSION["At2"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta24" value=<?php echo @$_SESSION["Aq2"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta25" value=<?php echo @$_SESSION["Ac2"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta26" value=<?php echo @$_SESSION["As2"] ?> >
			</td>
		</tr>

		<tr id=scelta9>
			<td id=nomi>
				Tubo di piombo
			</td>
			<td>
				<input type="text" name="Ascelta30" value=<?php echo @$_SESSION["Az3"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta31" value=<?php echo @$_SESSION["Au3"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta32" value=<?php echo @$_SESSION["Ad3"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta33" value=<?php echo @$_SESSION["At3"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta34" value=<?php echo @$_SESSION["Aq3"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta35" value=<?php echo @$_SESSION["Ac3"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta36" value=<?php echo @$_SESSION["As3"] ?> >
			</td>
		</tr>

		<tr id=scelta10>
			<td id=nomi>
				Pistola
			</td>
			<td>
				<input type="text" name="Ascelta40" value=<?php echo @$_SESSION["Az4"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta41" value=<?php echo @$_SESSION["Au4"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta42" value=<?php echo @$_SESSION["Ad4"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta43" value=<?php echo @$_SESSION["At4"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta44" value=<?php echo @$_SESSION["Aq4"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta45" value=<?php echo @$_SESSION["Ac4"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta46" value=<?php echo @$_SESSION["As4"] ?> >
			</td>
		</tr>

		<tr id=scelta11>
			<td id=nomi>
				Corda
			</td>
			<td>
				<input type="text" name="Ascelta50" value=<?php echo @$_SESSION["Az5"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta51" value=<?php echo @$_SESSION["Au5"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta52" value=<?php echo @$_SESSION["Ad5"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta53" value=<?php echo @$_SESSION["At5"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta54" value=<?php echo @$_SESSION["Aq5"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta55" value=<?php echo @$_SESSION["Ac5"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta56" value=<?php echo @$_SESSION["As5"] ?> >
			</td>
		</tr>

		<tr id=scelta12>
			<td id=nomi>
				Chiave inglese
			</td>
			<td>
				<input type="text" name="Ascelta60" value=<?php echo @$_SESSION["Az6"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta61" value=<?php echo @$_SESSION["Au6"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta62" value=<?php echo @$_SESSION["Ad6"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta63" value=<?php echo @$_SESSION["At6"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta64" value=<?php echo @$_SESSION["Aq6"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta65" value=<?php echo @$_SESSION["Ac6"] ?> >
			</td>
			<td>
				<input type="text" name="Ascelta66" value=<?php echo @$_SESSION["As6"] ?> >
			</td>
		</tr>

		<tr>
			<td id=nomi>
				<b>DOVE?</b>
			</td>
			<td id=bordo colspan="7">
				
			</td>
		</tr>

		<tr id=scelta13>
			<td id=nomi>
				Sala da ballo
			</td>
			<td>
				<input type="text" name="Sscelta10" value=<?php echo @$_SESSION["Sz1"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta11" value=<?php echo @$_SESSION["Su1"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta12" value=<?php echo @$_SESSION["Sd1"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta13" value=<?php echo @$_SESSION["St1"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta14" value=<?php echo @$_SESSION["Sq1"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta15" value=<?php echo @$_SESSION["Sc1"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta16" value=<?php echo @$_SESSION["Ss1"] ?> >
			</td>
		</tr>

		<tr id=scelta14>
			<td id=nomi>
				Sala da biliardo
			</td>
			<td>
				<input type="text" name="Sscelta20" value=<?php echo @$_SESSION["Sz2"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta21" value=<?php echo @$_SESSION["Su2"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta22" value=<?php echo @$_SESSION["Sd2"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta23" value=<?php echo @$_SESSION["St2"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta24" value=<?php echo @$_SESSION["Sq2"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta25" value=<?php echo @$_SESSION["Sc2"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta26" value=<?php echo @$_SESSION["Ss2"] ?> >
			</td>
		</tr>

		<tr id=scelta15>
			<td id=nomi>
				Serra
			</td>
			<td>
				<input type="text" name="Sscelta30" value=<?php echo @$_SESSION["Sz3"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta31" value=<?php echo @$_SESSION["Su3"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta32" value=<?php echo @$_SESSION["Sd3"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta33" value=<?php echo @$_SESSION["St3"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta34" value=<?php echo @$_SESSION["Sq3"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta35" value=<?php echo @$_SESSION["Sc3"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta36" value=<?php echo @$_SESSION["Ss3"] ?> >
			</td>
		</tr>

		<tr id=scelta16>
			<td id=nomi>
				Sala da Pranzo
			</td>
			<td>
				<input type="text" name="Sscelta40" value=<?php echo @$_SESSION["Sz4"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta41" value=<?php echo @$_SESSION["Su4"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta42" value=<?php echo @$_SESSION["Sd4"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta43" value=<?php echo @$_SESSION["St4"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta44" value=<?php echo @$_SESSION["Sq4"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta45" value=<?php echo @$_SESSION["Sc4"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta46" value=<?php echo @$_SESSION["Ss4"] ?> >
			</td>
		</tr>

		<tr id=scelta17>
			<td id=nomi>
				Ingresso
			</td>
			<td>
				<input type="text" name="Sscelta50" value=<?php echo @$_SESSION["Sz5"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta51" value=<?php echo @$_SESSION["Su5"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta52" value=<?php echo @$_SESSION["Sd5"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta53" value=<?php echo @$_SESSION["St5"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta54" value=<?php echo @$_SESSION["Sq5"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta55" value=<?php echo @$_SESSION["Sc5"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta56" value=<?php echo @$_SESSION["Ss5"] ?> >
			</td>
		</tr>

		<tr id=scelta18>
			<td id=nomi>
				Cucina
			</td>
			<td>
				<input type="text" name="Sscelta60" value=<?php echo @$_SESSION["Sz6"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta61" value=<?php echo @$_SESSION["Su6"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta62" value=<?php echo @$_SESSION["Sd6"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta63" value=<?php echo @$_SESSION["St6"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta64" value=<?php echo @$_SESSION["Sq6"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta65" value=<?php echo @$_SESSION["Sc6"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta66" value=<?php echo @$_SESSION["Ss6"] ?> >
			</td>
		</tr>

		<tr id=scelta19>
			<td id=nomi>
				Bibblioteca
			</td>
			<td>
				<input type="text" name="Sscelta70" value=<?php echo @$_SESSION["Sz7"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta71" value=<?php echo @$_SESSION["Su7"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta72" value=<?php echo @$_SESSION["Sd7"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta73" value=<?php echo @$_SESSION["St7"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta74" value=<?php echo @$_SESSION["Sq7"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta75" value=<?php echo @$_SESSION["Sc7"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta76" value=<?php echo @$_SESSION["Ss7"] ?> >
			</td>
		</tr>

		<tr id=scelta20>
			<td id=nomi>
				Salotto
			</td>
			<td>
				<input type="text" name="Sscelta80" value=<?php echo @$_SESSION["Sz8"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta81" value=<?php echo @$_SESSION["Su8"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta82" value=<?php echo @$_SESSION["Sd8"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta83" value=<?php echo @$_SESSION["St8"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta84" value=<?php echo @$_SESSION["Sq8"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta85" value=<?php echo @$_SESSION["Sc8"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta86" value=<?php echo @$_SESSION["Ss8"] ?> >
			</td>
		</tr>

		<tr id=scelta21>
			<td id=nomi>
				Studio
			</td>
			<td>
				<input type="text" name="Sscelta90" value=<?php echo @$_SESSION["Sz9"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta91" value=<?php echo @$_SESSION["Su9"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta92" value=<?php echo @$_SESSION["Sd9"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta93" value=<?php echo @$_SESSION["St9"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta94" value=<?php echo @$_SESSION["Sq9"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta95" value=<?php echo @$_SESSION["Sc9"] ?> >
			</td>
			<td>
				<input type="text" name="Sscelta96" value=<?php echo @$_SESSION["Ss9"] ?> >
			</td>
			<td>
				<input type="button" onclick="calcola();" value="INVIO">
				<input type="button" name="salva" onclick="function(){location.href='save.php'}" value="SALVA">
				<input type="reset" name="resetta" onclick="function(){location.href='reset.php'}" value="RESETTARE">
			</td>
		</tr>
	</table>
</form>
</body>

<script type="text/javascript">
	function calcola() {
		var x, app, nome, i, j;
		for (j=1; j<22; j++){
			nome = "scelta" + j;
			//alert(nome);
			x = document.getElementById(nome).getElementsByTagName("input");
			app=99;
			for (i=0; i<7; i++){
				if (x[i].value == "●"||x[i].value == "O"){
					app = i;
				}
			}
			//alert(app);
			if (app!=99){
				for (i=app+1; i!=app; i++){
					if (i>6){
						if (app==0){
							i=-1;
						}
						else {
							i=0;
							x[i].value = "X";
						}
					}
					else {
						x[i].value = "X";
					}
				}
			}
		}
	}
</script>

</html>