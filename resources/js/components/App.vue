<template>
  <div id="app">
    
    <!-- navbar-->
    <navbar></navbar>

    <!-- main -->
    <div class="d-flex align-items-stretch">

      <!-- sidebar -->
      <sidebar></sidebar>

      <!-- content -->
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">

          <!-- content goes here -->
          <router-view></router-view>

        </div>

        <!-- footer -->
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">Your company &copy; 2018-2020</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>

      </div>
    </div>

  </div>
</template>

<script>
import Navbar from './layouts/Navbar.vue'
import Sidebar from './layouts/Sidebar.vue'

export default {
  name: 'app',
  components: {
    Navbar, Sidebar
  }
}
</script>

<style>
#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-color: #f8f9fb;
}
.bg-dark {
  background-color: rgb(57, 56, 54) !important;
}

.bg-secondary {
  background-color: rgb(45, 44, 42) !important;
}
</style>
