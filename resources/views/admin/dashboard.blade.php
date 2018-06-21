@extends ('layouts.app')
<style>
	header, main, footer {
	  padding-left: 300px;
	}

	@media only screen and (max-width : 992px) {
	  header, main, footer {
	    padding-left: 0;
	  }
	}
</style>
@section ('content')
	@component ('partials.sidenav')
		<router-link tag="li" to="/" exact>
		  <a class="waves-effect">Schedule</a>
		</router-link>
		<router-link tag="li" to="/curriculum">
		  <a class="waves-effect">Curriculum</a>
		</router-link>

		<router-link tag="li" to="/add_students">
		  <a class="waves-effect">Add Students</a>
		</router-link>
	@endcomponent
	<router-view></router-view>
	<router-view name="dashboard"></router-view>

@endsection