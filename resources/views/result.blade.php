@extends('layouts.app')

@section('content')
<style type="text/css">
	img{
		width: 500px;
	}
</style>
	<!-- Icon -->
	<center>
    <div class="fadeIn first">
      <img src="../img/doctor.png" alt="User Icon" />
      <h1>
          {{ Auth::user()->name }}
      </h1>
  	</div>

	<center>
		<h2>Hasil survey</h2>
		@if($survey->yes>-1 & $survey->yes<8)         
        	<p>
        		<label>Status terkena virus</label>
        		<strong id="status"> Rendah</strong>
        	</p>     
        	@elseif($survey->yes>7 & $survey->yes<15)
        	<p>
        		<label>Status terkena virus </label>
        		<strong id="status"> Sedang</strong>
        	</p>
        	@else
        	<p>
        		<label>Status terkena virus </label>
        		<strong id="status"> Tinggi</strong>
        	</p>
        @endif
    </center>

	@guest
    @else
    <a style="margin-top: 15px;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Keluar') }} </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    @endguest

@endsection