<!-- ----------------- CONTROLLER ----------------- -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Latihan1 extends CI_Controller {
public function index()
{
echo "Coba membuat controller baru";
}
public function testPenjumlahan($nilai1, $nilai2){
$this->load->model("Model_latihan1");
$hasil = $this->Model_latihan1->simpleSum($nilai1, $nilai2);
//echo "Hasil penjumlahan bilangan sederhana ".$nilai1." + ".$nilai2." = ".$hasil;
$data['nilai1'] = $nilai1;
$data['nilai2'] = $nilai2;
$data['hasil'] = $hasil;
$this->load->view('latihan1.html', $data);
}
}
?>
<!-- ----------------- MODEL ----------------- -->
<?php
class Model_latihan1 extends CI_Model{
//variable
public $n1, $n2, $hasil;
//method
public function simpleSum ($nilai1, $nilai2){
$this-> n1 = $nilai1;
$this-> n2 = $nilai2;
$this-> hasil = $this->n1 + $this->n2 ;
return $this->hasil;
}
}
?>
<!-- ----------------- VIEW ----------------- -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hasil Latihan 1</title>
</head>
<body>
<div id="container">
<h1>Hasil latihan 1</h1>
<h4>Hasil code sederhana MVC test penjumlahan</h4>
<div id="body">
<p>Nilai 1 = <?= $nilai1 ?> </p>
<p>Nilai 2 = <?= $nilai2 ?> </p>
<p>Hasil = <?= $hasil ?> </p>
</div>
</div>
</body>
</html>