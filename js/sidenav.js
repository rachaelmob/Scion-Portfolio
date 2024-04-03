const openBtn = document.querySelector('#openBtn');
const closeBtn = document.querySelector('#closeBtn');
const media = window.matchMedia('(width < $break--med)');
const sideNavMenu = document.querySelector('.sidenav-menu');
const pageContent = document.querySelector('#page-content');
const body = document.querySelector('body');


function setupSideNav(e) {
    if (e.matches) {
      // is mobile
      console.log('is mobile');
      sideNavMenu.setAttribute('inert', '');
      sideNavMenu.style.transition = 'none';
    } else {
      // is tablet/desktop
      console.log('is desktop');
      closeMobileMenu();
      sideNavMenu.removeAttribute('inert');
    }
  }


function openMobileMenu(){
    openBtn.style.display = 'none';
    openBtn.setAttribute('aria-expanded', 'true');
    // $('#openBtn').hide(); //-> Needs jQuery
    sideNavMenu.removeAttribute('inert');
    sideNavMenu.removeAttribute('style');
    pageContent.setAttribute('inert', '');
    bodyScrollLockUpgrade.disableBodyScroll(body);
    closeBtn.focus();
}

function closeMobileMenu(){
    openBtn.setAttribute('aria-expanded', 'false');
    // $('#openBtn').show(); //-> Needs jQuery
    sideNavMenu.setAttribute('inert', '');
    pageContent.removeAttribute('inert');
    bodyScrollLockUpgrade.enableBodyScroll(body);
    openBtn.focus();
  
    setTimeout(() => {
        sideNavMenu.style.transition = 'none';
        openBtn.style.display = 'flex';
      }, 500);
}

setupSideNav(media);

openBtn.addEventListener('click', openMobileMenu);
closeBtn.addEventListener('click', closeMobileMenu);

media.addEventListener('change', function (e){
    setupSideNav(e);
});