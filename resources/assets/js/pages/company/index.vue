<template>
  <div class="row">
    <div class="col-md-12">
      <div class="profile-tile-view">
        <div class="profile-cover">
          <img class="absolute-center" :src="company.cover">
        </div>
        <div class="row">
          <div class="col-md-2 col-5">
            <div class="profile-photo">
              <div class="scaffold-div" style="background: #e5e5e5;">
                <img class="bg-holder" :src="public_path+'/images/bg-img.png'">
                <img class="absolute-center" :src="company.photo">
              </div>
            </div>
          </div>
          <div class="col-md-5 col-7">
            <h3>{{company.name}}</h3>
            <!-- <label>Software Developer</label> -->
          </div>
          <div class="col-md-5 col-12">
            <div class="btn-group pull-right" v-if="authorizeEdit">
              <router-link :to="{ name: 'opening.create', params: {company_id:company_id} }" class="btn btn-light">Create Opening</router-link>
              <span class="dvder"/>
              <div class="dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-light">...</button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <router-link class="dropdown-item" :to="{ name: 'company.hiringapplicants', params: {id:company_id} }" data-toggle="dropdown">Hiring Applications</router-link>
                  <router-link class="dropdown-item" :to="{ name: 'company.hiringprocceses', params: {id:company_id} }" data-toggle="dropdown">Hiring Procedures</router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <card class="m-tb-10">
        <div>
          <h5>Description</h5>
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        </div>
        <br>
      </card>
      
      <div class="row">
        <div class="col-md-4">
          <card class="m-tb-10" title="Basic Info">
            <div v-if="authorizeEdit" style="position: absolute; top: 10px; left: 0px; text-align: right; right: 15px;">
              <i class="small-option-btn fa fa-edit" v-on:click="prepUpdateBasicInfo" data-toggle="modal" data-target="#user-basic-info-modal"></i>
            </div>
            <ul class="simple-list">
              <li>
                <ellipsis-text label="Email" :title="company.email">
                  {{company.email}}
                </ellipsis-text>
              </li>
              <li>
                <ellipsis-text label="Address" :title="company.address">
                  {{company.address}}
                </ellipsis-text>
              </li>
            </ul>
          </card>
          <card class="m-tb-10" title="Photo">
            <photo-viewer>
              <img class="absolute-center" :src="public_path+'/images/Group 244.png'">
              <img class="absolute-center" :src="public_path+'/images/register-background.png'">
              <img class="absolute-center" :src="public_path+'/images/bg-img.png'">
              <img class="absolute-center" :src="public_path+'/images/angular.png'">
              <img class="absolute-center" :src="public_path+'/images/register-background.png'">
              <img class="absolute-center" :src="public_path+'/images/register-background.png'">
            </photo-viewer>
          </card>
          <card class="m-tb-10" title="Website">
            <div v-if="authorizeEdit" style="position: absolute; top: 10px; left: 0px; text-align: right; right: 15px;">
              <i class="small-option-btn fa fa-edit" v-on:click="prepUpdateWebsiteInfo" data-toggle="modal" data-target="#user-basic-info-modal"></i>
            </div>
            <ul class="simple-list">
              <li>
                <ellipsis-text>
                  <a :href="'http://'+company.website_url" target="blank">{{company.website_url}}</a>
                </ellipsis-text>
              </li>
            </ul>
          </card>
        </div>
        <div class="col-md-8">
          <opening-card v-for="(opening,index) in openings" v-bind:key="index" :opening="opening"></opening-card>
        </div>
      </div>
    </div>
    <basic-info-modal ref="basic-info-modal-component" @update="updateCompany" :company="company"></basic-info-modal>
    <website-info-modal ref="website-info-modal-component" @update="updateCompany" :company="company"></website-info-modal>
  </div>
</template>

<script>
import BasicInfoModal from './basicInfoModal';
import WebsiteInfoModal from './websiteInfoModal';
import axios from 'axios'

export default {
  middleware: 'auth',
  components: {BasicInfoModal, WebsiteInfoModal},
  computed: {
    tabs () {
      return [
        {
          icon: 'user',
          name: this.$t('profile'),
          route: 'settings.profile'
        },
        {
          icon: 'lock',
          name: this.$t('password'),
          route: 'settings.password'
        }
      ]
    }
  },
  data : () =>({
    public_path: location.origin,
    company_id: null,
    company: {},
    openings: [],
    authorizeEdit: false,
  }),
  methods: {
    fetch_company: async function(){
      const { data } = await axios({
          method: 'get',
          url: '/api/company/fetch',
          params: { company_id: this.company_id }
        })
      this.company = data.data;
      this.authorizeEdit = data.meta.edit_allowed;
    },
    updateCompany(data){
      console.log(data);
      this.company = data;
    },
    fetch_openings: async function(){
      const { data } = await axios({
          method: 'get',
          url: '/api/company/fetch/openings',
          params: { company_id: this.company_id }
        })
      this.openings = data.openings;
    },
    prepUpdateBasicInfo(){
      this.$refs['basic-info-modal-component'].prepUpdate(this.company);
    },
    prepUpdateWebsiteInfo(){
      this.$refs['website-info-modal-component'].prepUpdate(this.company);
    }
  },
  created: function(){
    this.company_id = this.$route.params.id;
  },
  mounted(){
    this.fetch_company();
    this.fetch_openings();
  }
}
</script>

<style>
.settings-card .card-body {
  padding: 0;
}
</style>
