<style type="text/css">
 table{
 border-collapse: collapse;
 }
 tr>th{
 background-color: gray;
 }
 tr>th,tr>td{
 padding: 5px;
 }
</style>
<center>
<h2>Print Karyawan</h2>
<table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Jenis Kelamin</th>
            <th>No Hp</th>
            <th>Alamat</th>
        </tr>
         <?php foreach($karyawan as $km): 
        ?>
        <tr>
            <td><?= $km->nama_karyawan ?></td>
            <td><?= $km->jabatan ?></td>
            <td><?= $km->jk ?></td>
            <td><?= $km->no_hp ?></td>
            <td><?= $km->alamat?></td>
        </tr>
        <?php endforeach; 
        ?>
</table>
</center>

            <script>
                window.print()
            </script>