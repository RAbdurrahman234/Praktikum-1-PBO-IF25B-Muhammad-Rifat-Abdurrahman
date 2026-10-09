<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;
}
 //objek
$produk = new Produk();
$produk->kode = 'p0001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung harga
$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK;

//total
$total = $produk->harga + $jumlahPajak;

//output
echo "Produk: ".$produk->nama;
echo "</br>";

echo "harga: ".$produk->harga;
echo "</br>";

echo "Stok: ".$produk->stok;
echo "</br>";

echo "Pajak: ".$pajak . "%";
echo "</br>";

echo "total harga setelah pajak: Rp.".$total;




