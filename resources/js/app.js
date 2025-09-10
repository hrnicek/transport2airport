import './bootstrap';
import '../../node_modules/preline/dist/preline.js';
import { createApp } from 'vue';
import FormDemand from './components/FormDemand.vue';

// Initialize Vue app
const app = createApp(FormDemand);
app.mount('#form-demand');
app.config.globalProperties.$appName = 'Transport2Airport';

// Language Switcher functionality
document.addEventListener('DOMContentLoaded', () => {
  // Initialize language switchers
  initLanguageSwitchers();
  // Initialize mobile menu
  initMobileMenu();
});

function initLanguageSwitchers() {
  const langSwitchers = document.querySelectorAll('.lang-switcher');
  
  langSwitchers.forEach(switcher => {
    const button = switcher.querySelector('button');
    const dropdown = switcher.querySelector('.dropdown');
    
    if (button && dropdown) {
      // Toggle dropdown on button click
      button.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdown.classList.toggle('hidden');
      });
      
      // Close dropdown when clicking outside
      document.addEventListener('click', (e) => {
        if (!switcher.contains(e.target)) {
          dropdown.classList.add('hidden');
        }
      });
    }
  });
}

function initMobileMenu() {
  const mobileMenuButton = document.querySelector('.mobile-menu-button');
  const mobileMenuBackdrop = document.querySelector('.mobile-menu-backdrop');
  const mobileMenuDrawer = document.querySelector('.mobile-menu-drawer');
  const mobileMenuCloseButton = document.querySelector('.mobile-menu-close');
  
  if (mobileMenuButton && mobileMenuBackdrop && mobileMenuDrawer) {
    // Open mobile menu
    mobileMenuButton.addEventListener('click', () => {
      mobileMenuBackdrop.classList.remove('hidden');
      mobileMenuDrawer.classList.remove('hidden');
      mobileMenuDrawer.classList.remove('-translate-x-full');
      mobileMenuDrawer.classList.add('translate-x-0');
    });
    
    // Close mobile menu functions
    const closeMobileMenu = () => {
      mobileMenuDrawer.classList.remove('translate-x-0');
      mobileMenuDrawer.classList.add('-translate-x-full');
      
      // Add a delay before hiding to allow for animation
      setTimeout(() => {
        mobileMenuBackdrop.classList.add('hidden');
        mobileMenuDrawer.classList.add('hidden');
      }, 300);
    };
    
    // Close mobile menu when clicking backdrop
    mobileMenuBackdrop.addEventListener('click', closeMobileMenu);
    
    // Close mobile menu when clicking close button
    if (mobileMenuCloseButton) {
      mobileMenuCloseButton.addEventListener('click', closeMobileMenu);
    }
    
    // Close mobile menu when pressing Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !mobileMenuDrawer.classList.contains('hidden')) {
        closeMobileMenu();
      }
    });
  }
}