<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:barang.php?");
}
    $kode=$_GET['id'];
    $sql="SELECT * FROM barang where id=$kode";
    $query = mysql_query($db,$sql);
    $barang = mysql_fetch_assoc($query);

    if(mysql_num_rows($query) < 1){
        die ("Data tidak ditemukan");
    }

    ?>
    <html>
        <head>
        </head>
        <body>
            <h1> From Edit Barang </h1>
            <form action="proses-edit-barang.php" method="POST">
                <fieldset>
                    <input type="hidden" name="id" value="<?php echo $barang['id']?>"/>
                    <p>
                        <label name="nama">Nama Barang : </label>
                        <input type="text" value="<?php echo $barang['nama']?>"/>
                    </p>
                    <p>
                         <label name="stok">Nama Barang : </label>
                         <input type="number" value="<?php echo $barang['stok']?>"/>
                    </p>
                    <p>
                         <label name="harga">Nama Barang : </label>
                         <input type="number" value="<?php echo $barang['harga']?>"/>  
                    </p>
                    <p>
                        <input type="submit" value="Simpan" name="Simpan" />
                    </p>
                </fieldset>
                
            </form>
    </body>
</html>    

