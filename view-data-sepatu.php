<html> 
    <head>

        <title>Tampil Data Toko Sepatu</title> 
    </head> 
    <body>
    <center> 
        <table> 
            <tr> <th colspan="3"> Tampilan Toko Sepatu </th> </tr> 
            <tr> <td colspan="3"> <hr> </td> </tr> 
            <tr> <th>Nama Pembeli</th> <th>:</th> <td> <?= $nama; ?> </td> </tr> 
            <tr> <th>NO HP</th> <td>:</td> <td> <?= $no; ?> </td> </tr> 
			<tr> <th>MERK</th> <td>:</td> <td> <?= $merk; ?> </td> </tr> 
            <tr> <th>UKURAN</th> <td>:</td> <td> <?= $ukuran; ?> </td> </tr> 
            <tr> <td colspan="3" align="center"> 
                    <a href="<?= base_url('sepatu'); ?>">Kembali</a> </td>


            </tr> 
        </table> 
    </center> 
</body> 
</html>