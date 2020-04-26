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

// fungsi untuk menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id ");
    
    return mysqli_affected_rows($conn);

}

// ubah data
function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['gambar']);
    $tipe = htmlspecialchars($data['tipe']);
    $prosesor = htmlspecialchars($data['prosesor']);
    $memori = htmlspecialchars($data['memori']);
    $storage = htmlspecialchars($data['storage']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE elektronik
                SET
                gambar = '$gambar',
                tipe = '$tipe',
                prosesor = '$prosesor',
                memori = '$memori',
                storage = '$storage',
                harga = '$harga'
            WHERE id = '$id' ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

// registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah dingunakan');
            </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?>