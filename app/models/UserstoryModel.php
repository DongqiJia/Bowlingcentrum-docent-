<?php

class UserstoryModel{
    Private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getReserveringOverzicht()
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
                          where p.Id = 1
                          order by r.Datum desc
                         ');
        $result = $this->db->resultSet();
        return $result;
    }
}