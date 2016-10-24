@extends('layouts.app')
<?php
use App\Leereenheid;
$leereenheden = App\Leereenheid::all();
?>

<link rel="stylesheet" href="css/app.css" type="text/css" media="screen"/>  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

@section('content')
<div class="container">
    <div class="row">
      <!-- Menu -->
      <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li><a href="{{ url('/opdrachten') }}"><i class="fa fa-tasks fa-fw"></i>Opdrachten</a></li>
                <li class="active"><a href="{{ url('/leereenheden') }}"><i class="fa fa-book fa-fw"></i>Leereenheden</a></li>
                <li><a href="{{ url('/voortgang') }}"><i class="fa fa-bar-chart fa-fw"></i>Voortgang</a></li>
                <li><a href="{{ url('/notificaties') }}"><i class="fa fa-bell-o fa-fw"></i>Notificaties</a></li>
                <li><a href="{{ url('/feedback') }}"><i class="fa fa-comments fa-fw"></i>Feedback</a></li>
                <li><a href="{{ url('/beoordelingen') }}"><i class="fa fa-check-square-o fa-fw"></i>Beoordelingen</a></li>
                <li><a href="{{ url('/instellingen') }}"><i class="fa fa-cogs fa-fw"></i>Instellingen</a></li>
            </ul>
      </div>

<!-- Kolom header met leereenheden toevoegen knop -->
<div class="panel panel-default col-md-9">
  <div class="panel-body" style="float:left;">Leereenheden</div>
    <a href="#" class="btn btn-default btn-primary" id="myBtn" style="float: right; margin-top: 7px;">Toevoegen</a>
    

</div>

    <!--Leereenheden Kolom  -->
<div class="panel panel-default col-md-3">
    <div class="panel-heading">Leereenheden<a class="tooltips" href="#"><i class="fa fa-question" style="float:right;"></i><span>Klik op een leereenheid om de preview te zien.</span></a></div>
        <div class="panel-body" style="padding: 1px;">
            <?php
              foreach ($leereenheden as $leereenheid) {
              echo "<div class='col-md-12 well'>";
              echo "<a class='leer' onclick='showDiv()'>$leereenheid->Naam </a><a href='/vs/resources/assets/$leereenheid->Naam.pdf'><i style='float:right' class='fa fa-external-link'></i></a>";
              echo "</div>";
             } ?>
        </div>
</div>
<!--Lopende Opdrachten Kolom -->
<div class="panel panel-default col-md-3">
    <div class="panel-heading">Gekoppelden Opdrachten</div>
              <?php
               foreach ($leereenheden as $leereenheid) {
                echo "<div class='col-md-12 well' >";
                echo $leereenheid->Opdrachten;
                echo "</div>"; }
               ?>
               

<!-- Popup Formulier -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">x</span>
      <h2>Leereenheid toevoegen</h2>
    </div>
        <div class="modal-body">
            <form action="leereenheden/toevoegen" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            Leereenheid:  <select name="leereenheid_naam" class="form-control">
                          <option value="MGIDEVBT1">MGIDEVBT1</option>
                          <option value="MGIDEVBT2">MGIDEVBT2</option>
                          </select>   
                        <br>
                    NLQF: <select name="leereenheid_nlqf" class="form-control">
                          <option value="Niveau 1">Niveau 1</option>
                          <option value="Niveau 2">Niveau 2</option>
                          <option value="Niveau 3">Niveau 3</option>
                          <option value="Niveau 4">Niveau 4</option>
                          </select>  
                        <br>                    
      </div>
          <div class="modal-footer">
          <input class="button" type="Reset" id="annuleer" value = "Annuleren" style="float:left; text-align: center; cursor: pointer;" />
          <input class="button" type="Submit" value = "Opslaan" style="float: right;" />
          </form>
        </div>
      </div>
    </div>

</div>
        <!-- PDF Preview Kolom -->
        <div class="panel panel-default col-md-3">
            <div class="panel-heading">Preview</div>
                <div class="panel-body" style="padding: 1px;"></div>
                 <?php
foreach ($leereenheden as $leereenheid){
      echo "<object id='welcomeDiv' style='display:none' width='270' height='300' data='/vs/resources/assets/$leereenheid->Naam.pdf'></object>";

    }?>
                 
        </div>
  </div>               
</div>

<script type="text/javascript" src="js/popup.js"></script>


@endsection
