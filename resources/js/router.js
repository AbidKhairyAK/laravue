import Vue from 'vue';
import VueRouter from 'vue-router';

import Article from './components/screens/Article';
import Category from './components/screens/Category';
import User from './components/screens/User';

Vue.use(VueRouter);

const routes = [
	{ path: "/", redirect: "/articles" },
	{ path: "/articles", component: Article },
	{ path: "/categories", component: Category },
	{ path: "/users", component: User },
]

const router = new VueRouter({
	mode: 'history',
	routes
});

export default router;