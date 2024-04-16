<?php
// Assuming $koneksi is your database connection
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch keterangan from tb_ajuan based on the id
    $query = "SELECT keterangan FROM tb_ajuan WHERE no_ajuan = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $keterangan = $row['keterangan'];
        echo json_encode(array('keterangan' => $keterangan));
    } else {
        // If no result found, return an empty string
        echo json_encode(array('keterangan' => ''));
    }
} else {
    // If id is not set, return an empty string
    echo json_encode(array('keterangan' => ''));
}
?>
