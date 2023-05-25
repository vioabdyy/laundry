<?php include "../koneksi.php";  ?>
<?php include "menubar.php";  ?>

<div class="container">
	<div class="row">
		<?php
  				$id = $_GET['id'];  
  				$sql = "SELECT * FROM tb_paket,tb_outlet where tb_paket.id_outlet = tb_outlet.id_outlet AND id_paket ='$id' ";
		    	$query = mysqli_query($koneksi,$sql);
		    	$data = mysqli_fetch_array($query);
  			?>
		<form action="paket-edit.php" method="POST">
		<table class="table table-bordered border-primary">
  			<input type="hidden" name="id_paket" value="<?php echo $data['id_paket']; ?>">				
	  			<label>Nama Outlet</label>	
		  			<select class="form-control" name="id_outlet">
						<option value="<?php echo $data['id_outlet']; ?>"><?php echo $data['nama']; ?></option>
						<?php 
							$data_outlet = mysqli_query($koneksi,"SELECT * FROM tb_outlet WHERE id_outlet != '$data[id_paket]' ");
							while($output_data= mysqli_fetch_assoc($data_outlet)){
						 ?>
						<option value="<?php echo $output_data['id_outlet']; ?>"><?php echo $output_data['nama']; ?></option>
						<?php } ?>
					</select>
	  			<label>Jenis</label>
	  				<select class="form-control" name="jenis">
				<option value="<?php echo $data['jenis']; ?>"><?php echo $data['jenis']; ?></option>
				<?php
						if ($data['jenis'] == "kiloan" ) {
							echo "<option value='selimut'>Selimut</option>";
							echo "<option value='bed_cover'>Bed Cover</option>";
							echo "<option value='kaos'>Kaos</option>";
						}elseif ($data['jenis'] == "selimut" ){
							echo "<option value='kiloan'>Kiloan</option>";
							echo "<option value='bed_cover'>Bed Cover</option>";
							echo "<option value='kaos'>Kaos</option>";
						}elseif ($data['jenis'] == "bed_cover" ){
							echo "<option value='kiloan'>Kiloan</option>";
							echo "<option value='selimut'>Selimut</option>";
							echo "<option value='kaos'>Kaos</option>";
						}else{
							echo "<option value='kiloan'>Kiloan</option>";
							echo "<option value='bed_cover'>Bed Cover</option>";
							echo "<option value='selimut'>Selimut</option>";
						}
					?>
					
			</select>
	  			<label>Nama Paket</label>
	  				<input type="text" class="form-control" name="nama_paket" value="<?php echo $data['nama_paket']; ?>" >
	  			<label>Harga</label>
	  				<input type="number" class="form-control" name="harga" value="<?php echo $data['harga']; ?>">	
		</table>
		<input type="submit" name="update" class="btn btn-primary" value="Edit" />
	</form>
	</div>
</div>

<?php
 
	
	if(isset($_POST['update'])) {

		$id_paket		= $_POST['id_paket'];
		$id_outlet		= $_POST['id_outlet'];
		$jenis 			= $_POST['jenis'];
		$nama_paket 	= $_POST['nama_paket'];
		$harga 			= $_POST['harga'];
		
		
		$result = mysqli_query($koneksi, "UPDATE tb_paket SET id_outlet='$id_outlet',jenis='$jenis',nama_paket='$nama_paket',harga='$harga' WHERE id_paket=$id_paket");
		
		header("location: paket.php");
	}
	?>
