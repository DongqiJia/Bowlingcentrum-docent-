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

        $records = $this->userstoryModel->getReserveringOverzicht();
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
            'title' => "Overzicht Reserveringen",
            'Naam' => "Mazin Jamil",
            'rows' => $rows
        ];

         $this->view('userstory/index', $data);
        
    }


}