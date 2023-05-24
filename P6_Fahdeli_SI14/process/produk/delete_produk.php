<?php
require_once "../../database/dbkoneksi.php";

$id = $_GET['iddel'];
$sql = "DELETE FROM produk WHERE id = ?";
$stament = $dbh->prepare($sql);
$stament->execute([$id]);

header("location:../../pages/produk/list_produk.php");