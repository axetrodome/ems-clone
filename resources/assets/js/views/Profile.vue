<template>
	<div class="row">
		<div class="col s12" >
		<h4>Profile</h4>
        <user-profile :users="users" ></user-profile>    
		</div>
	</div>
</template>

<script>
import UserProfile from '../partials/UserProfile.vue'
import User from '../models/User'
import Form from '../core/Form'

export default {
	components: {
		UserProfile
	},
	data() {
		return {
			users:[],
		}
	},
	created() {
        User.get(users => this.users = users)
	}
};
</script>
