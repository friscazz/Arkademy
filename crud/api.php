<!DOCTYPE html>
<html>
<head>
	<title>Input Biodata</title>
</head>
<body>
	<form method="POST">
		<label>Name :</label><br>
		<input type="teks" name="nama"><br>
		<label>Age :</label><br>
		<input type="teks" name="umur"><br>
		<label>Address :</label><br>
		<input type="teks" name="alamat"><br>
		<label>Hobies</label><br>
		<input type="teks" name="hobi"><br>
		<label>status :</label><br>
		<select name="status">
			<option value="0">not married</option>
			<option value="1">married</option>
		</select><br>
		<label>School</label><br>
		<input type="teks" name="sekolah"><br>
		<label>Skills</label><br>
		<input type="teks" name="skil1"><br>
		<input type="teks" name="skil2"><br>
		<input type="teks" name="skil3"><br>
		<input type="teks" name="skil4"><br><br>
		<label>Coding :</label><br>
		<select name="code">
			<option value="0">yes</option>
			<option value="1">no</option>
		</select><br>
		<input type="submit" name="simpan" value="simpan">
	</form>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['nama'];
	$address = $_POST['alamat'];
	$age     = $_POST['umur'];
	$hobies[]	= $_POST['hobi'];
	$status = $_POST['status'];
	$school = $_POST['sekolah'];
	$skil[] = $_POST['skil1'];
	$skil[] = $_POST['skil2'];
	$skil[] = $_POST['skil3'];
	$skil[] = $_POST['skil4'];
	$code = $_POST['code'];
	if ($status == 0){
		$status = false;
	}else{
		$status = true;
	}
class skills{
	var $skil;
	public function tampungskil($temp4){
		return $this->skil=$temp4;
	}
	public function cetakskil(){
		echo $this->skil;
	}
}
class sch{
	var $sch;
	public function tampungsekolah($temp2){
		return $this->sch=$temp2;
	}
	public function cetaksekolah(){
		echo $this->sch;
	}
}
class biodata{
	var $name;
	var $address;
	var $age
	var $sch;
	var $status;
	var $skil;
	var $hobies;
	var $code;
	public function tampungnama($temp){
		return $this->name=$temp;
	}
	public function tampungalamat($temp1){
		return $this->address=$temp1;
	}
	public function tampungumur($temp4){
		return $this->age=$temp4;
	}
	
	public function tampungstatus($temp3){
		return $this->status=$temp3;
	}
	
	public function tampunghobi($temp5){
		return $this->hobies=$temp5;
	}
	public function tampungcoding($temp3){
		return $this->code=$temp3;
	}
	public function cetaknama(){
		echo $this->name;
	}
	public function cetakalamat(){
		echo $this->address;
	}
	public function cetakumur(){
		echo $this->age;
	}
	public function cetakstatus(){
		echo $this->status;
	}
	public function cetakhobi(){
		echo $this->hobies;
	}
	public function cetakcode(){
		echo $this->code;
	}
	
}
$namaku = new biodata();
$bid = new skills();
$sch = new sch();
$data = array(
		'name' => $namaku -> tampung($name),
		'address' => $namaku -> tampungalamat($addess),
		'age' =>  $namaku -> tampungumur($age);
		'hobi' => $namaku -> tampunghobi($hobies),
		'status' => $namaku -> tampungstatus($status),
		'sekolah' => $sch -> tampungsekolah($sch),
		'skil' => $bid -> tampungskil($skil),
		'coding' => $bid -> tampungcoding($code),

);
$json_data = json_encode($data);
echo $json_data;
	}
?>