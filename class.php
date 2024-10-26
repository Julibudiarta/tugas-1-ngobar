<?php
class Calculator {
    // luas persegi panjang
    public function luasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }
    //keliling persegi panjang
    public function kelilingPersegiPanjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }
    // luas persegi
    public function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
    // keliling persegi
    public function kelilingPersegi($sisi) {
        return 4 * $sisi;
    }
    // luas lingkaran
    public function luasLingkaran($jariJari) {
        return pi() * $jariJari * $jariJari;
    }
    // keliling lingkaran
    public function kelilingLingkaran($jariJari) {
        return 2 * pi() * $jariJari;
    }
}

$oprations = new Calculator();

// memberi pilihan
echo "Pilih perhitungan yang ingin dilakukan:\n";
echo "1. Luas Persegi Panjang\n";
echo "2. Keliling Persegi Panjang\n";
echo "3. Luas Persegi\n";
echo "4. Keliling Persegi\n";
echo "5. Luas Lingkaran\n";
echo "6. Keliling Lingkaran\n";
echo "Masukkan pilihan (1-6): ";
$choice = trim(fgets(STDIN));

// Mengambil input berdasarkan pilihan
switch ($choice) {
    case '1':
        echo "Masukkan panjang persegi panjang: ";
        $panjang = trim(fgets(STDIN));
        echo "Masukkan lebar persegi panjang: ";
        $lebar = trim(fgets(STDIN));
        echo "Luas Persegi Panjang: " . $oprations->luasPersegiPanjang($panjang, $lebar) . "\n";
        break;

    case '2':
        echo "Masukkan panjang persegi panjang: ";
        $panjang = trim(fgets(STDIN));
        echo "Masukkan lebar persegi panjang: ";
        $lebar = trim(fgets(STDIN));
        echo "Keliling Persegi Panjang: " . $oprations->kelilingPersegiPanjang($panjang, $lebar) . "\n";
        break;

    case '3':
        echo "Masukkan sisi persegi: ";
        $sisi = trim(fgets(STDIN));
        echo "Luas Persegi: " . $oprations->luasPersegi($sisi) . "\n";
        break;

    case '4':
        echo "Masukkan sisi persegi: ";
        $sisi = trim(fgets(STDIN));
        echo "Keliling Persegi: " . $oprations->kelilingPersegi($sisi) . "\n";
        break;

    case '5':
        echo "Masukkan jari-jari lingkaran: ";
        $jariJari = trim(fgets(STDIN));
        echo "Luas Lingkaran: " . $oprations->luasLingkaran($jariJari) . "\n";
        break;

    case '6':
        echo "Masukkan jari-jari lingkaran: ";
        $jariJari = trim(fgets(STDIN));
        echo "Keliling Lingkaran: " . $oprations->kelilingLingkaran($jariJari) . "\n";
        break;

    default:
        echo "Pilihan tidak valid.\n";
}
?>