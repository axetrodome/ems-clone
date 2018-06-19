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
		  <a class="waves-effect">Profile</a>
		</router-link>
		<router-link tag="li" to="/account">
		  <a class="waves-effect">Account</a>
		</router-link>
	@endcomponent

	<router-view></router-view>
	<router-view name="profile"></router-view>
@endsection