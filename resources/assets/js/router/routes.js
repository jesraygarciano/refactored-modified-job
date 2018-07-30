const Welcome = () => import('~/pages/welcome').then(m => m.default || m)
const Login = () => import('~/pages/auth/login').then(m => m.default || m)
const Register = () => import('~/pages/auth/register').then(m => m.default || m)
const PasswordEmail = () => import('~/pages/auth/password/email').then(m => m.default || m)
const PasswordReset = () => import('~/pages/auth/password/reset').then(m => m.default || m)
const NotFound = () => import('~/pages/errors/404').then(m => m.default || m)

const Home = () => import('~/pages/home').then(m => m.default || m)
const UserProfile = () => import('~/pages/user/index').then(m => m.default || m)
const CompanyProfile = () => import('~/pages/company/index').then(m => m.default || m)
const CompanyHiringApplicants = () => import('~/pages/company/hiringApplicants').then(m => m.default || m)
const CompanyHiringProcesses = () => import('~/pages/company/hiringProcesses').then(m => m.default || m)
const CompanyHiringProcessesCreate = () => import('~/pages/hiring-process/edit').then(m => m.default || m)
const OpeningProfile = () => import('~/pages/opening/index').then(m => m.default || m)
const UserCompanies = () => import('~/pages/user/companies').then(m => m.default || m)
const OpeningApply = () => import('~/pages/opening/apply').then(m => m.default || m)
const HiringApplication = () => import('~/pages/user/hiringApplications').then(m => m.default || m)
const CompanyCreate = () => import('~/pages/company/create').then(m => m.default || m)
const OpeningCreate = () => import('~/pages/opening/create').then(m => m.default || m)
const Settings = () => import('~/pages/settings/index').then(m => m.default || m)
const SettingsProfile = () => import('~/pages/settings/profile').then(m => m.default || m)
const SettingsPassword = () => import('~/pages/settings/password').then(m => m.default || m)
const OpeningList = () => import('~/pages/opening/openingList').then(m => m.default || m)
const SingleOpening = () => import('~/pages/opening/singleOpening').then(m => m.default || m)

const CompanyList = () => import('~/pages/company/companyList').then(m => m.default || m)
const SingleCompany = () => import('~/pages/company/singleCompany').then(m => m.default || m)

// Portals
const ApplicantPortal = () => import('~/pages/portals/applicantDashboard').then(m => m.default || m)
const HiringPortal = () => import('~/pages/portals/hiringDashboard').then(m => m.default || m)
const ManagementPortal = () => import('~/pages/portals/managementDashboard').then(m => m.default || m)

export default [
  { path: '/', name: 'welcome', component: Welcome },

  { path: '/login', name: 'login', component: Login },
  { path: '/register', name: 'register', component: Register },
  { path: '/password/reset', name: 'password.request', component: PasswordEmail },
  { path: '/password/reset/:token', name: 'password.reset', component: PasswordReset },

  { path: '/home', name: 'home', component: Home },
  { path: '/settings',
    component: Settings,
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: SettingsProfile },
      { path: 'password', name: 'settings.password', component: SettingsPassword }
    ] },

  // company routes
  { path: '/company/profile/:id', name: 'company.profile', component: CompanyProfile },
  { path: '/company/create', name: 'company.create', component: CompanyCreate },
  { path: '/company/:id/hiringapplicants', name: 'company.hiringapplicants', component: CompanyHiringApplicants },
  { path: '/en/companies', name: 'company.create', component: CompanyList },
  { path: '/en/companies/show', name: 'company.create', component: SingleCompany },
  { path: '/company/:id/hiringprocceses', name: 'company.hiringprocceses', component: CompanyHiringProcesses },
  { path: '/company/:company_id/hiringprocceses/create/:id?', name: 'company.hiringprocceses.create', component: CompanyHiringProcessesCreate },

  // user routes
  { path: '/profile/:id?', name: 'user.profile', component: UserProfile },
  { path: '/user/companies', name: 'user.companies', component: UserCompanies },

  // opening routes
  { path: '/opening/profile/:id', name: 'opening.profile', component: OpeningProfile },
  { path: '/company/:company_id/opening/create', name: 'opening.create', component: OpeningCreate },
  { path: '/en/job-search', name: 'opening.openinglist', component: OpeningList },
  { path: '/en/job/show', name: 'opening.singleOpening', component: SingleOpening },

  // application
  { path: '/applications', name: 'hiringApplication.applications', component: HiringApplication },
  { path: '/opening/apply/:opening_id/:applicant_id?', name: 'hiringApplication.create', component: OpeningApply },

  // portals
  { path: '/en/portal/applicant', name: 'portals.applicantDashboard', component: ApplicantPortal },
  { path: '/en/portal/hiring', name: 'portals.hiringDashboard', component: HiringPortal },
  { path: '/en/portal/management', name: 'portals.managementDashboard', component: ManagementPortal },

  { path: '*', component: NotFound }
]
