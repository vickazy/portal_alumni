<h3>Fresh Graduate</h3>
<?
$fresh="select * from alumni where ROWNUM <= 5 order by thn_lulus desc";
$statement1=oci_parse($c,$fresh);
oci_execute($statement1);
while($baris1=oci_fetch_array($statement1)){
    ?>

                <div class="row-fluid">

                    <div class="span2">
                        <?
                        if($baris1['FOTO'] == "belum upload")
                        {
                            echo    "<img src='resource/img/default.png' alt='' class='thumbnail span12'>";
                            //echo  "</br>",$foto[0],"</br>";
                        }
                        else
                        {
                            echo    "<img src='photo/",$baris1['FOTO'],"' alt='' class='thumbnail span12'>";
                            //echo  "</br>sudah upload</br>";
                            //echo  "</br>",$baris1['foto'],"</br>";
                        }
                        ?>
                        <!--        <img src="resource/img/default.png" alt="" class="thumbnail span12">	-->
                    </div>
    <div class="span10">
        <p>
            <a href="profilpr.php?namauser=<?=$baris1['NAMA']?>"><strong><?php echo  $baris1['NAMA'];?></strong></a><br>
            IPK <?php echo  $baris1['IPK'];?><br>
            Graduate <?php echo  $baris1['THN_LULUS'];?><br>
            Concentration <?php echo  $baris1['KONSENTRASI'];?><br>
            Title Of TA <?php echo  $baris1['JUDUL_TA'];?>
        </p>
        <br>

    </div>
    <?
}
?>
    <a href="daftar_alumniad.php">See More Fresh Graduate</a>
        </div>
            <hr>
<h3>Company's Info</h3>
<?
$com="select * from Perusahaan where ROWNUM <= 5 order by id_perusahaan desc";
$statement1=oci_parse($c,$com);
oci_execute($statement1);
while($baris1=oci_fetch_array($statement1)){
    ?>

                <div class="row-fluid">

                    <div class="span2">
                        <?
                        if($baris1[8] == "belum upload")
                        {
                            echo    "<img src='resource/img/default.png' alt='' class='thumbnail span12'>";
                            //echo  "</br>",$foto[0],"</br>";
                        }
                        else
                        {
                            echo    "<img src='photo/",$baris1[8],"' alt='' class='thumbnail span12'>";
                            //echo  "</br>sudah upload</br>";
                            //echo  "</br>",$baris1['foto'],"</br>";
                        }
                        ?>
                        <!--        <img src="resource/img/default.png" alt="" class="thumbnail span12">		-->
                    </div>
    <div class="span10">
        <p>
            <a href="profiluser.php?namauser=<?=$baris1['NAMA_PERUSAHAAN']?>"><strong><?php echo  $baris1['NAMA_PERUSAHAAN'];?></strong></a><br>
            Sector <?php echo  $baris1['BIDANG'];?><br>
            Address <?php echo  $baris1['ALAMAT_PERUSAHAAN'];?><br>
            Website <?php echo  $baris1['WEB'];?><br>
        </p>
        <br>

    </div>
    <?
}
?>
    <a href="daftar_perusahaanad.php">See More Company</a>
        </div>