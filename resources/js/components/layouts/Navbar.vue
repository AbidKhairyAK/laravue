<template>
	<header class="header">
		<nav class="navbar navbar-expand-lg px-4 py-2 bg-secondary shadow">
			<a class="sidebar-toggler mr-4 mr-lg-5 text-gray-400 lead" href="#" @click="shrinkSidebar()"><i class="fas fa-align-left"></i></a><a class="navbar-brand font-weight-bold text-uppercase text-base" href="index.html">Dashboard Pondok IT</a>
			<ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
				<li class="nav-item">
					<form class="ml-auto d-none d-lg-block" id="searchForm" name="searchForm">
						<div class="form-group position-relative mb-0">
							<button class="position-absolute bg-transparent border-0 p-0" style="top: -1px; right: 10px;" type="submit"><i class="o-search-magnify-1 text-gray text-lg"></i></button> <input class="form-control form-control-sm border-0 no-shadow pl-4" placeholder="Search ..." type="search">
						</div>
					</form>
				</li>
				<li class="nav-item dropdown mx-2">
					<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle text-gray-400 px-1" data-toggle="dropdown" href="http://example.com" id="notifications"><i class="fa fa-bell"></i><span class="notification-icon"></span></a>
					<div aria-labelledby="notifications" class="dropdown-menu">
						<a class="dropdown-item" href="#">
						<div class="d-flex align-items-center">
							<div class="icon icon-sm bg-violet text-white">
								<i class="fab fa-twitter"></i>
							</div>
							<div class="text ml-2">
								<p class="mb-0">You have 2 followers</p>
							</div>
						</div></a> <a class="dropdown-item" href="#">
						<div class="d-flex align-items-center">
							<div class="icon icon-sm bg-green text-white">
								<i class="fas fa-envelope"></i>
							</div>
							<div class="text ml-2">
								<p class="mb-0">You have 6 new messages</p>
							</div>
						</div></a> <a class="dropdown-item" href="#">
						<div class="d-flex align-items-center">
							<div class="icon icon-sm bg-blue text-white">
								<i class="fas fa-upload"></i>
							</div>
							<div class="text ml-2">
								<p class="mb-0">Server rebooted</p>
							</div>
						</div></a> <a class="dropdown-item" href="#">
						<div class="d-flex align-items-center">
							<div class="icon icon-sm bg-violet text-white">
								<i class="fab fa-twitter"></i>
							</div>
							<div class="text ml-2">
								<p class="mb-0">You have 2 followers</p>
							</div>
						</div></a>
						<div class="dropdown-divider"></div><a class="dropdown-item text-center" href="#"><small class="font-weight-bold headings-font-family text-uppercase">View all notifications</small></a>
					</div>
				</li>
				<li class="nav-item dropdown ml-auto">
					<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="http://example.com" id="userInfo"><img alt="Jason Doe" class="img-fluid rounded-circle shadow" :src="'/template/img/avatar-6.jpg'" style="max-width: 2.5rem;"></a>
					<div aria-labelledby="userInfo" class="dropdown-menu">
						<a class="dropdown-item" href="#"><strong class="d-block text-uppercase headings-font-family">Mark Stephen</strong><small>Web Developer</small></a>
						<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity log</a>
						<div class="dropdown-divider"></div><a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</li>
			</ul>
		</nav>
	</header>
</template>

<script>
	export default {
		name: 'Navbar',
		computed: {
			getShrink() {
				return this.$store.getters.getShrink;
			}
		},
		methods: {
			shrinkSidebar() {
				this.$store.dispatch('shrinkSidebar', !this.getShrink)
			}
		}
	}
</script>