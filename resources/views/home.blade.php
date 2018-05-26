@extends('layout.app')
@section('tittle', 'Bienvenida')
{{--Section: Styles. Aquí pones los estilos--}}
@section('styles')
	<style type="text/css">
</style>
@endsection
{{--End section: styles--}}

{{--Section: content. Aquí creas el div principal donde irá todo tu contenido--}}
@section('content')
	<div class="container"> <!-- Due to the codepen sandboxing the form will not submit properly in this environment -->
<div class="background">
 <div class="container">
  <div class="row flex-column justify-content-center align-items-center  text-center">
   <div class="col-sm-12 col-md-10 col-lg-8">
    <h1 id="time" class="home-text">12:00 AM</h1>
    <h3 id="day" class="display-5 home-text">Monday, January 01</h3>
  	<label id="userName" style="display:none;">{{Auth::user()->name}}</label>
    <h2 id="greeting" class="home-text">Buenos días, {{Auth::user()->name}} !</h2>
    
   </div><!-- /.col -->
   
  </div><!-- /.row -->
	 
 </div><!-- /.container -->
 </div>

@endsection
{{--End section: content--}}

{{--Section: script. Aquí pones los scripts personalizados para tu contenido. Recuerda que ya tienes jquery y bootstrap--}}
@section('scripts')
	<script type="text/javascript">// Document ready function
$(function() {

	// Time function to get the date/time
	function time() {
		
		// Create new date var and init other vars
		var date = new Date(),
			hours = date.getHours(), // Get the hours
			minutes = date.getMinutes().toString(), // Get minutes, convert to string
			ante, // Will be used for AM and PM later
			greeting, // Set the appropriate greeting for the time of day
			dd = date.getDate().toString(), // Get the current day
			userName = $('#userName').text(), // Can be used to insert a unique name
			good; // will be used for "buenos" o "buenas" for the time of day

		/* Set the AM or PM according to the time, it is important to note that up
			to this point in the code this is a 24 clock */
		if (hours < 12) {
			ante = "AM";
			greeting = "Días";
		} else if (hours >= 12 || hours < 19) {
			ante = "PM";
			greeting = "Tardes";
		} else {
			ante = "PM";
			greeting = "Noches";
		}
		/*Buenos o buenas*/
		if (hours < 12) {
			good = "Buenos ";
		} else {
			good = "Buenas ";
		}
		/* Since it is a 24 hour clock, 0 represents 12am, if that is the case
		then convert that to 12 */
		if (hours === 0) {
			hours = 12;
			
			/* For any other case where hours is not equal to twelve, let's use modulus
			to get the corresponding time equivilant */
		} else if (hours !== 12) {
			hours = hours % 12;
		}

		// Minutes can be in single digits, hence let's add a 0 when the length is less than two
		if (minutes.length < 2) {
			minutes = "0" + minutes;
		}

		// Let's do the same thing above here for the day
		if (dd.length < 2) {
			dd = "0" + dd;
		}


		// Months
		Date.prototype.monthNames = [
			"Enero",
			"Febrero",
			"Mazo",
			"Abril",
			"Mayo",
			"Junio",
			"Julio",
			"Agosto",
			"Septiembre",
			"Octubre",
			"Noviembre",
			"Diciembre"
		];

		// Days
		Date.prototype.weekNames = [
			"Domingo",
			"Lunes",
			"Martes",
			"Miercoles",
			"Jueves",
			"Viernes",
			"Sábado"
		];
		
		// Return the month name according to its number value
		Date.prototype.getMonthName = function() {
			return this.monthNames[this.getMonth()];
		};
		
		// Return the day's name according to its number value
		Date.prototype.getWeekName = function() {
			return this.weekNames[this.getDay()];
		};

		$("#time").html(hours + ":" + minutes + " " + ante);
		$("#day").html(date.getWeekName() + ", " + date.getMonthName() + " " + dd);
		$("#greeting").html("¡" + good + greeting + ", " + userName + "!");
		
		// The interval is necessary for proper time syncing
		setInterval(time, 1000);
	}
	time();
});
</script>

@endsection
{{--End section: scripts--}}
