console.log('Script JavaScript chargé.');

document.addEventListener('DOMContentLoaded', function () {


  //PARALLAX LOGO/VIDEO AU SCROLL 
  window.addEventListener('scroll', function () {
    var scrollTop = window.scrollY;
    // vitesse 
    var logoMovement = scrollTop * 0.8;

    // application de l'effet au logo
    document.getElementById('parallax-logo').style.top = logoMovement + "px";
  });


  // FADE IN SECTIONS
  const sections = document.querySelectorAll("#story, #parallax-header, #characters, #place, #studio, #nomination");
  window.addEventListener('scroll', function () {
    sections.forEach(section => {
      const top = window.scrollY + window.innerHeight;
      const sectionTop = section.offsetTop;

      if (top > sectionTop) {
        section.classList.add('fade-in');
      }
    });
  });

  // SLIDE UP TITLES
  // const observer = new IntersectionObserver(entries => {
  //   entries.forEach(entry => {
  //     if (entry.isIntersecting) {
  //       entry.target.classList.add('slide-up-active');
  //     }
  //   });
  // });

  // document.querySelectorAll('.slide-up').forEach(section => {
  //   section.style.opacity = '1';
  //   section.style.transform = 'translateY(600px)';
  // });

  // document.querySelectorAll('.slide-up').forEach(section => {
  //   observer.observe(section);
  // });

  // Initialisation de SwiperJS
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    initialSlide: 1,
    coverflowEffect: {
      rotate: 80,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
  });


  // CLOUDS
  var root = document.documentElement;
  window.addEventListener("scroll", () => {
    var place = document.getElementById('place');
    var posX = Math.round(0 - (window.scrollY - place.offsetTop - 300));
    if (posX <= 0 && posX > -400) {
      root.style.setProperty("--posX", posX + "px");
    }
  });

  // FLOWERS
  let scrollTimeout;
  window.addEventListener("scroll", () => {
    root.style.setProperty("--rotate-duration", "5s");
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
      root.style.setProperty("--rotate-duration", "15s");
    }, 2000);
  });

  // HEADER MENU
  var fullscreenNav = document.querySelector('.fullscreen-nav');
  var menuToggle = document.querySelector('.menu-toggle');

  // Gestion du clic sur le bouton de menu
  menuToggle.addEventListener('click', function (event) {
    if (fullscreenNav.style.display === "none" || fullscreenNav.style.display === "") {
      fullscreenNav.style.display = "flex";
      menuToggle.classList.remove('burger-menu');
      menuToggle.classList.add('cross-menu');
    } else {
      fullscreenNav.style.display = "none";
      menuToggle.classList.remove('cross-menu');
      menuToggle.classList.add('burger-menu');
    }
    event.stopPropagation();
  });

  // Gestion du clic en dehors du menu
  document.addEventListener('click', function (event) {
    if (!fullscreenNav.contains(event.target) && !menuToggle.contains(event.target)) {
      fullscreenNav.style.display = "none";
      menuToggle.classList.remove('cross-menu');
      menuToggle.classList.add('burger-menu');
    }
  });

  // Gestion du clic sur les éléments de la liste du menu
  var navItems = document.querySelectorAll('.fullscreen-nav ul');
  navItems.forEach(function (navItem) {
    navItem.addEventListener('click', function () {
      fullscreenNav.style.display = "none";
      menuToggle.classList.remove('cross-menu');
      menuToggle.classList.add('burger-menu');
    });
  });

  // Arrêter la propagation de l'événement lors du clic sur le menu lui-même
  fullscreenNav.addEventListener('click', function (event) {
    event.stopPropagation();
  });


});



// Apparition des titres
// Sélection des éléments spécifiques
const T1 = document.querySelector('#studio h2 span');
const T2 = document.querySelector('#story h2 span');
const T3 = document.querySelector('#characters h3 span');
const T4 = document.querySelector('#place h3 span');
// Création des observateurs
const observer1 = new IntersectionObserver(handleIntersection(T1));
const observer2 = new IntersectionObserver(handleIntersection(T2));
const observer3 = new IntersectionObserver(handleIntersection(T3));
const observer4 = new IntersectionObserver(handleIntersection(T4));
// Fonction générique pour gérer les intersections
function handleIntersection(el) {
  return entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        el.classList.add('fade-in-class');
        return;
      }
      el.classList.remove('fade-in-class');
    });
  };
}
// Observation
observer1.observe(document.getElementById('studio'));
observer2.observe(document.getElementById('story'));
observer3.observe(document.getElementById('characters'));
observer4.observe(document.getElementById('place'));