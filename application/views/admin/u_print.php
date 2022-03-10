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
<h2>Print User</h2>
<table border="1">
        <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Jabatan</th>
        </tr>
         <?php foreach($user as $um): 
        ?>
        <tr>
             <td><?= $um->nama_user ?></td>
             <td><?= $um->username ?></td>
             <td><?= $um->password ?></td>
             <td><?= $um->level ?></td>
        </tr>
        <?php endforeach; 
        ?>
</table>
</center>

            <script>
                window.print()
            </script>