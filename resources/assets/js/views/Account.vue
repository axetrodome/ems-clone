<template>
	<div class="row">
		<div class="col s12" >
			<h4>Account</h4>
		    <user-account :users="users" ></user-account>    
		</div>
	</div>
</template>
<script>
import UserAccount from '../partials/UserAccount.vue'
import User from '../models/User'

	export default {
		components:{
			UserAccount
		},
		data() {
			return {
				users:[]
			}
		},
		creted() {
	        User.get(users => this.users = users)
		}
	};
</script>