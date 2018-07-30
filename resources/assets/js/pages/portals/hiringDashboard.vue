<template>
  <v-app id="inspire">
    <v-navigation-drawer v-model="drawer" fixed clipped class="grey lighten-4" app>
      <v-list dense class="grey lighten-4">
          <!-- <span class="align-center">
            <img :src="public_path + '/images/logo_brand.png'" alt="Jobseed LOGO">
          </span> -->
        <template v-for="(item, i) in items">
          <v-layout v-if="item.heading" :key="i" row align-center>
            <v-flex xs6>
              <v-subheader v-if="item.heading">
                {{ item.heading }}
              </v-subheader>
            </v-flex>
            <v-flex xs6 class="text-xs-right">
              <v-btn small flat>edit</v-btn>
            </v-flex>
          </v-layout>
          <v-divider v-else-if="item.divider" :key="i" dark class="my-3"></v-divider>
          <v-list-tile v-else :key="i" @click="">
            <v-list-tile-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title class="grey--text">
                {{ item.text }}
              </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </template>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar color="amber" app fixed clipped-left>
      <v-toolbar-side-icon @click.native="drawer = !drawer"></v-toolbar-side-icon>
      <span class="title ml-3 mr-5">
          <router-link :to="{ name: user ? 'home' : 'welcome' }" class="navbar-brand">
            <img :src="public_path + '/images/logo_brand.png'" alt="Jobseed LOGO">
          </router-link>
        <!-- <span class="text">dashboard</span> -->
      </span>
      <!-- <v-text-field
        solo-inverted
        flat
        hide-details
        label="Search"
        prepend-inner-icon="search"
      ></v-text-field> -->
      <v-spacer></v-spacer>



      <v-btn icon>
        <v-icon>notifications</v-icon>
      </v-btn>

    </v-toolbar>
    <v-content>
      <v-container fluid fill-height class="grey lighten-4">
        <v-layout justify-center align-center>
          <!-- <v-flex shrink>
            <v-tooltip right>
              <v-btn
                slot="activator"
                :href="source"
                icon
                large
                target="_blank"
              >
                <v-icon large>code</v-icon>
              </v-btn>
              <span>Source</span>
            </v-tooltip>
            <v-tooltip right>
              <v-btn slot="activator" icon large href="https://codepen.io/johnjleider/pen/jZQNbd" target="_blank">
                <v-icon large>mdi-codepen</v-icon>
              </v-btn>
              <span>Codepen</span>
            </v-tooltip>
          </v-flex> -->
          <div class="content">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                          <i class="nc-icon nc-globe text-warning"></i>
                        </div>
                      </div>
                      <div class="col-7 col-md-8">
                        <div class="numbers">
                          <p class="card-category">Job available</p>
                          <p class="card-title">112
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                    <div class="stats">
                      <i class="fa fa-refresh"></i> Update Now
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                          <i class="nc-icon nc-money-coins text-success"></i>
                        </div>
                      </div>
                      <div class="col-7 col-md-8">
                        <div class="numbers">
                          <p class="card-category">Jobs Applied</p>
                          <p class="card-title">7
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                    <div class="stats">
                      <i class="fa fa-calendar-o"></i> Last day
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                          <i class="nc-icon nc-vector text-danger"></i>
                        </div>
                      </div>
                      <div class="col-7 col-md-8">
                        <div class="numbers">
                          <p class="card-category">Employer chat</p>
                          <p class="card-title">23
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                    <div class="stats">
                      <i class="fa fa-clock-o"></i> In the last hour
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                          <i class="nc-icon nc-favourite-28 text-primary"></i>
                        </div>
                      </div>
                      <div class="col-7 col-md-8">
                        <div class="numbers">
                          <p class="card-category">Scouted by</p>
                          <p class="card-title">+45K</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                    <div class="stats">
                      <i class="fa fa-refresh"></i> Update now
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">

                <div class="card card-user">
                  <div class="image">
                    <img :src="public_path + '/images/damir-bosnjak.jpg'" alt="User dashboard cover photo">
                  </div>
                  <div class="card-body">
                    <div class="author">
                      <a href="#">
                        <img class="avatar border-gray" :src="public_path + '/images/mike.png'" alt="...">
                        <h5 class="title">Jason Tatum</h5>
                      </a>
                      <p class="description">
                        Web developer
                      </p>
                    </div>
                    <p class="description text-center">
                      "Passionate in
                      <br> Laravel, Webpack, NPMs
                      <br> NodeJS is my forte"
                    </p>
                  </div>
                  <div class="card-footer">
                    <hr>
                    <div class="button-container">
                      <div class="row">
                        <div class="col-lg-3 col-md-6 col-6 ml-auto">
                          <h5>12
                            <br>
                            <small>Applied</small>
                          </h5>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                          <h5>5
                            <br>
                            <small> Scouted</small>
                          </h5>
                        </div>
                        <div class="col-lg-3 mr-auto">
                          <h5>17
                            <br>
                            <small>Companies</small>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-7">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Employers conversation</h4>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled team-members">
                        <li>
                          <div class="row">
                            <div class="col-md-2 col-2">
                              <div class="avatar">
                                <img :src="public_path + '/images/faces/ayo-ogunseinde-2.jpg'" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                              </div>
                            </div>
                            <div class="col-md-7 col-7">
                              DJ Khaled
                              <br />
                              <span class="text-muted">
                                <small>Offline</small>
                              </span>
                            </div>
                            <div class="col-md-3 col-3 text-right">
                              <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="row">
                            <div class="col-md-2 col-2">
                              <div class="avatar">
                                <img :src="public_path + '/images/faces/joe-gardner-2.jpg'" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                              </div>
                            </div>
                            <div class="col-md-7 col-7">
                              Creative Tim
                              <br />
                              <span class="text-success">
                                <small>Available</small>
                              </span>
                            </div>
                            <div class="col-md-3 col-3 text-right">
                              <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="row">
                            <div class="col-md-2 col-2">
                              <div class="avatar">
                                <img :src="public_path + '/images/faces/clem-onojeghuo-2.jpg'" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                              </div>
                            </div>
                            <div class="col-ms-7 col-7">
                              Flume
                              <br />
                              <span class="text-danger">
                                <small>Busy</small>
                              </span>
                            </div>
                            <div class="col-md-3 col-3 text-right">
                              <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="card ">
                  <div class="card-header ">
                    <h5 class="card-title">Email Statistics</h5>
                    <p class="card-category">Last Campaign Performance</p>
                  </div>
                  <div class="card-body ">
                    <canvas id="chartEmail"></canvas>
                  </div>
                  <div class="card-footer ">
                    <div class="legend">
                      <i class="fa fa-circle text-primary"></i> Opened
                      <i class="fa fa-circle text-warning"></i> Read
                      <i class="fa fa-circle text-danger"></i> Deleted
                      <i class="fa fa-circle text-gray"></i> Unopened
                    </div>
                    <hr>
                    <div class="stats">
                      <i class="fa fa-calendar"></i> Number of emails sent
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card card-chart">
                  <div class="card-header">
                    <h5 class="card-title">NASDAQ: AAPL</h5>
                    <p class="card-category">Line Chart with Points</p>
                  </div>
                  <div class="card-body">
                    <canvas id="speedChart" width="400" height="100"></canvas>
                  </div>
                  <div class="card-footer">
                    <div class="chart-legend">
                      <i class="fa fa-circle text-info"></i> Tesla Model S
                      <i class="fa fa-circle text-warning"></i> BMW 5 Series
                    </div>
                    <hr/>
                    <div class="card-stats">
                      <i class="fa fa-check"></i> Data information certified
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </v-layout>


      </v-container>
    </v-content>
  </v-app>
</template>

<script>
  import { mapGetters } from 'vuex'

  export default {
    layout: "welcome",
    middleware: 'auth',

    metaInfo() {
      return {
        title: this.$t('home')
      }
    },
    data: () => ({
      public_path: location.origin,
      drawer: null,
      items: [{
          icon: 'lightbulb_outline',
          text: 'My profile'
        },
        {
          icon: 'touch_app',
          text: 'Display company info'
        },
        {
          divider: true
        },
        {
          heading: 'Management'
        },
        {
          icon: 'add',
          text: 'Modify company Info'
        },
        {
          divider: true
        },
        {
          icon: 'archive',
          text: 'Bookmarked lists'
        },
        {
          icon: 'delete',
          text: 'Create Job opening'
        },
        {
          divider: true
        },
        {
          icon: 'settings',
          text: 'Lists of Applicants'
        },
        {
          icon: 'chat_bubble',
          text: 'List of Saved Applicants'
        },
        {
          icon: 'help',
          text: 'Help'
        },
        {
          icon: 'phonelink',
          text: 'App downloads'
        },
        {
          icon: 'keyboard',
          text: 'Keyboard shortcuts'
        }
      ]
    }),
    props: {
      source: String
    },
      computed: mapGetters({
    user: 'auth/user'
  }),
  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    }
  }
  }

</script>
