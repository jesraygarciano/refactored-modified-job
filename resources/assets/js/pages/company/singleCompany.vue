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
        <v-container>
          <v-layout row wrap>
            <v-flex xs12 md4>
              <v-card>
                <v-card-media src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" height="200px">
                </v-card-media>

                <v-card-title primary-title>
                  <div>
                    <div class="headline">Search over 100 companies</div>
                    <!-- <span class="grey--text">1,000 miles of wonder</span> -->
                  </div>
                  <v-text-field flat hide-details label="E.g. Web Developer" prepend-inner-icon="search">

                  </v-text-field>
                </v-card-title>

                <v-card-actions>
                  <!-- <v-btn flat>Share</v-btn> -->
                  <v-btn @click="show = !show" flat color="purple">Advanced search</v-btn>
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
            <v-flex xs12 md7 offset-md1>
              <div v-for="post in posts" :key="post.title">
                <v-card class="my-3" hover>
                  <v-card-media class="white--text" height="170px" :src="post.imgUrl">
                    <v-container fill-height fluid>
                      <v-layout>
                        <v-flex xs12 align-end d-flex>
                          <span class="headline">{{ post.title }}</span>
                        </v-flex>
                      </v-layout>
                    </v-container>
                  </v-card-media>
                  <v-card-text>
                    {{ post.content }}
                  </v-card-text>
                  <v-card-actions>
                    <v-btn icon class="red--text">
                      <v-icon medium>fa-reddit</v-icon>
                    </v-btn>
                    <v-btn icon class="light-blue--text">
                      <v-icon medium>fa-twitter</v-icon>
                    </v-btn>
                    <v-btn icon class="blue--text text--darken-4">
                      <v-icon medium>fa-facebook</v-icon>
                    </v-btn>
                    <v-spacer></v-spacer>
                    <v-btn flat class="blue--text">Read More</v-btn>
                  </v-card-actions>
                </v-card>
              </div>
            </v-flex>
          </v-layout>
        </v-container>
      </v-content>
      <v-footer class="secondary" app>
        <v-layout row wrap align-center>
          <v-flex xs12>
            <div class="white--text ml-3">
              Made with
              <v-icon class="red--text">favorite</v-icon>
              by
              <a class="white--text" href="https://vuetifyjs.com" target="_blank">Vuetify</a>
              and
              <a class="white--text" href="https://github.com/vwxyzjn" target="_blank">Costa Huang</a>
            </div>
          </v-flex>
        </v-layout>
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
      show: false
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
