<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('css/admin.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>

</head>

<body>
<h1>Gebruikers toevoegen</h1>
<ul id="selector">
    <li id="student" class="active">Student</li>
    <li id="docent">Docent</li>
    <li id="coach">Coach</li>
</ul>

{{-- Invoervelden @ Student --}}
<div id="forms">
    <form class="student" action="">
    <h2>Student</h2> <br>
    Voornaam:<br>
    <input type="text" name="s_firstname" value="">
    <br>
    Achternaam:<br>
    <input type="text" name="s_lastname" value="">
    <br>
    Student nummer:<br>
    <input type="text" name="s_firstname" value="">
    <br>
    Student email:<br>
    <input type="text" name="s_email" value="">
    <br><br>
    <input type="submit" value="Submit">
</form>
{{-- Invoervelden @ Docent --}}
<form class="docent" action="">
    <h2>Docent</h2> <br>
    Voornaam:<br>
    <input type="text" name="d_firstname" value="">
    <br>
    Achternaam:<br>
    <input type="text" name="d_lastname" value="">
    <br>
    Docent email:<br>
    <input type="text" name="d_email" value="">
    <br><br>
    <input type="submit" value="Submit">
</form>
{{-- Invoervelden @ Coach--}}
<form class="coach" action="">
    <h2>Coach</h2> <br>
    Voornaam:<br>
    <input type="text" name="c_firstname" value="">
    <br>
    Achternaam:<br>
    <input type="text" name="c_lastname" value="">
    <br>
    Coach email:<br>
    <input type="text" name="c_email" value="">
    <br><br>
    <input type="submit" value="Submit">
</form>
</div>

</body>
</html>