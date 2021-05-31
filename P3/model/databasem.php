<?php

class database{
	
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "maba";
	var $con;

	function __construct(){
	$this->con= mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}

	function tampil_data(){
	$data = mysqli_query($this->con,"select * from data");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
	return $hasil;
	}
	function input($nama,$prodi,$email){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),"insert into data values('','$nama','$prodi','$email')");
	}
	function hapus($id){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from data where id='$id'");
	}
	function edit($id){
	$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from data where id='$id'");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
	return $hasil;
	}
	function update($id,$nama,$prodi,$email){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update data set nama='$nama', prodi='$prodi', email='$email' where id='$id'");
	}
}
?>