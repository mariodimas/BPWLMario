<h1>CROOD OOP PHP</h1>
<H2>WWW.MALASNGODING.COM</H2>
<H3>Tambah data user</H3>

<form action="../controller/proses.php?aksi=tambah" method="post"> 

<table>
        <tr>            
            <td>Nama</td>
            <td>
                <input type="hidden" name="id"> 
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" ></td>
        </tr>
        
        <tr>
            <td>Usia</td>
            <td><input type="text" name="usia" ></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" ></td>
        </tr>    

    </table>
</form>
