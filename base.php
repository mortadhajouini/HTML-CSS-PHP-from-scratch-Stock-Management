<?php
include_once("Conn.php");
class Produit extends Conn{
private $sn,$type,$marque,$da,$aff;
function __construct($sn="",$type="",$marque="",$da="",$aff="") {
$this->sn=$sn;
$this->type=$type;
$this->marque=$marque;
$this->da=$da;
$this->aff=$aff;
parent:: __construct();

}
function insert($ncin,$nom,$prenom,$telephone){
$query="insert into client(ncin,nom,prenom,tel)values (?, ?, ?, ?)";
$res=$this->pdo->prepare($query);
return $res->execute(array($ncin,$nom,$prenom,$telephone));
}
function delete($sn) {
$query = "delete from produit where sn=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($sn));
}
function liste(){
$query = "select * from produit";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
}?>