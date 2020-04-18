<?php
cetak_gambar(5);
function cetak_gambar($a){
	if($a%2!=1){
		echo"Parameter harus bilangan ganjil";
	}else{
		for($baris=1;$baris<=$a;$baris++){
		for($kolom=1;$kolom<=$a;$kolom++){
			if($kolom==1){
				echo" + ";
			}else if($kolom==$a){
				echo" + ";
			}else if($baris%2==0){
				echo" = ";
			}else{
				echo" + ";
			}
		}
		echo"<br>";
	}
	}
	
}
?>
