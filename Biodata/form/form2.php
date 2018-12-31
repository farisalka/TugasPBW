<html>
    <head>
        <title> Keluaran Form </title>
    </head>
    <body align="center">
        <h3> Data Pendaftar </h3>
        <?php 
            echo "Nama :" .$_GET['nama']."</br>";
            echo "Password :" .$_GET['password']."</br>";
            echo "Jenis Kelamin :" .$_GET['jenis_kelamin']."</br>";
            echo "Keahlian :";
            if (isset($_GET['keahlian'])!='')
               {
                    echo $_GET['keahlian']."</br>";
               }
           if (isset($_GET['keahlian1'])!='')
               {
                    echo $_GET['keahlian1']."</br>";
               }
            if (isset($_GET['keahlian2'])!='')
               {
                    echo $_GET['keahlian2']."</br>";
               }
            echo "Tempat Lahir :" .$_GET['tempat_lahir']."</br>";
            echo "Deskripsi Diri :" .$_GET['deskripsi']."</br>";
        ?>
    </body>
</html>