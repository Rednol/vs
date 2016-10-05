<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OpdrachtToevoegenController extends Controller {
   public function insertform(){
      return view('opdrachttoevoegen');
   }
    
   public function insert(Request $request){
   	  // Haal data uit text input velden en stop ze in variabelen 
   	  // voor later gebruik.
      $titel = $request->input('opdracht_titel');
      $type  = $request->input('opdracht_type');
      $beschrijving  = $request->input('opdracht_beschrijving');
      $leereenheden  = $request->input('opdracht_leereenheden');

// Array met de data voor de nieuwe opdracht en de kolommen 
// waar de data moet worden ingezet.
$data = array("titel"=>"$titel","type"=>"$type", "beschrijving" => "$beschrijving", "leereenheden" => "$leereenheden");

// Tabel waar de data in moet worden gezet.
DB::table('opdrachten')->insert(array($data));
 
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
