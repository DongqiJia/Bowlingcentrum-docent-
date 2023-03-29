<?php
class Userstory2 extends Controller 
{
    private $userstoryModel;
    public function __construct()
    {
        $this->userstoryModel = $this->model('UserstoryModel');
    }
    public function index()
    {
        $records = $this->userstoryModel->getBaanReservering();
        $rows = '';
        foreach($records as $value)
        {
           $rows .= "<tr>
                      <td>$value->Voornaam</td>
                      <td>$value->Tussenvoegsel</td>
                      <td>$value->Achternaam</td>
                      <td>$value->Datum</td>
                      <td>$value->AantalVolwassen</td>
                      <td>$value->AantalKinderen</td>
                      <td>$value->Nummer</td>
                      <td><a href='" . URLROOT . "/userstory2/update/$value->Id'>Wijzigen</a></td>
                     </tr>"; 
        }
        $data = [
            'title' => "Overzicht Reserveringen",
            'rows' => $rows
        ];
        $this->view('userstory2/index', $data);
    }
    public function update($id = null)
    {

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->userstoryModel->BaanUpdate($_POST);
            echo "<h1 style='text-align: center; background-color: green; color: white; padding: 20px;'> Het baannummer is gewijzigd </h1>";
            header("Refresh:2; url=" . URLROOT . "/userstory2/index");
        } else {
            $row = $this->userstoryModel->getBaanById($id);
            $data = [
                'title' => 'Details Baannummer',
                'row' =>$row
            ];
            $this->view("userstory2/update", $data);
        }
    }
}