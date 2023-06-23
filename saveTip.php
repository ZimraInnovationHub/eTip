<?php
 session_start();
//include('addOtherGoods.php');
if(isset($_POST['cmdApplyTIP']))
{
/*if (!filter_var($_POST['emailaddress'], FILTER_VALIDATE_EMAIL) === false) {
  					apply() ;
						} else {
  					echo "<script>alert('PLEASE ENTER A VALID EMAIL ADDRESS..');window.location='tipfailure.php'</script>";
					}*/
	
apply();
 
     
    
	
}

function apply(){

       $result = $_POST['natcountry'];
	
            $result_explode = explode('|', $result);
           // echo "Cty: ". $result_explode[0]."<br />";
           // echo "CtryCode: ". $result_explode[1]."<br />";
			     //echo "TelCode: ". $result_explode[2]."<br />";
			
			$country = $result_explode[0];
			$ctrycode =$result_explode[1];
			$telcode = $result_explode[2];
			
		$manuf =$_POST['manufacturecountry'];
		$manuf_explode = explode('|', $manuf);
			$mancountry = $manuf_explode[0];
			$manctrycode =$manuf_explode[1];
			
			$poe = $_POST['portofentry'];
			$poe_explode = explode('|', $poe);
			$poe_nam = $poe_explode[0];
			$poe_code =$poe_explode[1];
			
$Date = $_POST['dateoftravel'];
$expiry_Date = date('d-m-Y', strtotime($Date. ' + 7 days'));;		
$arraysize= sizeof($_SESSION['othergoods']);
$myarray =array();
	if($arraysize>0){
	
		for($i=0;$i<$arraysize;$i++)
		{

			$item0 = $_SESSION['othergoods'][$i][0];
			$item1 = $_SESSION['othergoods'][$i][1];
			$item2 = $_SESSION['othergoods'][$i][2];
			$item3 = $_SESSION['othergoods'][$i][3];
			$item4 = $_SESSION['othergoods'][$i][4];

			$jsonobj = array(
 		"GoodNo" =>        $i,
		"ogdDesField" =>       $item0,
  		"ogdSerField" =>         $item1,
  		"ogdQtyField" =>            $item2,
  		"ogdValCurField" =>         $item3,
  		"ogdValAmtField" =>         $item4
   );

	array_push($myarray,$jsonobj);
	
	}
	}
	//print_r($_SESSION['othergoods']);
if(isset($_POST['othergoods'])){
//$myarray =$_SESSION['othergoods'];
}

if(!isset($_POST['havetrailer'])){
	//no trailer
	if(isset($_POST['ownerdriven'])){
	//ownerdriven
	$json = json_encode(array( "Driver"=>array(
  "drvNamLstField" =>        strtoupper($_POST['driversurname']),
  "drvNamFstFeild" =>         strtoupper($_POST['forenames']),
  "drvPnbFeild" =>             strtoupper($_POST['passportnumber']),
  "drvAddHomField" =>         $_POST['address'],
  "drvTnbTbrField" =>          $_POST['telephone'],
  "drvAddZimField" =>         $_POST['zimaddress'],
  //"drvCtyCodField" =>           $_POST['nationalitycode'],
  "drvCtyCodField" =>           $ctrycode,
  "drvTnbCodField" =>      $_POST['telcode'],
  
),

"Vehicle"=>  array(
  "vhc1DetMakFeild" =>              $_POST['vehiclemake'],
  "vhc1DetTobChoiceField" =>      $_POST['vbodytype'],
  "vhc1DetTobCodChoiceField" =>        $_POST['bodycode'],
  "vhc1DetCnbFeild" => strtoupper($_POST['chassisnumber']),
   "vhc1DetNbrFeild" =>          strtoupper($_POST['regnumber']),
  "vhc1InsCmpNamFeild" =>         $_POST['insurance'],
  "vhc1DetValCurField" =>           $_POST['vehiclecurrency'],
  "vhc1DetValAmtField" =>     $_POST['value'],
  //"vhc1DetManCtyCodField" =>     $_POST['manufacturecountrycode'],
  "vhc1DetManCtyCodField" =>     $manctrycode,
   "vhc1DetEnbFeild" =>          strtoupper($_POST['enginenumber']),
  "vhc1DetManYerField" =>         $_POST['manufactureyear'],
  "vhc1DetVclCodField" =>           $_POST['classcode'],
  "vhc1EgcField" =>    $_POST['enginecapacity'],
  "vhc1DetVclDscField" =>      $_POST['class']
),
"other"=> array(
  //"exdCdtField" =>              $_POST['dateoftravel'],
  "exdCdtField" =>        $expiry_Date,
  //"edtPoeCuoNamField" =>      $_POST['portofentry'],
  //"ideCuoCodField" =>        $_POST['portofentrycode'],
  //"edtPoeCuoCodField" => $_POST['portofentrycode'],
    "edtPoeCuoNamField" =>    $poe_nam,
  "ideCuoCodField" =>       $poe_code,
  "edtPoeCuoCodField" => 	$poe_code,
   "ofnfield" =>          "APP",
  //"dat" =>         $_POST['dateoftravel'],
  "dat" =>         $expiry_Date,
  "tim" =>           date("h:i:s"),
  "tovCodChoiceField" =>     "1",
  "tovDscChoiceField" =>      "PRIVATE",
  "insStdField" =>      '',
  "insExpField" =>      ''
),
"owner"=> array(
"ownField" =>             false,
),
"Items"=> $myarray
));
}else{
//not owner driven
$json = json_encode(array( "Driver"=>array(
  "drvNamLstField" =>        strtoupper($_POST['driversurname']),
  "drvNamFstFeild" =>         strtoupper($_POST['forenames']),
  "drvPnbFeild" =>             strtoupper($_POST['passportnumber']),
  "drvAddHomField" =>         $_POST['address'],
  "drvTnbTbrField" =>          $_POST['telephone'],
  "drvAddZimField" =>         $_POST['zimaddress'],
  //"drvCtyCodField" =>           $_POST['nationalitycode'],
   "drvCtyCodField" =>           $ctrycode,
  "drvTnbCodField" =>      $_POST['telcode'],
  
),

"Vehicle"=>  array(
  "vhc1DetMakFeild" =>              $_POST['vehiclemake'],
  "vhc1DetTobChoiceField" =>      $_POST['vbodytype'],
  "vhc1DetTobCodChoiceField" =>        $_POST['bodycode'],
  "vhc1DetCnbFeild" =>  strtoupper($_POST['chassisnumber']),
   "vhc1DetNbrFeild" =>           strtoupper($_POST['regnumber']),
  "vhc1InsCmpNamFeild" =>         $_POST['insurance'],
  "vhc1DetValCurField" =>           $_POST['vehiclecurrency'],
  "vhc1DetValAmtField" =>     $_POST['value'],
  //"vhc1DetManCtyCodField" =>     $_POST['manufacturecountrycode'],
  "vhc1DetManCtyCodField" =>     $manctrycode,
   "vhc1DetEnbFeild" =>           strtoupper($_POST['enginenumber']),
  "vhc1DetManYerField" =>         $_POST['manufactureyear'],
  "vhc1DetVclCodField" =>           $_POST['classcode'],
  "vhc1EgcField" =>    $_POST['enginecapacity'],
  "vhc1DetVclDscField" =>      $_POST['class']
),
"other"=> array(
  //"exdCdtField" =>              $_POST['dateoftravel'],
  "exdCdtField" =>        $expiry_Date,
  //"edtPoeCuoNamField" =>      $_POST['portofentry'],
  //"ideCuoCodField" =>        $_POST['portofentrycode'],
  //"edtPoeCuoCodField" => $_POST['portofentrycode'],
    "edtPoeCuoNamField" =>    $poe_nam,
  "ideCuoCodField" =>       $poe_code,
  "edtPoeCuoCodField" => 	$poe_code,
   "ofnfield" =>          "APP",
  //"dat" =>         $_POST['dateoftravel'],
  "dat" =>         $expiry_Date,
  "tim" =>           date("h:i:s"),
  "tovCodChoiceField" =>     "1",
  "tovDscChoiceField" =>      "PRIVATE",
    "insStdField" =>      '',
  "insExpField" =>      ''
),
"owner"=> array(
"ownField" =>             true,
 "ownNamLstFeild" =>      strtoupper($_POST['ownerlastname']),
 "ownNamFstFeild" =>     strtoupper($_POST['ownerfirstname']),
 "ownAddField" =>        $_POST['owneraddress'],
),
"Items"=> $myarray
));
}
	//end no trailer
	}else{
	//trailer
	if(isset($_POST['ownerdriven'])){
	//ownerdriven
$json = json_encode(array( "Driver"=>array(
  "drvNamLstField" =>        strtoupper($_POST['driversurname']),
  "drvNamFstFeild" =>         strtoupper($_POST['forenames']),
  "drvPnbFeild" =>            strtoupper($_POST['passportnumber']),
  "drvAddHomField" =>         $_POST['address'],
  "drvTnbTbrField" =>          $_POST['telephone'],
  "drvAddZimField" =>         $_POST['zimaddress'],
  //"drvCtyCodField" =>           $_POST['nationalitycode'],
   "drvCtyCodField" =>           $ctrycode,
  "drvTnbCodField" =>      $_POST['telcode'],
  
),

"Vehicle"=>  array(
  "vhc1DetMakFeild" =>              $_POST['vehiclemake'],
  "vhc1DetTobChoiceField" =>      $_POST['vbodytype'],
  "vhc1DetTobCodChoiceField" =>        $_POST['bodycode'],
  "vhc1DetCnbFeild" => strtoupper($_POST['chassisnumber']),
   "vhc1DetNbrFeild" =>          strtoupper($_POST['regnumber']),
  "vhc1InsCmpNamFeild" =>         $_POST['insurance'],
  "vhc1DetValCurField" =>           $_POST['vehiclecurrency'],
  "vhc1DetValAmtField" =>     $_POST['value'],
  //"vhc1DetManCtyCodField" =>     $_POST['manufacturecountrycode'],
  "vhc1DetManCtyCodField" =>     $manctrycode,
   "vhc1DetEnbFeild" =>          strtoupper($_POST['enginenumber']),
  "vhc1DetManYerField" =>         $_POST['manufactureyear'],
  "vhc1DetVclCodField" =>           $_POST['classcode'],
  "vhc1EgcField" =>    $_POST['enginecapacity'],
  "vhc1DetVclDscField" =>      $_POST['class']
),

"Trailer" =>  array(
  "vhc2DetNbrFeild" =>              strtoupper($_POST['trailerregnumber']),
  "vhc2DetCnbFeild" =>      strtoupper($_POST['trailerchassisnumber']),
  "vhc2DetMakFeild" =>        $_POST['trailermake'],
  "vhc2DetTobCodChoiceField" => $_POST['trailerbodycode'],
   "vhc2DetTobChoiceField" =>          $_POST['trailerbody'],
  "vhc2DetManCtyCodField" =>         $_POST['trailermanufacturecountrycode'],
  "vhc2DetManCtyNamField" =>           $_POST['trailermanufacturecountry'],
  "vhc2DetManYerField" =>     $_POST['trailermanufactureyear'],
  "vhc2DetValCurField" =>     $_POST['trailercurrency'],
   "vhc2DetValAmtField" =>          $_POST['trailervalue'],
  "vhc2InsCmpNamFeild" =>         $_POST['trailerinsurance'],
),
"other"=> array(
 // "exdCdtField" =>              $_POST['dateoftravel'],
 "exdCdtField" =>        $expiry_Date,
 // "edtPoeCuoNamField" =>      $_POST['portofentry'],
 // "ideCuoCodField" =>        $_POST['portofentrycode'],
 // "edtPoeCuoCodField" => $_POST['portofentrycode'],
   "edtPoeCuoNamField" =>    $poe_nam,
  "ideCuoCodField" =>       $poe_code,
  "edtPoeCuoCodField" => 	$poe_code,
   "ofnfield" =>          "APP",
 // "dat" =>         $_POST['dateoftravel'],
 "dat" =>         $expiry_Date,
  "tim" =>           date("h:i:s"),
  "tovCodChoiceField" =>     "1",
  "tovDscChoiceField" =>      "PRIVATE",
     "insStdField" =>      '',
  "insExpField" =>      ''
),
"owner"=> array(
"ownField" =>             false,
),
"Items"=> $myarray
));
}else{
//not owner
$json = json_encode(array( "Driver"=>array(
  "drvNamLstField" =>        strtoupper($_POST['driversurname']),
  "drvNamFstFeild" =>         strtoupper($_POST['forenames']),
  "drvPnbFeild" =>            strtoupper($_POST['passportnumber']),
  "drvAddHomField" =>         $_POST['address'],
  "drvTnbTbrField" =>          $_POST['telephone'],
  "drvAddZimField" =>         $_POST['zimaddress'],
  //"drvCtyCodField" =>           $_POST['nationalitycode'],
   "drvCtyCodField" =>           $ctrycode,
  "drvTnbCodField" =>      $_POST['telcode'],
  
),

"Vehicle"=>  array(
  "vhc1DetMakFeild" =>              $_POST['vehiclemake'],
  "vhc1DetTobChoiceField" =>      $_POST['vbodytype'],
  "vhc1DetTobCodChoiceField" =>        $_POST['bodycode'],
  "vhc1DetCnbFeild" => strtoupper($_POST['chassisnumber']),
   "vhc1DetNbrFeild" =>          strtoupper($_POST['regnumber']),
  "vhc1InsCmpNamFeild" =>         $_POST['insurance'],
  "vhc1DetValCurField" =>           $_POST['vehiclecurrency'],
  "vhc1DetValAmtField" =>     $_POST['value'],
  //"vhc1DetManCtyCodField" =>     $_POST['manufacturecountrycode'],
  "vhc1DetManCtyCodField" =>     $manctrycode,
   "vhc1DetEnbFeild" =>          strtoupper($_POST['enginenumber']),
  "vhc1DetManYerField" =>         $_POST['manufactureyear'],
  "vhc1DetVclCodField" =>           $_POST['classcode'],
  "vhc1EgcField" =>    $_POST['enginecapacity'],
  "vhc1DetVclDscField" =>      $_POST['class']
),

"Trailer" =>  array(
  "vhc2DetNbrFeild" =>              strtoupper($_POST['trailerregnumber']),
  "vhc2DetCnbFeild" =>      strtoupper($_POST['trailerchassisnumber']),
  "vhc2DetMakFeild" =>        $_POST['trailermake'],
  "vhc2DetTobCodChoiceField" => $_POST['trailerbodycode'],
   "vhc2DetTobChoiceField" =>          $_POST['trailerbody'],
  "vhc2DetManCtyCodField" =>         $_POST['trailermanufacturecountrycode'],
  "vhc2DetManCtyNamField" =>           $_POST['trailermanufacturecountry'],
  "vhc2DetManYerField" =>     $_POST['trailermanufactureyear'],
  "vhc2DetValCurField" =>     $_POST['trailercurrency'],
   "vhc2DetValAmtField" =>          $_POST['trailervalue'],
  "vhc2InsCmpNamFeild" =>         $_POST['trailerinsurance'],
),
"other"=> array(
  //"exdCdtField" =>              $_POST['dateoftravel'],
  "exdCdtField" =>        $expiry_Date,
  //"edtPoeCuoNamField" =>      $_POST['portofentry'],
  //"ideCuoCodField" =>        $_POST['portofentrycode'],
  //"edtPoeCuoCodField" => $_POST['portofentrycode'],
    "edtPoeCuoNamField" =>    $poe_nam,
  "ideCuoCodField" =>       $poe_code,
  "edtPoeCuoCodField" => 	$poe_code,
   "ofnfield" =>          "APP",
  //"dat" =>         $_POST['dateoftravel'],
  "dat" =>         $expiry_Date,
  "tim" =>           date("h:i:s"),
  "tovCodChoiceField" =>     "1",
  "tovDscChoiceField" =>      "PRIVATE",
      "insStdField" =>      '',
  "insExpField" =>      ''
),
"owner"=> array(
"ownField" =>             true,
 "ownNamLstFeild" =>      strtoupper($_POST['ownerlastname']),
 "ownNamFstFeild" =>     strtoupper($_POST['ownerfirstname']),
 "ownAddField" =>        $_POST['owneraddress'],
),
"Items"=> $myarray
));
}
//end trailer
	}

//echo $json;
$url="http://10.16.64.156/ZimraOnline/ZOClient.svc/SaveTIP";
$ch = curl_init( $url );

curl_setopt( $ch, CURLOPT_POSTFIELDS, $json );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$result = curl_exec($ch);
$jsonres = json_decode($result, true);
curl_close($ch);

if($jsonres['successful']){
SendEmail($jsonres['id'],$expiry_Date);
}

}

//send email
function SendEmail($ref,$expiry_dat){
$email_data = json_encode(array(
            "emailTo" => $_POST['emailaddress'],
            "subject" => "TIP Reference",
			"body" => "Good day ".$_POST['titl']." ".$_POST['forenames']." ".$_POST['driversurname'].",\n\n Your Temporary Import Permit(TIP) application reference for entry into Zimbabwe is ".$ref.".\n\n****Please note that this TIP application will expire on ".$_POST['dateoftravel'].". To avoid the inconvenience of re-applying, you are advised to travel by ".$expiry_dat."****.\n\nKind Regards,\n\nThe Commissioner General,\nZimbabwe Revenue Authority\n\n" .
                            "This email message was auto-generated by the system. Please do not respond to this email."
            ));
			

			
$url1="http://10.16.64.156/ZimraOnline/ZOClient.svc/SendEmail";
$ch1 = curl_init( $url1 );
curl_setopt( $ch1, CURLOPT_POSTFIELDS, $email_data );
curl_setopt( $ch1, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt( $ch1, CURLOPT_RETURNTRANSFER, true );
$res = curl_exec($ch1);
//$jsonres1 = json_decode($res, true);
$mailres = json_decode($res, true);
curl_close($ch1);
if($mailres['successful']){
echo "<script>alert('Your TIP application has been successfully submitted. Your reference number is " .$ref. ", and has been sent to " .$_POST['emailaddress'].". This is the reference number that will be used to process your TIP application at your port of entry.');window.location='tipsuccess.php'</script>";
}else{
echo "<script>alert('An error occured sending your email. Please take note of your reference number :'".$ref.");window.location='tipsuccess.php'</script>";
}
}
