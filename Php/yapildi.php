<?php

include "baglanti.php";


	$id = $_GET["id"];

	$sql = "UPDATE yapilacaklarlistesi SET yapildi=1 WHERE id=$id";
	$update = $conn->prepare($sql);
	$update->execute();

	header("Refresh:2; url=index.php");
	echo "Kayıt Başarıyla Güncellendi. Ana Sayfaya Yönlendiriliyorsunuz...";




?>