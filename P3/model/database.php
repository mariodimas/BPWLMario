<?php
class database{

var $host = "localhost";
var $uname = "root";
var $pass = "";
var $db = "malasngoding";
var $con;

function __construct(){
    $this->con=mysqli_connect($this->host, $this->uname,$this->pass,$this->db);
    mysqli_select_db($this->con,$this->db);

}

function tampil_data(){
    $data = mysqli_query($this->con, "select*from user");
    while ($d = mysqli_fetch_array($data)){
        $hasil[] = $d;
    }
    return $hasil;
}

function input($nama,$alamat,$usia){
    mysqli_query($this->con,"insert into user values('','$nama','$alamat','$usia')");
}

function hapus($id){
    mysqli_query($this->con,"delete from user where id='$id'");
}

function edit($id){
	$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
    return $hasil;
}
function update($id,$nama,$alamat,$usia){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update user set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
	}
}
?>