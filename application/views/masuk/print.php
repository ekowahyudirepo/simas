
<!DOCTYPE html>

<html>

<head>

	<title></title>

<style>

	table {

	    border-collapse: collapse;

	    width: 100%;

	}



	th, td {

	    text-align: left;

	    padding: 8px;

	}



	tr:nth-child(even){background-color: #f2f2f2}



	th {

	    background-color: teal;

	    color: white;

	}

</style>

</head>

<body style="padding: 10px;width: 800px;margin: auto;">

<table style="margin-bottom: -20px;">

	<tr>

		<td><img src="<?= base_url() ?>assets/img/logostain.png" width="120px;"></td>

		<td>

			<p style="font-size: 24px;font-weight: bold;margin-bottom: -10px;" >LAPORAN SURAT MASUK</p>

			<p style="margin-bottom: -10px;font-weight: bold;font-size: 16px;">SEKOLAH TINGGI AGAMA ISLAM NEGERI ( STAIN ) KEDIRI</p>

			<p style="font-size: 12px;line-height: 20px;">Jl. Sunan Ampel No.7 Ngronggo Kediri 64127 | Telp. (0354) 689282 Fax. (0354) 686564 | E-mail: stainkediri@kemenag.go.id / stain_kediri@yahoo.co.id</p>

		</td>

	</tr>

</table>

<hr style="font-weight: bold;">

<b style="font-size: 12px;">Tanggal cetak : <?php echo date('d-m-Y H:i:s') ?> </b>

<table border="1" width="100%" style="font-size: 12px;">

	<tr>

		<th>NO</th>

		<th>NOMOR SURAT</th>

		<th>PERIHAL</th>

		<th>DARI</th>

	</tr>

	<?php $no = 0 ; foreach($sm->result() as $d) { $no++;?>
			<tr>
				<td><?php echo $no; ?></td>
				
				<td>
					<?php echo $d->nomor_surat_masuk; ?> 
				</td>	
				
				<td><?php echo $d->perihal_surat_masuk; ?></td>
				<td><?php echo $d->kontak; ?></td>
				
			</tr>

	<?php } ?>

</table>
<script>

	window.print();

</script>
</body>

</html>


