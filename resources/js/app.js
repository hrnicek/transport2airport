import './bootstrap';
import '../../node_modules/preline/dist/preline.js';
import { createApp } from 'vue';
import FormDemand from './components/FormDemand.vue';

const app = createApp(FormDemand);
app.mount('#form-demand');
app.config.globalProperties.$appName = 'Transport2Airport';