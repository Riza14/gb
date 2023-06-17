<?php
require 'gizi.php';

$conn = mysqli_connect("localhost", "root", "", "gizi_buruk");

// ambil data dari database
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data_registrasi)
{
    global $conn;

    $username = htmlspecialchars(strtolower(stripslashes($data_registrasi["username"])));
    $email = htmlspecialchars(strtolower(stripslashes($data_registrasi["email"])));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $data_registrasi["password"]));
    $password2 = htmlspecialchars(mysqli_real_escape_string($conn, $data_registrasi["password2"]));

    // cek apakah username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username, email FROM akun_user WHERE username = '$username' OR email = '$email'");
    // jika username ada di database maka
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('Username atau email sudah di gunakan');
                </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                    alert('konfirmasi password tidak sesuai !');
                </script>";
        return false;
    }

    // enkripsi password
    // password_hash adalah fungsi enkripsi password
    // PASSWORD DEFAULT algoritma pengacakan password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO akun_user VALUES('','$username','$email','$password')");

    // mengembalikan angaka satu jika berhasil nol jika gagal
    return mysqli_affected_rows($conn);
}

function login($data_login)
{

    global $conn;

    $username = htmlspecialchars($data_login['username']);
    $email = htmlspecialchars($data_login['email']);
    $password = htmlspecialchars($data_login['password']);

    $result = mysqli_query($conn, "SELECT * FROM akun_user  WHERE username = '$username' AND email = '$email'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        // cek password yang dimasukkan dan yang telah di-hash di database
        if (password_verify($password, $row['password'])) {
            // set session
            $_SESSION['id_akun_user'] = $row['id_akun_user'];
            $_SESSION['username'] = $row['username'];
            // cek cookie
            if (isset($_POST['remember_me'])) {
                // buat cookie
                setcookie('id', $row['id_akun_user'], time() + 120);
                setcookie('key', hash('sha256', $row['username']), time() + 120);
            }
            // set session
            $_SESSION['login'] = true;
            return true; // Login berhasil
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function remember_me()
{
    global $conn;
    // Cek cookie
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];
        // Ambil username berdasarkan id di database
        $result = mysqli_query($conn, "SELECT username FROM akun_user WHERE id_akun_user = $id");
        $row = mysqli_fetch_assoc($result);

        if ($key == hash('sha256', $row['username'])) {
            // Set session
            $_SESSION['id_akun_user'] = $id;
            $_SESSION['username'] = $row['username'];
            $_SESSION['login'] = true;

            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function tambah($data_tambah)
{
    global $conn;
    global $keterangan;
    global $penjelasan;

    $_SESSION['keterangan'] = $keterangan;
    $_SESSION['penjelasan'] = $penjelasan;

    $nama_ayah = htmlspecialchars($data_tambah["input_nama_ayah"]);
    $nama_ibu = htmlspecialchars($data_tambah["input_nama_ibu"]);
    $nama_anak = htmlspecialchars($data_tambah["input_nama_anak"]);
    // $usia_anak = htmlspecialchars($data_tambah["input_usia_anak"]);
    $tinggi_badan_anak = htmlspecialchars($data_tambah["input_tinggi_badan_anak"]);
    $berat_badan_anak = htmlspecialchars($data_tambah["input_berat_badan_anak"]);
    $jenis_kelamin_anak = htmlspecialchars($data_tambah["input_jenis_kelamin_anak"]);
    $waktu = htmlspecialchars($data_tambah["input_waktu"]);
    $tketerangan = htmlspecialchars($keterangan);
    $id_data_user = htmlspecialchars($data_tambah["input_id_akun_user"]);

    $query = "INSERT INTO data_user
                        VALUES 
                ('','$nama_ayah','$nama_ibu','$nama_anak','$tinggi_badan_anak','$berat_badan_anak','$jenis_kelamin_anak','$waktu','$tketerangan','$id_data_user')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
