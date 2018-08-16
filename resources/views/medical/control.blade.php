@extends('layouts.navbar')

   @section('main')
     	<!------------ MAIN ------------------>
      <div class="col-xs-9">
         <div class="operation_head">
            <h3 class="patient_name">name: <big>Darko Adamović</big></h3>
         </div>
         <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
               <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                     <span aria-hidden="true">&laquo;</span>
                     <span class="sr-only">Previous</span>
                  </a>
               </li>
               <li class="page-item active"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                     <span aria-hidden="true">&raquo;</span>
                     <span class="sr-only">Next</span>
                  </a>
               </li>
            </ul>
         </nav> 
         <div class="panel panel-primary">
            <div class="panel-heading">
              <label>Datum kontrole:</label>
              <label>1.5.2018.</label>
            </div>
            <div class="panel-body operation_desc">
               <label>Komentar kontrole:</label>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
         </div>
         <div class="operation_head">
            <h4>Slike kontrole</h4>
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