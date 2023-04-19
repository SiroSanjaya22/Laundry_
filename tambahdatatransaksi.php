
<?php

session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laundry</title>

    <?php
      include "include/header.php";
    ?>

    <style type="text/css">
    		.css_pesan { background-color: #F0FFED; border: 1px solid #215800; padding: 10px; width: 180px; margin-bottom: 20px; }
    	</style>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
      <a class="navbar-brand" href="#">Laundry</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
        include "include/list.php"
      ?>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Form Transaksi Laundry</h3>
  <hr>
        <div class="row">
          <div class="col-md-4">
            <form name="form" action="proses_tambah_transaksi.php" method="POST" >
            <?php
            include "./include/koneksi.php";
            $sql = mysqli_query($conn, "SELECT No_Order FROM transaksi  ORDER BY No_Order Desc LIMIT 1");
            $result = mysqli_num_rows($sql);
            if($result == 0){ ?> 
              <div class="form-group">
                  <label>No. Order</label>
                  <input type="text" class="form-control" name="No_Order" value="0" readonly>
                </div>
            <?php }else{ 
             while ($hasil = mysqli_fetch_array($sql)){ ?>
             <div class="form-group">
                <label>No. Order</label>
                <input type="text" class="form-control" name="No_Order" value="<?php echo $hasil['No_Order']; ?>" readonly>
              </div>
            <?php }} ?>              
                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <select class="form-control" name="No_Identitas">
                    <?php
                    $sql = mysqli_query($conn, "SELECT No_Identitas, Nama FROM pelanggan ORDER BY Nama");
                    while ($hasil = mysqli_fetch_array($sql)){
                      ?>
                    <option value="<?php echo $hasil['No_Identitas']; ?>"><?php echo $hasil['Nama']; ?></option>
                    <?php
                        }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="diskon">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM kategori");
                    while ($hasil = mysqli_fetch_array($sql)){
                      ?>
                    <option value="<?php echo $hasil['tarif']; ?>"><?php echo $hasil['kategori']; ?> (<?php echo $hasil['tarif']; ?>)</option>
                    <?php
                        }
                    ?>
                  </select>
                </div>
    
                <div class="form-group">
                  <label>Total Berat </label>
                  <input type="text" id="total_berat" class="form-control" name="total_berat" placeholder="Total Berat" value="0">
                </div>
                <div class="form-group">
                  <label>Total Bayar</label>
                  <input type="text"  class="form-control" name="total_bayar" readonly>
                </div>
                <input type="hidden" class="form-control" name="tanggal" value="<?php $tgl=date('Y-m-d'); echo $tgl; ?>">
                <input type="button" value="Tampil Total Bayar" onClick="tambah()" class="btn btn-primary"/>
                <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                <a href="transaksi.php"><input type="button" class="btn btn-default" value="Batal" ></a>
                </form>
          </div>
         
<!-- Modal Tambah Data -->




<script type="text/javascript">
d=eval(form.No_Order.value)
e = d+1
form.No_Order.value=e
function tambah()
    {
    a=eval(form.total_berat.value)
    b=eval(form.diskon.value)
    c=(a*b)
    // b=eval(form.b.value)
    // c=a+b
  
    form.total_bayar.value=c
    }


$('#tambah').submit(function() {
  $.ajax({
    type: 'POST',
    url: 'proses-tambah-detail-transaksi.php',
    data: $(this).serialize(),
    success: function(data) {
      $("#pesan").addClass("css_pesan");
      $("#ModalTambah").modal('hide');
      $('#pesan').html(data);
    }
  })
  return false;
});

function hapus(order,id){
			swal({
				title: "Apa anda yakin?",
				text: "Anda tidak akan bisa mengembalikan data yang sudah terhapus!",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Ya, hapus!",
				closeOnConfirm: false
			},

			function(){
				var no_id = id;
        var no_order = order;
				$.ajax({
					url: "crud/hapus.php",
					type: "GET",
					data : {Id_Pakaian: no_id, No_Order : no_order},
					success: function (data) {
                    swal("Terhapus!", "Data berhasil dihapus.", "success");

                }
				});
				//document.location = url;
				setTimeout("location.href='tambahdatatransaksi.php';",1000);
			}

			);
		};
</script>
</body>
</html>
<?php
}else{
	header("location:login/index.php");
}
