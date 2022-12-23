<?php
session_start();
require("fpdf/fpdf.php");
		header('content-type:image/jpeg');
      if (isset($_POST['certificate'])) 
	  {
        $name =$_SESSION['user'];
		//$name_len=strlen($name);
		 //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
          if($name_len<=7){
            $font_size = 70;
            $origin_x = 880;
          }
          elseif($name_len<=12){
            $font_size = 69;
	 $origin_x = 770;
          }
          elseif($name_len<=15){
            $font_size = 65;
	$origin_x = 700;
          }
          elseif($name_len<=20){
             $font_size = 62;
	$origin_x = 650;
          }
          elseif($name_len<=22){
            $font_size = 15;
	$origin_x = 600;
          }
          elseif($name_len<=33){
            $font_size=11;
          }
          else {
            $font_size =10;
	$origin_x = 670;
          }

         // $certificate_text = $name;
		
		
		//$font= 'developer.ttf ';//"C:\xampp\htdocs\e-certificate\developer.ttf";
		
		//$x=600;
		//$y=750;
		//$font_size=50;
		//$rotation=0;
		
		$image=imagecreatefromjpeg("completion certificate.jpeg");
		
		$black = imagecolorallocate($image, 0, 0, 0);
		//$color=imagecolorallocate($image,0,0,0);
		
		//ImageString($image,80,$x,$y,$name,$color);
		 //function to display name on certificate picture
		imagettftext($image,$font_size,0,$origin_x,750,$black,'developer.ttf',$name);
		
		imagejpeg($image,"download-certificate/".$name.".jpg");
		imagedestroy($image);

		$pdf=new FPDF();
		$pdf->AddPage('L','A5',0);
		$pdf->Image("download-certificate/".$name.".jpg",0,0,210,148);
		ob_end_clean();
		$pdf->Output();
	  }
?>