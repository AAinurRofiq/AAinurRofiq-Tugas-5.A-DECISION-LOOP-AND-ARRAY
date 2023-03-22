<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <style>
        @import url('https://fonts.googleapiS.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>
</head>
<body>

    <?php
        $birthdate = '2002-09-27'; //input tanggal lahir
        $age = date_diff(date_create($birthdate), date_create('now'))->y;
    ?>

    <div class="container">
        <div class="card-one">

            <div class="profile">
                <img src="assets/img/pp.png" alt="">
            </div>

            <div style="color: white; font-size: 18px;">
                <P><b>ACHMAD AINUR ROFIQ</b></P> 
            </div>

            <div class="ts">
                <p><b>Tentang saya</b></p> 
            </div>
            
            <div style="color: white; text-align: justify;">
                <p>Pantang menyerah, pekerja keras, suka mencoba hal baru. Mudah bergaul dengan orang lain, mudah beradaptasi dengan lingkungan, dan rasa keinginan belajar yang tinggi. Umur <?php echo $age;?></p> 
            </div>

            <div class="dt">
                <p><b>Detail Kontak</b></p> 
            </div>

            <div style="width: 284px; color: white; ">
                <?php
                    $detailKontak = array(
                        array("Email", "aarofiq44@gmail.com"),
                        array("No Telpon", "082332326854"),
                        array("Instagram", "@rofiq__28")
                    );
                ?>

                <table style="border-spacing: 10px;">
                    <?php
                        $i = 0;
                        while($i < count($detailKontak)) {
                            echo "<tr>";
                            echo "<td>" . $detailKontak[$i][0] . "</td>";
                            echo "<td>" . $detailKontak[$i][1] . "</td>";
                            echo "</tr>";
                            $i++;
                        }
                    ?>
                </table>
            </div>       
        </div>

        <div class="card-two">
            <P class="ra">RIWAYAT AKADEMIK</P>
            <img src="assets/img/akademi.png" alt="akademi">
        </div>
        
        <div class="card-three">
            <p class="po">PENGALAMAN ORGANISASI</p>
            <img src="assets/img/po.png" alt="pengalam organisasi" >
        </div>

        <div class="card-four">
            <table style="border-spacing: 6px;">
                <?php
                    $riwayatAkademik = array(
                        array("Universitas Pembangunan Nasional “Veteran” Jawa Timur", "Informatika, Fakultas Ilmu Komputer", "2021 - saat ini"),
                        array("SMA Negeri 13 Surabaya", "IPA", "2018-2021")
                        );
                        $i = 0;
                        while($i < count($riwayatAkademik)) {
                            echo "<tr>";
                            echo "<td style='font-size: 16px;'><b>" . $riwayatAkademik[$i][0] . "</b></td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>" . $riwayatAkademik[$i][1] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>" . $riwayatAkademik[$i][2] . "</td>";
                            echo "</tr>";
                            $i++;
                        }
                    ?>
                </table>
            </div>
        
            <div class="line">
                <img src="assets/img/Line.png" alt="line">
            </div>
        
            <div class="card-five">
                <?php
                    $pengalamanOrganisasi = array(
                        array("Sekretaris", "Remaja Masjid Baitul Hasanah", "2018-saat ini"),
                        array("Ketua Pramuka", "Pradana Pramuka Gudep 24.507 SMA Negeri 13 Surabaya", "2019-2020"),
                        array("Dewan Pengurus HUMAS", "mahapala UPN 'Veteran' Jawa Timur", "2021-saat ini")
                    );
                    
                    $i = 0;
                    while($i < count($pengalamanOrganisasi)) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<td style='font-size: 16px;'><b>" . $pengalamanOrganisasi[$i][0] . "</b></td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $pengalamanOrganisasi[$i][1] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $pengalamanOrganisasi[$i][2] . "</td>";
                        echo "</tr>";
                        echo "</table>";
                        $i++;
                    }
                ?>
            </div>
        </div>
                </body>
                </html>        
                        
                        
