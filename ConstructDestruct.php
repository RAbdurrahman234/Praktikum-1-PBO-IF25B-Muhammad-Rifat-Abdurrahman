
<?php

class Produk {

    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Constructor
    public function __construct() {
        echo "Objek produk berhasil dibuat";
        echo "<br>";
    }

    // Method: Function
    public function hitungHarga() {
        $jumlah = $this->harga * self::PAJAK;
        return $jumlah;
    }

    public function namaProduk($barang) {
        $this->nama = $barang;
        return $this->nama;
    }

    // Destructor
    public function __destruct() {
        echo "<br>Objek produk selesai digunakan";
    }
}

// Objek
$produk = new Produk();
$produk->kode = 'p0001';
$barang = $produk->namaProduk('laptop');
$produk->harga = 12000000;
$produk->stok = 5;

$pajak = Produk::PAJAK * 100;
$jumlah = $produk->hitungHarga();

// Output
echo "Kode: ".$produk->kode;
echo "<br>";

echo "Produk: ".$barang;
echo "<br>";

echo "Harga: ".$produk->harga;
echo "<br>";

echo "Stok: ".$produk->stok;
echo "<br>";

echo "Pajak: ".$pajak."%";
echo "<br>";

echo "Jumlah Pajak: Rp.".$jumlah;
echo "<br>";
