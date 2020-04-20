<?php 
// function untuk mekalkukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040076") or die ("Database salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $tipe = htmlspecialchars($data['tipe']);
    $prosesor = htmlspecialchars($data['prosesor']);
    $memori = htmlspecialchars($data['memori']);
    $storage = htmlspecialchars($data['storage']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO elektronik
                    VALUES
                    ('', '$gambar', '$tipe', '$prosesor', '$memori', '$storage', '$harga')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

?>