@extends('layouts.app')
   @section('content')
      <div class="row">
      	<!------------ LEFT SIDEBAR ------------------>
      	<div class="col-xs-3">
      		<nav class="nav flex-column">
      			<li class="nav-item">
       				<a class="nav-link active" href="/medical">Lični podaci</a>
   				</li>
   				<li class="nav-item">
       				<a class="nav-link" href="/medical/operation">Operacija</a>
   				</li>
   				<li class="nav-item">
       				<a class="nav-link" href="/medical/control">Kontrole</a>
   				</li>
      		</nav>
      	</div>
      	<!------------ END OF LEFT SIDEBAR ------------------>

       @yield('main')
      
      </div> 


   @endsection