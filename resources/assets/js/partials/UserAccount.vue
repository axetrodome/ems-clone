<template>
	<form method="POST" @submit.prevent="onSubmit">
		<div class="input-field col s12">
		  <input :type="password_type" id="old_password" name="old_password" v-model="form.old_password" class="validate" autofocus>
		  <label for="old_password" class="active">Old Password</label>
		</div>
	    <div class="input-field col s12">
	      <input :type="password_type" id="password" name="password" v-model="form.password" class="validate" autofocus>
	      <label for="password" class="active">New Password</label>
	    </div>
	    <div class="input-field col s12">
	      <input id="password_confirmation" :type="password_type" name="password_confirmation" v-model="form.password_confirmation" class="validate"  autofocus>
	      <label for="password_confirmation" class="active">Confirm Password</label>
	    </div>
	    <div class="input-field col s12">
		    <label>
		        <input type="checkbox" @click="show_password">
		        <span>Show password</span>
		    </label>
	    </div>
	    <div class="right-align">
	      <button class="btn waves-effect waves-light" type="submit" name="action">Update
	        <i class="material-icons right">send</i>
	      </button>
	    </div>
	</form>
</template>
<script>
import Form from '../core/Form'
import User from '../models/User'

	export default {
		//
		props:['users'],
		data() {
			return {
				form: new Form({
					old_password:'',
					password:'',
					password_confirmation:''
				}),
				password_type:'password',
			}
		},
		computed: {

		},
		methods: {
			show_password() {
		    	this.password_type = this.password_type === 'password' 
		    						? 'text' 
		    						: 'password'
			},
			onSubmit() {
				var SuccessToastHTML = `<b>Success: </b> Password Updated `;
				var FailedToastHTML = '<b>Error: </b> Whoops! something went wrong';
				
				this.form.update('/user/update_password')
					.then(res => {
						M.toast({html: SuccessToastHTML,classes:'green darken-1'})
					})
					.catch(err => {
						M.toast({html: FailedToastHTML,classes:'red darken-1',})
					})
			}
		},
		mounted() {
			//
		}
	};
</script>