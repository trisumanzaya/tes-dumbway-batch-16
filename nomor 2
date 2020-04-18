hitungKembalian = (totalbelanja,uang)=>{
   var stok = [50000,20000,10000,5000,]
   var cashback = totalbelanja * (10/100)
   var nilai = (uang - totalbelanja) + cashback 

   for(item of stok){

       let kuantitas = Math.floor(nilai / item)
       nilai = nilai - (item * kuantitas)
   		console.log('kembalian anda ' +kuantitas +' '+item + ' rupiah');
		}
 //   		cek  apakah ada sisa kembalian yang tidak ada pecahanya
 		if (nilai !==0){
 			console.log( nilai + ' rupiah akan didonasikan')
 		}
	}
hitungKembalian(220000,250000)
