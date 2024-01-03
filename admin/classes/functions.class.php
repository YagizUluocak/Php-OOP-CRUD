<?php
class Veri extends Db
{
    public function veriGetir($tablo_adi, $sorgu)
    {
        $query = "SELECT * FROM ".$tablo_adi."".$sorgu;
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>