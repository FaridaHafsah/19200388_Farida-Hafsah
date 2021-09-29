<html> 
    <head> 
        <title>Form Input Mahasiswa</title> </head> 
    <body> 
    <center> 
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post"> 
            <table> 
                <tr> <th colspan="3"> Form Input Data Mahasiswa </th> </tr>
                
                <tr> <td colspan="3"> <hr> </td> </tr> 
                <tr> 
                    <th>NIM</th> <th>:</th> 
                    <td> <input type="text" name="nim" id="nim"> </td> 
                </tr> 
                <tr> 
				<th>NAMA</th> <th>:</th> 
                <td> <input type="text" name="nama" id="nama"> </td> 
                </tr> 
				<tr>
				<th>ALAMAT</th> <th>:</th> 
				<td> <input type="text" name="alamat" id="alamat"> </td> 
				</tr>
                <tr> <th>USIA</th> <td>:</td> 
                    <td> <select name="usia" id="usia"> 
                            <option value="">Pilih USIA</option> 
                            <option value="17">17</option> 
                            <option value="18">18</option> 
                            <option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							</select> </td> </tr> 
                   <tr> 
                       <td colspan="3" align="center"> 
                           <input type="submit" value="Submit"> </td> 
                   </tr> 
            </table> 
        </form> 
    </center> 
</body> 
</html>