import Vue from 'vue';
import Notifications from './mixins/Notifications.js';
// import Wizard from './mixins/Wizard.js';
import axios from 'axios';
import PortalVue from "portal-vue";
import VModal from "vue-js-modal";
import Vuex from 'vuex';
import StatamicStore from './store';
import Popover  from 'vue-js-popover'

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['X-CSRF-TOKEN'] = Statamic.csrfToken;

Vue.prototype.axios = axios;
Vue.prototype.$mousetrap = require('mousetrap');
Vue.prototype.$events = new Vue();

Vue.config.productionTip = false

Vue.use(Popover, { tooltip: true })
Vue.use(PortalVue)
Vue.use(VModal, { componentName: 'vue-modal' })
Vue.use(Vuex);

// Vue.http.interceptors.push({
//     response: function (response) {
//         if (response.status === 401) {
//             this.$root.showLoginModal = true;
//         }
//
//         return response;
//     }
// });

require('./components/NotificationBus');
require('./components/ModalBus');
require('./components/ProgressBar');
require('./components/DirtyState');

var vm = new Vue({
    el: '#statamic',

    mixins: [Notifications],

    store: new Vuex.Store({
        modules: {
            statamic: StatamicStore,
            publish: {
                namespaced: true
            }
        }
    }),

    components: {
        GlobalSearch: require('./components/GlobalSearch.vue'),
        PageTree: require('./components/page-tree/PageTree.vue'),
        Login: require('./components/login/login'),
        LoginModal: require('./components/login/LoginModal.vue'),
        EntryPublishForm: require('./components/entries/PublishForm.vue'),
        Importer: require('./components/importer/importer'),
        FieldsetListing: require('./components/fieldsets/Listing.vue'),
        FieldsetEditForm: require('./components/fieldsets/EditForm.vue'),
        FieldsetCreateForm: require('./components/fieldsets/CreateForm.vue'),
        BlueprintListing: require('./components/blueprints/Listing.vue'),
        BlueprintBuilder: require('./components/blueprints/Builder.vue'),
        FormListing: require('./components/forms/Listing.vue'),
        FormSubmissionListing: require('./components/forms/SubmissionListing.vue'),
        GlobalListing: require('./components/globals/Listing.vue'),
        GlobalPublishForm: require('./components/globals/PublishForm.vue'),
        FormsetBuilder: require('./components/formset-builder/FormsetBuilder.vue'),
        UserListing: require('./components/users/Listing.vue'),
        UserPublishForm: require('./components/users/PublishForm.vue'),
        RoleListing: require('./components/roles/Listing.vue'),
        RolePublishForm: require('./components/roles/PublishForm.vue'),
        UserGroupListing: require('./components/user-groups/Listing.vue'),
        UserGroupPublishForm: require('./components/user-groups/PublishForm.vue'),
        CollectionWizard: require('./components/collections/Wizard.vue'),
        SessionExpiry: require('./components/SessionExpiry.vue'),
        StructureListing: require('./components/structures/Listing.vue'),
    },

    data: {
        version: Statamic.version,
        showLoginModal: false,
        navOpen: true,
        modals: []
    },

    mounted() {
        this.bindWindowResizeListener();

        this.$mousetrap.bind(['command+\\'], e => {
            e.preventDefault();
            this.toggleNav();
        });

    },

    created() {
        const state = localStorage.getItem('statamic.nav') || 'open';
        this.navOpen = state === 'open';
    },

    methods: {

        bindWindowResizeListener() {
            window.addEventListener('resize', () => {
                this.$store.commit('statamic/windowWidth', document.documentElement.clientWidth);
            });
            window.dispatchEvent(new Event('resize'));
        },

        toggleNav() {
            this.navOpen = ! this.navOpen;
            localStorage.setItem('statamic.nav', this.navOpen ? 'open' : 'closed');
        }
    }

});

// TODO: Drag events
// TODO: Live Preview
