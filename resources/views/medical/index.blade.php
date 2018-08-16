@extends('layouts.navbar')

   @section('main')
      <!------------ MAIN ------------------>
      <div class="row col-xs-9">
         <div class="col-xs-7">
            <div class="pers-data">
               <label>Name:</label>
               <div class="well well-sm">
                  <h3>Darko Adamović</h3>
               </div>
            </div>
            <div class="pers-data">
               <label>Number:</label>
               <div class="well well-sm">
                 <h3>19061982700700</h3>
               </div>  
            </div>
            <div class="pers-data">
               <label>Date of birth:</label>
               <div class="well well-sm">
                  <h3>19.06.1982.</h3>
               </div>  
            </div>
            <div class="pers-data">
               <label>Contact:</label>
               <div class="well well-sm">
                  <h3>adamovicdarko@gmail.com</h3>
                  <h3>+3816370569603</h3>
               </div>
            </div>
         </div>
         <div class="col-xs-5">
            <img src="{{ asset('img/profile.png') }}" class="img-rounded pic" alt="NoPhoto">
         </div>
      </div>  
   <!------------ END OF MAIN ------------------>
   @endsection
