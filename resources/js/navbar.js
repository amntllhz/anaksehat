// resources/js/navbar.js

document.addEventListener('DOMContentLoaded', function () {
    const hamburgerButton = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeButtonA = document.getElementById('close-menu-a');
    const closeButtonB = document.getElementById('close-menu-b');
    const tabMenu = document.getElementById('tab-menu');
  
    // Fungsi untuk menampilkan menu mobile
    function openMobileMenu() {
      mobileMenu.classList.remove('hidden');
      tabMenu.classList.add('hidden');
    }
  
    // Fungsi untuk menutup menu mobile
    function closeMobileMenu() {
      mobileMenu.classList.add('hidden');
      tabMenu.classList.add('hidden');
    }
  
    // Fungsi untuk menampilkan tab menu
    function openTabMenu() {
      tabMenu.classList.remove('hidden');
      mobileMenu.classList.add('hidden');
    }
  
    // Fungsi untuk menutup tab menu
    function closeTabMenu() {
      tabMenu.classList.add('hidden');
    }
  
    // Event listener untuk hamburger button
    hamburgerButton.addEventListener('click', openMobileMenu);
  
    // Event listener untuk close button pada mobile menu
    closeButtonA.addEventListener('click', closeMobileMenu);
    closeButtonB.addEventListener('click', closeTabMenu);
  });
  