@extends('layouts.app')
   @section('content')
      <div class="row">
      	<!------------ LEFT SIDEBAR NAVIGATION ------------------>
      	<div class="col-xs-3">
      		<nav class="nav flex-column">
      			<li class="nav-item">
       				<a class="nav-link {{Request::path() == 'medical' ? 'active' : ''}}" href="/medical">Lični podaci</a>
   				</li>
   				<li class="nav-item">
       				<a class="nav-link {{Request::path() == 'medical/operation' ? 'active' : ''}}" href="/medical/operation">Operacija</a>
   				</li>
   				<li class="nav-item">
       				<a class="nav-link {{Request::path() == 'medical/control' ? 'active' : ''}}" href="/medical/control">Kontrole</a>
   				</li>
      		</nav>
      	</div>
      	<!------------ END OF LEFT SIDEBAR NAVIGATION ------------------>

       @yield('main')
      
      </div> 


   @endsection