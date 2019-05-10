<html>
    <head>
        <title>Find shortest route!</title>
        <script>
            function clickMap(classID){
                if (document.form1.asal.value.length == 0){
                    document.form1.asal.value = classID;
                }else{
                    document.form1.tujuan.value = classID;
                }
            }
        </script>
    </head>
    <body>
        <div>
            <form name="form1" action="calPath.php" method="post">
                <table>
                    <tr>
                        <tr>
                        <td>Latitude</td>
                        <td><input type="double" name="lat" placeholder="Masukkan Latitude Asal" /></td>
                    </tr>
                    <tr>
                        <td>longitude</td>
                        <td><input type="double" name="lon" placeholder="Masukkan Longitude Tujuan"/></td>
                    </tr>
                    <tr>
                        <td>Asal</td>
                        <td><input type="text" name="asal" placeholder="Masukkan ID Node Asal" /></td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td><input type="text" name="tujuan" placeholder="Masukkan ID Node Tujuan"/></td>
                    </tr>
                    <tr>
                        <td> <input name=b1 type=submit value="Hitung Jarak"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div>
            <table border="1px">
                <th>ID Node</th>
                <th>Nama Node</th>
                <?php 
                include 'koneksi_dijkstra.php';
                $query = mysqli_query($con, "SELECT * FROM node WHERE id_node >= '315'");
                while($row = $query->fetch_object()){ ?>
                    <tr>
                        <td><?php echo $row->id_node; ?></td>
                        <td><?php echo $row->nama_node; ?></td>
                    </tr>
               <?php } 
                ?>
            </table>
        </div>
    </body>
</html>