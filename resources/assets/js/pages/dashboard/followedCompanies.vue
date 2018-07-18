<template>

  <div class="wrapper">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <router-link :to="{ name: 'home' }" class="nav-link">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'dashboard.resume' }" class="nav-link">
              <i class="material-icons">person</i>
              <p>Resume</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'dashboard.appliedList' }" class="nav-link">
              <i class="material-icons">content_paste</i>
              <p>Applied Lists</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'dashboard.bookmarkList' }" class="nav-link">
              <i class="material-icons">library_books</i>
              <p>Bookmark lists</p>
            </router-link>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li> -->
          <li class="nav-item active">
            <router-link :to="{ name: 'dashboard.followedCompanies' }" class="nav-link">
              <i class="material-icons">location_ons</i>
              <p>Followed companies</p>
            </router-link>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Scouted Notifications</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td class="text-primary">
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td class="text-primary">
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td class="text-primary">
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td>
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td>
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td>
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td>
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td>
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td>
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="page-footer font-small mdb-color pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

          <!-- Footer links -->
          <div class="row text-center text-md-left mt-3 pb-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Nexseed Inc.</h6>
              <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                adipisicing elit.</p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">About Us</h6>
              <p>
                <a href="#!">Contact</a>
              </p>
              <p>
                <a href="#!">Terms and Conditions</a>
              </p>
              <p>
                <a href="#!">BrandFlow</a>
              </p>
              <p>
                <a href="#!">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
              <p>
                <a href="#!">Your Account</a>
              </p>
              <p>
                <a href="#!">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!">Shipping Rates</a>
              </p>
              <p>
                <a href="#!">Help</a>
              </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p>
                <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fa fa-envelope mr-3"></i> info@gmail.com</p>
              <p>
                <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
              <p>
                <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Footer links -->

          <hr>

          <!-- Grid row -->
          <div class="row d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">

              <!--Copyright-->
              <p class="text-center text-md-left">© 2018 Copyright:
                <a href="https://mdbootstrap.com/bootstrap-tutorial/">
                  <strong> MDBootstrap.com</strong>
                </a>
              </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

              <!-- Social buttons -->
              <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

      </footer>
      <!-- Footer -->
    </div>

  </div>

</template>

<script>
  export default {
    data: () => ({
        public_path: location.origin
    })
  }

</script>
