<?php

require_once 'Mahasiswa.php';

// Kelas MahasiswaInternational (Subclass) yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa {
    // Variabel tambahan untuk mahasiswa internasional
    private string $negaraAsal;

    // 3 constructor Java digabung menjadi satu dengan nilai default
    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        int $umur = 0,
        string $negaraAsal = "Belum Diisi"
    ) {
        parent::__construct($nama, $nim, $umur); // memanggil constructor parent
        $this->negaraAsal = $negaraAsal;
    }

    public function getNegaraAsal(): string {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo untuk menampilkan informasi tambahan
    public function tampilkanInfo(): void {
        parent::tampilkanInfo(); // memanggil method tampilkanInfo dari parent
        echo "Negara Asal: " . $this->negaraAsal . PHP_EOL;
    }
}