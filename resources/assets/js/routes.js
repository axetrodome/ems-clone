import VueRouter from 'vue-router'

let routes = [
	{
		path:'/',
		components:{
			profile:require('./views/Profile'),
			dashboard:require('./views/Schedule')
		}
	},
	{
		path:'/account',
		component:require('./views/Account')
	},
	{
		path:'/curriculum',
		component:require('./views/Curriculum')
	},
	{
		path:'/add_students',
		component:require('./components/AddStudent')
	}
];

export default new VueRouter({
	routes,
	linkActiveClass: "active",
	linkExactActiveClass: "active",
});