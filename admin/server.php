<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "oleh_jalur";
$con = mysqli_connect($server, $username, $password) ;
mysqli_select_db($con, $database) or die("<h1>Koneksi Kedatabase Error : </h1>" . mysqli_error($con));

@$operasi = $_GET['operasi'];

switch    ($operasi) {
case "view_dokter":
$query_tampil_biodata = mysqli_query($con,"SELECT * FROM tbl_d_spesialis") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;

case "view_spesialis":
$query_tampil_biodata = mysqli_query($con,"SELECT * FROM tbl_d_kat GROUP by kategori") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;

case "search_view_spesialis":

@$nama = $_GET['nama'];
$query_tampil_biodata = mysqli_query($con,"SELECT * FROM tbl_d_kat WHERE kategori LIKE '%$nama%' GROUP BY kategori ") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;

case "view_dr_spesialis":

@$spesialis = $_GET['spesialis'];
$query_tampil_biodata = mysqli_query($con,"SELECT a.*,b.nama_toko,b.koordinat,b.alamat,b.no_telp FROM tbl_d_kat AS a INNER JOIN tbl_toko AS b ON a.`toko`=b.nama_toko WHERE a.kategori= '$spesialis'") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;

case "view_toko_kategori":

@$kategori = $_GET['kategori'];
@$toko = $_GET['toko'];
$query_tampil_data = mysqli_query($con,"SELECT a.*, b.koordinat,b.alamat,b.no_telp FROM tbl_d_kat AS a LEFT JOIN tbl_toko AS b ON a.toko=b.nama_toko  where kategori= '$kategori' and toko= '$toko'") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_data)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;

case "view_list_dr_spesialis":

@$rs = $_GET['rs'];
$query_tampil_biodata = mysqli_query($con,"SELECT * FROM tbl_d_spesialis where  rumah_sakit= '$rs'") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;


case "view_rs":
$query_tampil_biodata = mysqli_query($con,"SELECT * FROM rumah_sakit ") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;

case "view_map_kategori":
@$kategori = $_GET['kategori'];
@$jk = $_GET['jenis_kelamin'];
$query_tampil_biodata = mysqli_query($con,"SELECT a.*, b.koordinat,b.alamat FROM tbl_d_kat AS a LEFT JOIN tbl_toko AS b ON a.toko=b.nama_toko 
WHERE  kategori='$kategori' GROUP BY a.nama ") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;


case "view_map_dr_list":
@$id = $_GET['id'];

$query_tampil_biodata = mysqli_query($con,"SELECT a.*, b.koordinat,b.alamat FROM tbl_d_kat AS a LEFT JOIN tbl_toko AS b ON a.toko=b.nama_toko 
WHERE  a.id='$id' ") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;

case "view_rs_spesialis":
@$spesialis = $_GET['spesialis'];
@$jk = $_GET['jenis_kelamin'];
$query_tampil_biodata = mysqli_query($con,"SELECT a.*, b.koordinat,b.alamat FROM tbl_d_spesialis AS a LEFT JOIN rumah_sakit AS b ON a.rumah_sakit=b.nama_rumahsakit 
WHERE  spesialis='$spesialis' ") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[]=$data;
}
echo json_encode($data_array);

break;

case "view_spesialis_jk":
@$spesialis = $_GET['spesialis'];
$query_tampil_biodata = mysqli_query($con, "SELECT * FROM tbl_d_spesialis WHERE spesialis='$spesialis' GROUP BY  jenis_kelamin ") or die (mysqli_error($con));
$data_array = array();
while ($data = mysqli_fetch_assoc($query_tampil_biodata)) {
$data_array[] = $data;
}
echo json_encode($data_array);
break;



case "get_dokter_by_id":
@$id = $_GET['spesialis'];
$query_tampil_biodata = mysqli_query($con, "SELECT * FROM tbl_d_spesialis WHERE spesialis='$id'") or die (mysqli_error($con));
$data_array = array();
$data_array = mysqli_fetch_assoc($query_tampil_biodata);
echo "[" . json_encode ($data_array) . "]";

break;


default:
break;
}
?>