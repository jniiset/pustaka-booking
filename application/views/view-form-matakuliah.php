<html>
<head>
 <title>Form Input Matakuliah</title>
</head>
<body>
 <center>
 <form action="<?= base_url('matakuliah/cetak'); ?>"method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Mata Kuliah
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Kode MTK</th>
 <th>:</th>
 <td>
 <input type="text" name="kode" id="kode">
 </td>
 </tr>
 <tr>
 <th>Nama MTK</th>
 <td>:</td>
 <td>
 <input type="text" name="nama" id="nama">
 </td>
 </tr>
 <tr>
 <th>Tanggal Lahir</th>
 <td>:</td>
 <td>
 <input type="date" name="tgl" id="tgl">
 </td>
 </tr>

 <tr>
        <th>Jenis Kelamin</th>
        <td>:</td>
        <td>
            <input type="radio" name="gender" id="laki" value="laki"><label for="laki">Laki-laki</label>
            <input type="radio" name="gender" id="cewe" value="cewe"><label for="cewe">Perempuan</label>
        </td>
 </tr>

 <tr>
 <th>SKS</th>
 <td>:</td>
 <td>
 <select name="sks" id="sks">
 <option value="">Pilih SKS</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 </select>
 </td>
 </tr>

 <tr rowspan="">
 <td>
 <input type="submit" value="Submit">
 <input type="reset" value="rsest">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html