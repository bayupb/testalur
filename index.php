<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding:10px;">
     <?php
            $kalimat="
            Dalam kehidupan suatu negara, pendidikan memegang peranan yang amat
            penting untuk menjamin kelangsungan hidup negara dan bangsa, karena pendidikan
            merupakan wahana untuk meningkatkan dan mengembangkan kualitas sumber daya
            manusia. Seiring dengan perkembangan teknologi komputer dan teknologi informasi,
            sekolah-sekolah di Indonesia sudah waktunya mengembangkan Sistem Informasi
            manajemennya agar mampu mengikuti perubahan jaman.
            <br><br>
            SISKO mampu memberikan kemudahan pihak pengelola menjalankan
            kegiatannya dan meningkatkan kredibilitas dan akuntabilitas sekolah dimata siswa,
            orang tua siswa, dan masyakat umumnya.Penerapan teknologi informasi untuk
            menunjang proses pendidikan telah menjadi kebutuhan bagi lembaga pendidikan di
            Indonesia. Pemanfaatan teknologi informasi ini sangat dibutuhkan untuk
            meningkatkan efisiensi dan produktivitas bagi manajemen pendidikan. Keberhasilan
            dalam peningkatan efisiensi dan produktivitas bagi manajemen pendidikan akan ikut
            menentukan kelangsungan hidup lembaga pendidikan itu sendiri. Dengan kata lain
            menunda penerapan teknologi informasi dalam lembaga pendidikan berarti menunda
            kelancaran pendidikan dalam menghadapi persaingan global.
            <br><br>
            Pemanfaatan teknologi informasi diperuntukkan bagi peningkatan kinerja
            lembaga pendidikan dalam upayanya meningkatkan kualitas Sumber Daya Manusia
            Indonesia. Guru dan pengurus sekolah tidak lagi disibukkan oleh pekerjaan-pekerjaan
            operasional, yang sesungguhnya dapat digantikan oleh komputer. Dengan demikian
            dapat memberikan keuntungan dalam efisien waktu dan tenaga.
            <br><br>
            Penghematan waktu dan kecepatan penyajian informasi akibat penerapan
            teknologi informasi tersebut akan memberikan kesempatan kepada guru dan pengurus
            sekolah untuk meningkatkan kualitas komunikasi dan pembinaan kepada siswa.
            Dengan demikian siswa akan merasa lebih dimanusiakan dalam upaya
            mengembangkan kepribadian dan pengetahuannya.
            <br><br>
            Sebagai contoh yang paling utama adalah sistem penjadwalan yang harus
            dilakukan setiap awal semester. Biasanya membutuhkan waktu lama untuk menyusun penjadwalan, Dengan SISKO dapat selesai dalam waktu singkat. Untuk
            mempermudah bagian administrasi kurikulum sekolah, SISKO menyediakan fasilitas
            istimewa yang merupakan inti dari sistem kurikulum sekolah yaitu membantu dalam
            pembuatan penjadwalan mata pelajaran sekolah yang dapat diproses tidak lebih lama
            dari 10 menit. Administrator hanya akan memasukkan kondisi dari masing-masing
            guru yang akan mengajar baik itu dalam 1 minggu seorang guru dapat mengajar berapa
            jam, selain itu dapat juga melakukan pemesanan tempat dan penempatan hari libur
            masing-masing guru dalam 1 minggu masa mengajar. Setelah semua kondisi
            dimasukkan, sistem akan memproses semua data tersebut sehingga menghasilkan
            jadwal yang optimal dan dapat langsung dipakai karena sistem akan mendeteksi
            sehingga tidak akan ada jadwal yang bertumpukan satu dengan yang lainnya.
            <br><br>
            Setelah semua kondisi dimasukkan, sistem akan memproses semua data
            tersebut sehingga menghasilkan jadwal yang optimal dan dapat langsung dipakai
            karena sistem akan mendeteksi sehingga tidak akan ada jadwal yang bertumpukan satu
            dengan yang lainnya. Setelah permasalahan penjadwalan dapat ditangani dengan baik,
            hal yang tidak kalah pentingnya adalah memasukkan data siswa.
            <br><br>
            Program SISKO telah menyediakan fasilitas untuk penanganan penilaian
            siswa yang secara langsung memasukkan nilai ke dalam raport dan siap dicetak. Untuk
            sistem penilaian siswa, yang dapat melakukan pengisian hanya Guru yang mengajar
            mata pelajaran. Sistem penilaian telah disesuaikan dengan KBK sehingga masingmasing guru dapat memasukkan deskripsi narasi dari mata pelajaran. Untuk
            menampilkan data penilaian dapat disesuaikan kembali dengan kebijaksanaan dari
            masing-masing lembaga pendidikan apakah ingin menampilkan data nilai akhir siswa
            maupun menampilkan data nilai siswa setiap kali mengadakan test ataupun tugas
            tertentu.
            <br><br>
            Selain Modul untuk penjadwalan dan Modul Penilaian siswa, SISKO juga
            memberikan fasilitas untuk bagian administrasi keuangan sekolah dalam hal
            pembayaran SPP siswa. Bagian administrasi dapat langsung mengecek siapa siswa
            yang mempunyai tunggakan SPP dan untuk detail histori pembayaran SPP dari
            masing-masing siswa dapat dicetak seperti mencetak buku tabungan di bank sehingga
            mempermudah pekerjaan pihak administrasi keuangan. Administrasi keuangan dapat
            langsung melakukan pengaturan data pembayaran masing-masing siswa sesuai
            dengan kebutuhan dan dapat diubah sewaktu-waktu apabila ada kenaikan pembayaran";
            $dicari    ="setiap";
            $belum_replace = "adalah";
            $replace = "ialah";
        ?>
        <p>Kalimat yang dicari: "<?php echo $kalimat?>"</p>
        <p>Kata yang di cari: <u><?php echo $dicari?></u></p>
        <?php
        if(preg_match("/$dicari/i", $kalimat)) {
            echo 'Kata <b>'.$dicari.'</b> ditemukan.';
        }
        else {
            echo 'Kata <b>'.$dicari.'</b> tidak ditemukan.';
        }
        ?>

        <p>Replace kalimat <b>adalah</b> menjadi <b?>ialah:</b></p>
        <p>Replace kalimat <b>adalah</b> menjadi <b?>ialah:
            <?php echo str_replace("adalah", "ialah" , $kalimat);?>
            <?php
            if(str_replace($belum_replace , $replace, $kalimat)) {
                echo 'Kata <b>'.$replace.'</b> ditemukan.';
            }
            ?>
        </b>
        </p>

        <p>Sorting Abjad kalimat:</b></p>
        <p>Sorting Abjad kalimat:
            <?php 
            $sorting =array ($kalimat);
            sort($sorting);
            print_r($sorting);
            ?>
           
        </b>
        </p>
</body>
</html>