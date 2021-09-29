<html> 
    <head>

        <title>Tampil Data Mahasiswaa</title> 
    </head> 
    <body>
    <center> 
        <table> 
            <tr> <th colspan="3"> Tampil Data Mahasiswa </th> </tr> 
            <tr> <td colspan="3"> <hr> </td> </tr> 
            <tr> <td>NIM</td> <th>:</th> <td> <?= $nim; ?> </td> </tr> 
            <tr> <td>NAMA</td> <td>:</td> <td> <?= $nama; ?> </td> </tr> 
			<tr> <td>ALAMAT</td> <td>:</td> <td> <?= $alamat; ?> </td> </tr> 
            <tr> <td>USIA</td> <td>:</td> <td> <?= $usia; ?> </td> </tr> 
            <tr> <td colspan="3" align="center"> 
                    <a href="<?= base_url('mahasiswa'); ?>">Kembali</a> </td>


            </tr> 
        </table> 
    </center> 
</body> 
</html>