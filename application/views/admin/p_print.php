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
<h2>Print Pelamar</h2>
<table border="1">
        <tr>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No Hp</th>
            <th>ALlamat</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Interview</th>
            <th>Tanggal MOP</th>
        </tr>
         <?php foreach($pelamar as $pm): 
        ?>
        <tr>
            <td><?= $pm->nama_pelamar ?></td>
            <td><?= $pm->tempat_lahir ?></td>
            <td><?= $pm->tl ?></td>
            <td><?= $pm->no_hp ?></td>
            <td><?= $pm->alamat?></td>
            <td><?= $pm->tgl_masuk?></td>
            <td><?= $pm->tgl_interview?></td>
            <td><?= $pm->tgl_mop?></td>
        </tr>
        <?php endforeach; 
        ?>
</table>
</center>

            <script>
                window.print()
            </script>