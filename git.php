<?php
/*
$_FILES['dosya']["name"] 	     Gönderilen dosyanın adı
$_FILES['dosya']["type"] 	     Gönderilen dosyanın tipi
$_FILES['dosya']["tmp_name"]     Gönderilen dosyanın geçici olarak sunucuda barındığı adres.
$_FILES['dosya']["size"] 	     Gönderilen dosyanın bayt cinsinden boyutu
$_FILES['dosya']["error"]        Dosya gönderilirken gerçekleşen hata kodu
*/

// localDisc

if(!isset($_FILES["dosya"])):
         echo "Dosya Bulunmadi";
else:
    $hata=$_FILES['dosya']["error"];
      if($hata!=0){
          echo "Birh hata olusdu";
                }
      else{
          $olcu=$_FILES['dosya']["size"];
          if ($olcu>(1024*1024*3)){
              echo "Birh hata olusdu. Dosya boyutu cok buyuk. 3MB-dan boyuk olmamalidir";
          }
          else{
              $tip=$_FILES['dosya']["type"];
              $icaveVerilenOlculer=array("image/png","image/jpg","image/jpeg");
              if (!in_array($tip,$icaveVerilenOlculer)){
                  echo "Birh hata olusdu. Dosya formati uyumsuz. Format png, jpg, jpeg olmamalidir";
              }
              else{
                  $name=$_FILES['dosya']["name"];
                  $doyaninServerYeri=$_FILES['dosya']["tmp_name"];
                  $uzanti=explode(".",$name);
                  $uzanti=$uzanti[count($uzanti)-1];
                  $tarix=date("d.m.Y");
                  $saat=date("h.i.s");
                  $code=md5(mt_rand(0,100));

                  move_uploaded_file($doyaninServerYeri,"localDisc/".$code."_".$tarix."_".$saat.".".$uzanti);
                  echo "Uploading complate.";
              }
          }
      };
endif;

?>