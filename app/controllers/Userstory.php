<?php

class Userstory extends Controller
{
    private $userstoryModel;
    public function __construct()
    {
        $this->userstoryModel = $this->model('UserstoryModel');
    }

    public function index()
    {

        $records = $this->userstoryModel->getPersoonOverzicht();
        $rows = '';
        foreach($records as $value)
        {
           $rows .= "<tr>
                      <td>$value->Voornaam $value->Tussenvoegsel $value->Achternaam</td>
                      <td><a href='" . URLROOT . "/Userstory/reserveringoverzicht/$value->Id'>Reservering</a></td>
                     </tr>"; 
        }
        $data = [
            'title' => "Overzicht Persoon",
            'rows' => $rows
        ];

         $this->view('userstory/index', $data);
        
    }

    public function reserveringoverzicht($PersoonId)
    {
       $records = $this->userstoryModel->getReserveringOverzicht($PersoonId);
       $rows = '';
       foreach($records as $value)
       {
        $rows .= "<tr>
                    <td>$value->Voornaam $value->Tussenvoegsel $value->Achternaam</td>
                    <td>$value->Datum</td>
                    <td>$value->AantalUren</td>
                    <td>$value->BeginTijd</td>
                    <td>$value->EindTijd</td>
                    <td>$value->AantalVolwassen</td>
                    <td>$value->AantalKinderen</td>
                  </tr>";
       }
       $data = [
        'title' => "Reservering Overzicht",
         'rows' => $rows
       ];
       $this->view('userstory/reserveringoverzicht', $data);
    }


}