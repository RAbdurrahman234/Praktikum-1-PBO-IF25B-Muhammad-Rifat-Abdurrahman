<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //Constant
    public const PAJAK = 0.11;

    //method: function
    public function hitungHarga()  {
        $jumlah = $this->harga * self::PAJAK;
        return $jumlah;
    }

    public function namaProduk($barang) {
        $this->nama = $barang; 
        return $this->nama;
    }
}

//objek
$produk = new Produk();
$produk->kode = 'p0001';
$barang = $produk->namaProduk('laptop');
$produk->harga = 12000000;
$produk->stok = 5;


$pajak = Produk::PAJAK * 100;
$jumlah = $produk->hitungHarga();

//output
echo "Produk: ".$barang;
echo "</br>";

echo "harga: ".$produk->harga;  
echo "</br>";

echo "Stok: ".$produk->stok;
echo "</br>";

echo "Pajak: ".$pajak . "%";
echo "</br>";

echo "total harga setelah pajak: Rp.".$jumlah;
