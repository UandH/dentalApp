@extends('layouts.navbar')

   @section('main')
   	<!------------ MAIN ------------------>
      <div class="col-xs-9">  
     	   <div class="operation_head">
            <h3 class="patient_name">name: <big>Darko Adamović</big></h3>
         </div>
         <div class="panel panel-primary">
            <div class="panel-heading">
               <label>Datum operacije:</label>
               <label>1.4.2018.</label>
            </div>
            <div class="panel-body operation_desc">
               <label>Opis operacije:</label>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <label>Predviđena kontrola za 1 mesec</label>
               <br>
               <label>Datum predviđene kontrole: 1.05.2018.</label>
            </div>
         </div>
         <div class="operation_head">
            <h4>Pre-operative pictures</h4>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="thumbnail">
                  <a href="{{ asset('img/x-ray.jpg') }}" target="_blank">
                     <img src="{{ asset('img/x-ray.jpg') }}" alt="Lights" style="width:100%">
                     <div class="caption">
                        <p>X-ray</p>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-md-6">
               <div class="thumbnail">
                     <a href="{{ asset('img/clinic.jpg') }}" target="_blank">
                        <img src="{{ asset('img/clinic.jpg') }}" alt="Nature" style="width:100%">
                        <div class="caption">
                           <p>Clinical-picture</p>
                        </div>
                     </a>
               </div>
            </div>  
         </div>
         <div class="operation_head">
            <h4>Post-operative pictures</h4>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="thumbnail">
                  <a href="{{ asset('img/x-ray.jpg') }}" target="_blank">
                     <img src="{{ asset('img/x-ray.jpg') }}" alt="Lights" style="width:100%">
                     <div class="caption">
                        <p>X-ray</p>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-md-6">
               <div class="thumbnail">
                  <a href="{{ asset('img/clinic.jpg') }}" target="_blank">
                     <img src="{{ asset('img/clinic.jpg') }}" alt="Nature" style="width:100%">
                     <div class="caption">
                        <p>Clinical-picture</p>
                     </div>
                  </a>
               </div>
            </div>  
         </div>           
      </div>   			
   	   	<!------------ END OF MAIN ------------------> 		
   @endsection