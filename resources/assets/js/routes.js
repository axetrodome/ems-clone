import VueRouter from 'vue-router'

let routes = [
	{
		path:'/',
		components:{
			profile:require('./components/Profile'),
			dashboard:require('./components/Schedule')
		}
	},
	{
		path:'/account',
		component:require('./components/Account')
	},
	{
		path:'/curriculum',
		component:require('./components/Curriculum')
	}
];

export default new VueRouter({
	routes,
	linkActiveClass: "active",
	linkExactActiveClass: "active",
});