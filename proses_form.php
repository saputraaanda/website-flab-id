<?php
// Memasukkan file koneksi.php untuk menghubungkan ke database
require_once('koneksi.php');

// Periksa apakah formulir telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah semua field telah diisi
    if (isset($_POST['nama_lengkap']) && isset($_POST['email']) && isset($_POST['nomor_telepon']) && isset($_POST['subjek']) && isset($_POST['pesan'])) {
        // Ambil nilai dari field formulir
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $subjek = $_POST['subjek'];
        $pesan = $_POST['pesan'];

        // Lakukan validasi data formulir jika diperlukan

        // Simpan data ke dalam database
        $sql = "INSERT INTO tb_konsumen (nama_lengkap, email, nomor_telepon, subjek, pesan) VALUES ('$nama_lengkap', '$email', '$nomor_telepon', '$subjek', '$pesan')";

        if (mysqli_query($conn, $sql)) {
            // Data berhasil disimpan
            echo "<script>alert('Selamat, data berhasil disimpan');document.location.href='kontak.php'</script>";
        } else {
            // Jika terjadi kesalahan dalam penyimpanan data
            echo 'Maaf, terjadi kesalahan dalam mengirim pesan. Silakan coba lagi.';
        }
    } else {
        // Jika ada field yang tidak diisi
        echo 'Harap lengkapi semua field dalam formulir.';
    }
} else {
    // Jika halaman diakses langsung tanpa submit formulir
    echo 'Akses tidak valid.';
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
