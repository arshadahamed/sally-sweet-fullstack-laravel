// CSS import
import './assets/main.css';

// Vue imports
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';
import axios from 'axios';

// FontAwesome imports and setup
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faUserSecret } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faInstagram, faTwitter } from '@fortawesome/free-brands-svg-icons';

// Add FontAwesome icons to the library
library.add(faUserSecret, faFacebook, faInstagram, faTwitter);

// Firebase configuration and initialization
import { initializeApp } from 'firebase/app';
import { getAuth } from 'firebase/auth';


// Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyD82fhD2ps4LWQVy4aVqm5oBv-AInFP6uU",
  authDomain: "sallysweet.firebaseapp.com",
  projectId: "sallysweet",
  storageBucket: "sallysweet.appspot.com",
  messagingSenderId: "702286638574",
  appId: "1:702286638574:web:27bc9f23dce495e0dcf2ff"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Optionally, if you need to use Firebase Auth right away, you can initialize it here
// This creates an instance of Firebase Auth for use in your application
const auth = getAuth(app);

// Create Vue application
const vueApp = createApp(App);

// Use Vue Router
vueApp.use(router);

// Use Vuex Store
vueApp.use(store);

// Register FontAwesomeIcon component globally
vueApp.component('font-awesome-icon', FontAwesomeIcon);

// Mount Vue application
vueApp.mount('#app');
