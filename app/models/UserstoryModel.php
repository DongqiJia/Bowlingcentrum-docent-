<?php

class UserstoryModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    // usestory 1
    public function getPersoonOverzicht()
    {
        $this->db->query('SELECT P.Voornaam
                                ,p.Tussenvoegsel
                                ,p.Achternaam 
                                ,p.Id
                          from persoon p
                          inner join typepersoon t on t.Id = p.TypePersoonId
                          inner join reservering r on r.PersoonId = p.Id
                          order by r.Datum desc
                         ');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getReserveringOverzicht($PersoonId)
    {
        $this->db->query('SELECT P.Voornaam
                                ,p.Tussenvoegsel
                                ,p.Achternaam
                                ,r.Datum
                                ,r.AantalUren
                                ,r.BeginTijd
                                ,r.EindTijd
                                ,r.AantalVolwassen
                                ,r.AantalKinderen
                          from persoon p
                          inner join typepersoon t on t.Id = p.TypePersoonId
                          inner join reservering r on r.PersoonId = p.Id
                          where p.Id = :Id
                          order by r.Datum desc');
        $this->db->bind(':Id', $PersoonId, PDO::PARAM_INT);
        $result = $this->db->resultSet();
        return $result;
    }


    //userstory 2
    public function getBaanReservering()
    {
        $this->db->query('SELECT b.Id 
                                ,p.Voornaam
                                ,p.Tussenvoegsel
                                ,P.Achternaam
                                ,r.Datum
                                ,r.AantalVolwassen
                                ,r.AantalKinderen
                                ,b.Nummer
                          from persoon p
                          inner join reservering r on r.PersoonId = p.Id
                          inner join baan b on b.Id = r.BaanId
                         ');
        $result = $this->db->resultSet();
        return $result;
    }
    public function getBaanById($id)
    {
        $this->db->query('SELECT b.Id 
                                ,p.Voornaam
                                ,p.Tussenvoegsel
                                ,P.Achternaam
                                ,r.Datum
                                ,r.AantalVolwassen
                                ,r.AantalKinderen
                                ,b.Nummer
                                ,b.Heefthek
                          from persoon p
                          inner join reservering r on r.PersoonId = p.Id
                          inner join baan b on b.Id = r.BaanId
                          where b.Id = :Id;');
        $this->db->bind(':Id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }
    public function BaanUpdate($post)
    {
        $this->db->query("UPDATE `baan` as b 
                          inner join `reservering` as r on r.BaanId = b.Id
                          inner join `persoon` as p on p.Id = r.PersoonId
                          set b.Nummer = :Nummer
                          where b.Id = :Id");
        $this->db->bind(':Nummer', $post["Nummer"], PDO::PARAM_INT);
        $this->db->bind(':Id', $post["Id"], PDO::PARAM_INT);
        return $this->db->execute();
    }
}
