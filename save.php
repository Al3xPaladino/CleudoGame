<?php
	session_start();
if(isset($_POST['player1'])){
	$_SESSION['n1'] = $_POST['player1'];
	$_SESSION['n2'] = $_POST['player2'];
	$_SESSION['n3'] = $_POST['player3'];
	$_SESSION['n4'] = $_POST['player4'];
	$_SESSION['n5'] = $_POST['player5'];
	$_SESSION['n6'] = $_POST['player6'];
	/*---------------------*/

	$_SESSION['Nz1'] = $_POST['Nscelta10'];
	$_SESSION['Nu1'] = $_POST['Nscelta11'];
	$_SESSION['Nd1'] = $_POST['Nscelta12'];
	$_SESSION['Nt1'] = $_POST['Nscelta13'];
	$_SESSION['Nq1'] = $_POST['Nscelta14'];
	$_SESSION['Nc1'] = $_POST['Nscelta15'];
	$_SESSION['Ns1'] = $_POST['Nscelta16'];

	$_SESSION['Nz2'] = $_POST['Nscelta20'];
	$_SESSION['Nu2'] = $_POST['Nscelta21'];
	$_SESSION['Nd2'] = $_POST['Nscelta22'];
	$_SESSION['Nt2'] = $_POST['Nscelta23'];
	$_SESSION['Nq2'] = $_POST['Nscelta24'];
	$_SESSION['Nc2'] = $_POST['Nscelta25'];
	$_SESSION['Ns2'] = $_POST['Nscelta26'];
	
	$_SESSION['Nz3'] = $_POST['Nscelta30'];
	$_SESSION['Nu3'] = $_POST['Nscelta31'];
	$_SESSION['Nd3'] = $_POST['Nscelta32'];
	$_SESSION['Nt3'] = $_POST['Nscelta33'];
	$_SESSION['Nq3'] = $_POST['Nscelta34'];
	$_SESSION['Nc3'] = $_POST['Nscelta35'];
	$_SESSION['Ns3'] = $_POST['Nscelta36'];

	$_SESSION['Nz4'] = $_POST['Nscelta40'];
	$_SESSION['Nu4'] = $_POST['Nscelta41'];
	$_SESSION['Nd4'] = $_POST['Nscelta42'];
	$_SESSION['Nt4'] = $_POST['Nscelta43'];
	$_SESSION['Nq4'] = $_POST['Nscelta44'];
	$_SESSION['Nc4'] = $_POST['Nscelta45'];
	$_SESSION['Ns4'] = $_POST['Nscelta46'];

	$_SESSION['Nz5'] = $_POST['Nscelta50'];
	$_SESSION['Nu5'] = $_POST['Nscelta51'];
	$_SESSION['Nd5'] = $_POST['Nscelta52'];
	$_SESSION['Nt5'] = $_POST['Nscelta53'];
	$_SESSION['Nq5'] = $_POST['Nscelta54'];
	$_SESSION['Nc5'] = $_POST['Nscelta55'];
	$_SESSION['Ns5'] = $_POST['Nscelta56'];
	
	$_SESSION['Nz6'] = $_POST['Nscelta60'];
	$_SESSION['Nu6'] = $_POST['Nscelta61'];
	$_SESSION['Nd6'] = $_POST['Nscelta62'];
	$_SESSION['Nt6'] = $_POST['Nscelta63'];
	$_SESSION['Nq6'] = $_POST['Nscelta64'];
	$_SESSION['Nc6'] = $_POST['Nscelta65'];
	$_SESSION['Ns6'] = $_POST['Nscelta66'];
	/*------------------*/

	$_SESSION['Az1'] = $_POST['Ascelta10'];
	$_SESSION['Au1'] = $_POST['Ascelta11'];
	$_SESSION['Ad1'] = $_POST['Ascelta12'];
	$_SESSION['At1'] = $_POST['Ascelta13'];
	$_SESSION['Aq1'] = $_POST['Ascelta14'];
	$_SESSION['Ac1'] = $_POST['Ascelta15'];
	$_SESSION['As1'] = $_POST['Ascelta16'];

	$_SESSION['Az2'] = $_POST['Ascelta20'];
	$_SESSION['Au2'] = $_POST['Ascelta21'];
	$_SESSION['Ad2'] = $_POST['Ascelta22'];
	$_SESSION['At2'] = $_POST['Ascelta23'];
	$_SESSION['Aq2'] = $_POST['Ascelta24'];
	$_SESSION['Ac2'] = $_POST['Ascelta25'];
	$_SESSION['As2'] = $_POST['Ascelta26'];
	
	$_SESSION['Az3'] = $_POST['Ascelta30'];
	$_SESSION['Au3'] = $_POST['Ascelta31'];
	$_SESSION['Ad3'] = $_POST['Ascelta32'];
	$_SESSION['At3'] = $_POST['Ascelta33'];
	$_SESSION['Aq3'] = $_POST['Ascelta34'];
	$_SESSION['Ac3'] = $_POST['Ascelta35'];
	$_SESSION['As3'] = $_POST['Ascelta36'];

	$_SESSION['Az4'] = $_POST['Ascelta40'];
	$_SESSION['Au4'] = $_POST['Ascelta41'];
	$_SESSION['Ad4'] = $_POST['Ascelta42'];
	$_SESSION['At4'] = $_POST['Ascelta43'];
	$_SESSION['Aq4'] = $_POST['Ascelta44'];
	$_SESSION['Ac4'] = $_POST['Ascelta45'];
	$_SESSION['As4'] = $_POST['Ascelta46'];

	$_SESSION['Az5'] = $_POST['Ascelta50'];
	$_SESSION['Au5'] = $_POST['Ascelta51'];
	$_SESSION['Ad5'] = $_POST['Ascelta52'];
	$_SESSION['At5'] = $_POST['Ascelta53'];
	$_SESSION['Aq5'] = $_POST['Ascelta54'];
	$_SESSION['Ac5'] = $_POST['Ascelta55'];
	$_SESSION['As5'] = $_POST['Ascelta56'];
	
	$_SESSION['Az6'] = $_POST['Ascelta60'];
	$_SESSION['Au6'] = $_POST['Ascelta61'];
	$_SESSION['Ad6'] = $_POST['Ascelta62'];
	$_SESSION['At6'] = $_POST['Ascelta63'];
	$_SESSION['Aq6'] = $_POST['Ascelta64'];
	$_SESSION['Ac6'] = $_POST['Ascelta65'];
	$_SESSION['As6'] = $_POST['Ascelta66'];
	/*------------------*/

	$_SESSION['Sz1'] = $_POST['Sscelta10'];
	$_SESSION['Su1'] = $_POST['Sscelta11'];
	$_SESSION['Sd1'] = $_POST['Sscelta12'];
	$_SESSION['St1'] = $_POST['Sscelta13'];
	$_SESSION['Sq1'] = $_POST['Sscelta14'];
	$_SESSION['Sc1'] = $_POST['Sscelta15'];
	$_SESSION['Ss1'] = $_POST['Sscelta16'];

	$_SESSION['Sz2'] = $_POST['Sscelta20'];
	$_SESSION['Su2'] = $_POST['Sscelta21'];
	$_SESSION['Sd2'] = $_POST['Sscelta22'];
	$_SESSION['St2'] = $_POST['Sscelta23'];
	$_SESSION['Sq2'] = $_POST['Sscelta24'];
	$_SESSION['Sc2'] = $_POST['Sscelta25'];
	$_SESSION['Ss2'] = $_POST['Sscelta26'];
	
	$_SESSION['Sz3'] = $_POST['Sscelta30'];
	$_SESSION['Su3'] = $_POST['Sscelta31'];
	$_SESSION['Sd3'] = $_POST['Sscelta32'];
	$_SESSION['St3'] = $_POST['Sscelta33'];
	$_SESSION['Sq3'] = $_POST['Sscelta34'];
	$_SESSION['Sc3'] = $_POST['Sscelta35'];
	$_SESSION['Ss3'] = $_POST['Sscelta36'];

	$_SESSION['Sz4'] = $_POST['Sscelta40'];
	$_SESSION['Su4'] = $_POST['Sscelta41'];
	$_SESSION['Sd4'] = $_POST['Sscelta42'];
	$_SESSION['St4'] = $_POST['Sscelta43'];
	$_SESSION['Sq4'] = $_POST['Sscelta44'];
	$_SESSION['Sc4'] = $_POST['Sscelta45'];
	$_SESSION['Ss4'] = $_POST['Sscelta46'];

	$_SESSION['Sz5'] = $_POST['Sscelta50'];
	$_SESSION['Su5'] = $_POST['Sscelta51'];
	$_SESSION['Sd5'] = $_POST['Sscelta52'];
	$_SESSION['St5'] = $_POST['Sscelta53'];
	$_SESSION['Sq5'] = $_POST['Sscelta54'];
	$_SESSION['Sc5'] = $_POST['Sscelta55'];
	$_SESSION['Ss5'] = $_POST['Sscelta56'];
	
	$_SESSION['Sz6'] = $_POST['Sscelta60'];
	$_SESSION['Su6'] = $_POST['Sscelta61'];
	$_SESSION['Sd6'] = $_POST['Sscelta62'];
	$_SESSION['St6'] = $_POST['Sscelta63'];
	$_SESSION['Sq6'] = $_POST['Sscelta64'];
	$_SESSION['Sc6'] = $_POST['Sscelta65'];
	$_SESSION['Ss6'] = $_POST['Sscelta66'];

	$_SESSION['Sz7'] = $_POST['Sscelta70'];
	$_SESSION['Su7'] = $_POST['Sscelta71'];
	$_SESSION['Sd7'] = $_POST['Sscelta72'];
	$_SESSION['St7'] = $_POST['Sscelta73'];
	$_SESSION['Sq7'] = $_POST['Sscelta74'];
	$_SESSION['Sc7'] = $_POST['Sscelta75'];
	$_SESSION['Ss7'] = $_POST['Sscelta76'];

	$_SESSION['Sz8'] = $_POST['Sscelta80'];
	$_SESSION['Su8'] = $_POST['Sscelta81'];
	$_SESSION['Sd8'] = $_POST['Sscelta82'];
	$_SESSION['St8'] = $_POST['Sscelta83'];
	$_SESSION['Sq8'] = $_POST['Sscelta84'];
	$_SESSION['Sc8'] = $_POST['Sscelta85'];
	$_SESSION['Ss8'] = $_POST['Sscelta86'];
	
	$_SESSION['Sz9'] = $_POST['Sscelta90'];
	$_SESSION['Su9'] = $_POST['Sscelta91'];
	$_SESSION['Sd9'] = $_POST['Sscelta92'];
	$_SESSION['St9'] = $_POST['Sscelta93'];
	$_SESSION['Sq9'] = $_POST['Sscelta94'];
	$_SESSION['Sc9'] = $_POST['Sscelta95'];
	$_SESSION['Ss9'] = $_POST['Sscelta96'];
	/*------------------*/
}
header('Location: index.php');
?>