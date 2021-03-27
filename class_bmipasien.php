<?php

class BmiPasien {
  public $nama;
  public $umur;
  public $jk; // jenis_kelamin
  public $berat; // in kg
  public $tinggi; // in cm
  private $hasilBMI;
  private $statusBMI;

  function __construct($nama, $umur, $jk, $berat, $tinggi)
  {
    $this->nama = $nama;
    $this->umur = $umur;
    $this->jk = $jk;
    $this->berat = $berat;
    $this->tinggi = $tinggi;
  }

  public function hasilBMI()
  {
    $tinggi = $this->tinggi/100; // convert cm to meter
    $this->hasilBMI = number_format($this->berat / ($tinggi * $tinggi), 2, '.', ',');
    return $this->hasilBMI;
  }

  public function statusBMI()
  {
    if ($this->hasilBMI < 18.5) {
      $this->statusBMI = 'Kekurangan Berat Badan';
    } else if ($this->hasilBMI >= 18.5 && $this->hasilBMI <= 24.9) {
      $this->statusBMI = 'Normal (Ideal)';
    } else if ($this->hasilBMI >= 25.0 && $this->hasilBMI <= 29.9) {
      $this->statusBMI = 'Kelebihan Berat Badan';
    } else {
      $this->statusBMI = 'Kegemukan (Obesitas)';
    }
    return $this->statusBMI;
  }

  public function getRowColour()
  {
    if ($this->hasilBMI < 18.5) {
      return 'bg-warning text-white';
    } else if ($this->hasilBMI >= 18.5 && $this->hasilBMI <= 24.9) {
      return 'bg-success text-white';
    } else if ($this->hasilBMI >= 25.0 && $this->hasilBMI <= 29.9) {
      return 'bg-warning text-white';
    } else {
      return 'bg-danger text-white';
    }
  }
}