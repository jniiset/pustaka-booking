<html>
<head>
    <title> form input data siswa </title>
</head>
<body>
<form action="dataregistrasi.php" method="post">
<h1>form input data siswa</h1>
<br>
<b> isi data dibawah ini :</b>
<pre>
    nama            : <input type="text" name="nama" id="nama"size="25" maxlength="50">
    NIS             : <input type="text" name="nis" id="nis" size="25" maxlength="50">
    kelas           : <input type="text" name="kelas" id="kelas" size="25" maxlength="50">
    tempat lahir    : <input type="text" name="tempatl" size="25" maxlength="50">
    tanggal lahir   : <input type="text" name="tanggall" size="25" maxlength="50">
    alamat          : <textarea name="alamat" rows="3" cols="40"></textarea>
</pre>
jenis kelamin
<input type="radio" name="jeniskel" value="laki-laki"> laki-laki
<input type="radio" name="jeniskel" value="perempuan"> perempuan
<p>
    agama:
    <select name="agama">
    <option value="-pilih-">
    <option value="islam">islam</option>
    <option value="kristen">kristen</option>
    <option value="katolik">katolik</option>
    <option value="budha">budha</option>
    <option value="hindu">hindu</option>
    <option value="protestan">protestan</option>
    <option value="khonghucu">khonghucu</option>
</select>
<p>
    <input type="submit" value="kirim"><input type="reset" value="cancel">
</form>
</body>
</html>