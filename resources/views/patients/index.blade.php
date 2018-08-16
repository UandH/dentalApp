@extends('layouts.app')

@section('content')
  <!------------ MAIN --------------------------->
  <div class="row">
    <div class="col-xs-9">
      <h2 class="margin_bottom">Spisak svih pacijenata</h2>
    </div>
    <div class="col-xs-3 search_box">
      <input type="text" placeholder="Pretraži.." name="search">
      <button><span class="glyphicon glyphicon-search"></span></button>
    </div>
  </div>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th>Ime</th>
          <th>Prezime</th>
          <th>Broj kartona</th>
          <th>Datum poslednje posete</th>
          <th>Datum zakazanog pregleda</th>
          <th>Obavešten</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>Darko</td>
          <td>Adamović</td>
          <td>1906982700700</td>
          <td>1.04.2018.</td>
          <td>1.05.2018.</td>
          <td><input type="checkbox" name="" checked></td>
        </tr>      
        <tr class="info">
          <td>Marko</td>
          <td>Nikolić</td>
          <td>1906982700701</td>
          <td>1.04.2018.</td>
          <td>približio se zakazani datum</td>
          <td><input type="checkbox" name=""></td>
        </tr>
        <tr class="danger">
          <td>Ne javlja se</td>
          <td>Nikolić</td>
          <td>1906982700702</td>
          <td>1.04.2018.</td>
          <td>prošao zakazani datum</td>
          <td><input type="checkbox" name=""></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!------------ END OF MAIN -------------------->
@endsection