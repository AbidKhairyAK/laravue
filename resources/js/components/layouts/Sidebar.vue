<template>
	<div :class="['sidebar py-3 bg-dark', getShrink]" id="sidebar">
		<div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">
			MAIN
		</div>
		<ul class="sidebar-menu list-unstyled">
			<li class="sidebar-list-item">
				<router-link to="/articles" :class="['sidebar-link text-white-50', articlesStatus]" href="index.html"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Articles</span></router-link>
			</li>
			<li class="sidebar-list-item">
				<router-link to="/categories" :class="['sidebar-link text-white-50', categoriesStatus]" href="index.html"><i class="o-paper-stack-1 mr-3 text-gray"></i><span>Categories</span></router-link>
			</li>
			<li class="sidebar-list-item">
				<router-link to="/users" :class="['sidebar-link text-white-50', usersStatus]" href="index.html"><i class="o-user-details-1 mr-3 text-gray"></i><span>Users</span></router-link>
			</li>
		</ul>
	</div>
</template>

<script>
	export default {
		name: 'Sidebar',
		data() {
			return {
				articlesStatus: '',
				categoriesStatus: '',
				usersStatus: '',
			}
		},
		computed: {
			getShrink() {
				return this.$store.getters.getShrink ? 'shrink show' : '';
			},
		},
		methods: {
			checkPath(path) {
				this.articlesStatus = path == '/articles' ? 'active' : '';
				this.categoriesStatus = path == '/categories' ? 'active' : '';
				this.usersStatus = path == '/users' ? 'active' : '';
			}
		},
		watch: {
			'$route' (to, from) {
				this.checkPath(to.path);
			}
		},
		created() {
				this.checkPath(this.$route.path);
		},
		props: ['shrink']
	}
</script>