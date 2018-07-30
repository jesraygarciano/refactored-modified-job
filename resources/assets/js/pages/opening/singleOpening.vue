<template>
  <div>
    <v-app light>
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
        <v-jumbotron :gradient="gradient" dark src="https://images.unsplash.com/photo-1510074377623-8cf13fb86c08?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0a38661364c1153b472b3ec80114c3cf&auto=format&fit=crop&w=1504&q=80">
          <v-container fill-height>
            <v-layout align-center>
              <v-flex text-xs-center>
                <!-- <h5>Company cover photo</h5> -->
              </v-flex>
            </v-layout>
          </v-container>
        </v-jumbotron>

        <v-layout>
          <v-flex xs12 sm6 offset-sm3>
            <v-card class="com-s-title">
              <!-- <v-card-media class="white--text" height="200px" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"> -->
              <v-container fill-height fluid>
                <v-layout fill-height>
                  <v-flex xs12 align-end flexbox>
                    <span class="headline">Angular Developer</span>
                  </v-flex>
                </v-layout>
              </v-container>
              <!-- </v-card-media> -->
              <v-card-title>
                <div>
                  <span class="grey--text">Number 10</span>
                  <br>
                  <span>Whitehaven Beach</span>
                  <br>
                  <span>Whitsunday Island, Whitsunday Islands</span>
                </div>
              </v-card-title>
              <v-card-actions>
                <v-btn flat color="orange">Apply</v-btn>
                <v-btn flat color="orange">Bookmark</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>


        <v-container>
          <v-layout align-center>
            <v-flex md12>
              <v-card>
                <v-card-title primary-title>
                  <div>
                    <div class="headline">Description</div>
                    <span class="grey--text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                      eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem accusantium doloremque
                      eopsloi laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                      beatae vitae dicta sunot explicabo. Nemo ernim ipsam voluptatem quia voluptas sit aspernatur aut odit
                      aut fugit, sedopk quia consequuntur magni dolores eos qui rationesopl voluptatem sequi nesciunt. Neque
                      porro quisquameo est, qui dolorem ipsum quia dolor sit amet, eopsmiep consectetur, adipisci velit,
                      seisud quia non numquam eius modi tempora incidunt ut labore et dolore wopeir magnam aliquam quaerat
                      voluptatem eoplmuriquisqu...</span>
                  </div>
                </v-card-title>

                <v-layout>
                  <v-flex xs12 sm6 offset-sm3>
                    <v-card>
                      <v-list class="transparent">
                        <v-list-tile>
                          <v-list-tile-action>
                            <v-icon class="blue--text text--lighten-2">phone</v-icon>
                          </v-list-tile-action>
                          <v-list-tile-content>
                            <v-list-tile-title>777-867-5309</v-list-tile-title>
                          </v-list-tile-content>
                        </v-list-tile>
                        <v-list-tile>
                          <v-list-tile-action>
                            <v-icon class="blue--text text--lighten-2">place</v-icon>
                          </v-list-tile-action>
                          <v-list-tile-content>
                            <v-list-tile-title>Chicago, US</v-list-tile-title>
                          </v-list-tile-content>
                        </v-list-tile>
                        <v-list-tile>
                          <v-list-tile-action>
                            <v-icon class="blue--text text--lighten-2">email</v-icon>
                          </v-list-tile-action>
                          <v-list-tile-content>
                            <v-list-tile-title>john@vuetifyjs.com</v-list-tile-title>
                          </v-list-tile-content>
                        </v-list-tile>
                      </v-list>
                    </v-card>
                  </v-flex>
                </v-layout>

                <v-card-actions>
                  <v-btn flat @click="show = !show" color="purple">See more</v-btn>
                  <v-spacer></v-spacer>
                  <v-btn icon @click="show = !show">
                    <v-icon>{{ show ? 'keyboard_arrow_down' : 'keyboard_arrow_up' }}</v-icon>
                  </v-btn>
                </v-card-actions>

                <v-slide-y-transition>
                  <v-card-text v-show="show">
                    I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier,
                    not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and
                    two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
                  </v-card-text>
                </v-slide-y-transition>
              </v-card>

            </v-flex>
          </v-layout>
        </v-container>

        <v-container>
          <v-layout align-center>
            <v-flex md12>
              <v-card>
                <v-card-title primary-title>
                  <div>
                    <div class="headline">Companies other job hiring</div>
                    <span class="grey--text">other company hiring</span>
                  </div>
                </v-card-title>

                <v-layout align-center justify-center row fill-height>

                  <v-flex xs12 md3 mx-2>
                    <v-card>
                      <v-card-media src="https://images.unsplash.com/photo-1494707924465-e1426acb48cb?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d7cac606b3752d340f2c342f32536727&auto=format&fit=crop&w=750&q=80"
                        height="200px"></v-card-media>

                      <v-card-title primary-title>
                        <div>
                          <h3 class="headline mb-0">Kangaroo Valley Safari</h3>
                          <div>Located two hours south of Sydney in the
                            <br>Southern Highlands of New South Wales, ...</div>
                        </div>
                      </v-card-title>

                      <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-flex>

                  <v-flex xs12 md3 mx-2>
                    <v-card>
                      <v-card-media src="https://cdn.vuetifyjs.com/images/cards/desert.jpg" height="200px"></v-card-media>

                      <v-card-title primary-title>
                        <div>
                          <h3 class="headline mb-0">Kangaroo Valley Safari</h3>
                          <div>Located two hours south of Sydney in the
                            <br>Southern Highlands of New South Wales, ...</div>
                        </div>
                      </v-card-title>

                      <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-flex>

                  <v-flex xs12 md3 mx-2>
                    <v-card>
                      <v-card-media src="https://cdn.vuetifyjs.com/images/cards/desert.jpg" height="200px"></v-card-media>

                      <v-card-title primary-title>
                        <div>
                          <h3 class="headline mb-0">Kangaroo Valley Safari</h3>
                          <div>Located two hours south of Sydney in the
                            <br>Southern Highlands of New South Wales, ...</div>
                        </div>
                      </v-card-title>

                      <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-flex>

                </v-layout>
              </v-card>

            </v-flex>
          </v-layout>
        </v-container>

        <v-container>
          <v-layout align-center>
            <v-flex md12>
              <v-card>
                <v-card-title primary-title>
                  <div>
                    <div class="headline">Similar Job</div>
                    <span class="grey--text">other company hiring</span>
                  </div>
                </v-card-title>


                <v-layout align-center justify-center row fill-height>

                  <v-flex xs12 md3 ma-2>
                    <v-card>
                      <v-card-media src="https://cdn.vuetifyjs.com/images/cards/desert.jpg" height="200px"></v-card-media>

                      <v-card-title primary-title>
                        <div>
                          <h3 class="headline mb-0">Kangaroo Valley Safari</h3>
                          <div>Located two hours south of Sydney in the
                            <br>Southern Highlands of New South Wales, ...</div>
                        </div>
                      </v-card-title>

                      <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-flex>


                  <v-flex xs12 md3 ma-2>
                    <v-card>
                      <v-card-media src="https://cdn.vuetifyjs.com/images/cards/desert.jpg" height="200px"></v-card-media>

                      <v-card-title primary-title>
                        <div>
                          <h3 class="headline mb-0">Kangaroo Valley Safari</h3>
                          <div>Located two hours south of Sydney in the
                            <br>Southern Highlands of New South Wales, ...</div>
                        </div>
                      </v-card-title>

                      <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-flex>

                  <v-flex xs12 md3 ma-2>
                    <v-card>
                      <v-card-media src="https://cdn.vuetifyjs.com/images/cards/desert.jpg" height="200px"></v-card-media>

                      <v-card-title primary-title>
                        <div>
                          <h3 class="headline mb-0">Kangaroo Valley Safari</h3>
                          <div>Located two hours south of Sydney in the
                            <br>Southern Highlands of New South Wales, ...</div>
                        </div>
                      </v-card-title>

                      <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                      </v-card-actions>
                    </v-card>
                  </v-flex>

                </v-layout>


                <v-card-actions>
                  <v-btn flat @click="show = !show" color="purple">See more</v-btn>
                  <v-spacer></v-spacer>
                  <v-btn icon @click="show = !show">
                    <v-icon>{{ show ? 'keyboard_arrow_down' : 'keyboard_arrow_up' }}</v-icon>
                  </v-btn>
                </v-card-actions>

                <v-slide-y-transition>
                  <v-card-text v-show="show">
                    I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier,
                    not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and
                    two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
                  </v-card-text>
                </v-slide-y-transition>
              </v-card>

            </v-flex>
          </v-layout>
        </v-container>


      </v-content>

      <v-footer dark height="auto">
        <v-card flat tile class="seed-footer lighten-1 white--text text-xs-center">
          <v-card-text>
            <v-btn v-for="icon in icons" :key="icon" class="mx-3 white--text" icon>
              <v-icon size="24px">{{ icon }}</v-icon>
            </v-btn>
          </v-card-text>

          <v-card-text class="white--text pt-0">
            Phasellus feugiat arcu sapien, et iaculis ipsum elementum sit amet. Mauris cursus commodo interdum. Praesent ut risus eget
            metus luctus accumsan id ultrices nunc. Sed at orci sed massa consectetur dignissim a sit amet dui. Duis commodo
            vitae velit et faucibus. Morbi vehicula lacinia malesuada. Nulla placerat augue vel ipsum ultrices, cursus iaculis
            dui sollicitudin. Vestibulum eu ipsum vel diam elementum tempor vel ut orci. Orci varius natoque penatibus et
            magnis dis parturient montes, nascetur ridiculus mus.
          </v-card-text>

          <v-divider></v-divider>

          <v-card-text class="white--text">
            &copy;2018 —
            <strong>Vuetify</strong>
          </v-card-text>
        </v-card>
      </v-footer>
    </v-app>
  </div>

</template>

<script>
  import {
    mapGetters
  } from 'vuex'

  export default {
    layout: "welcome",

    metaInfo() {
      return {
        title: this.$t('home')
      }
    },

    data: () => ({
      title: window.config.appName,
      show: false,
      gradient: 'to top right, rgba(63,81,181, .7), rgba(25,32,72, .7)',
      public_path: location.origin,
      posts: [{
          title: 'Accenture',
          content: 'Fusce ullamcorper tellus sed maximus rutrum. Donec imperdiet ultrices maximus. Donec non tellus non neque pellentesque fermentum. Aenean in pellentesque urna.',
          imgUrl: 'http://negosentro.com/wp-content/uploads/2017/01/accenture-12-620x330.jpg'
        },
        {
          title: 'Alliance',
          content: 'Donec vitae suscipit lectus, a luctus diam. Proin vitae felis gravida, lobortis massa sit amet, efficitur erat. Morbi vel ultrices nisi.',
          imgUrl: 'http://www.alliance.com.ph/images/news/img_20111026.jpg'
        },
        {
          title: 'Nexseed',
          content: 'At sagittis sapien vulputate. Vivamus laoreet lacus id magna rutrum dapibus. Donec vel pellentesque arcu. Maecenas mollis odio tempus felis elementum commodo.',
          imgUrl: 'http://res.cloudinary.com/hrscywv4p/image/upload/c_limit,f_auto,h_900,q_80,w_1200/v1/263321/http_s3.amazonaws.com_feather-files-aviary-prod-us-east-1_f5da8ea5e_2015-02-20_025c01d3e38340509e44f94c0db18547_aozhp1.jpg'
        }
      ],
      show: false,
      icons: [
  'fa fa-facebook',
  'fa fa-twitter',
  'fa fa-google-plus',
  'fa fa-linkedin',
  'fa fa-instagram'
  ]
    }),

    computed: mapGetters({
      authenticated: 'auth/check'
    })
  }

</script>

<style scoped>
  .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
  }

  .title {
    font-size: 85px;
  }

</style>
