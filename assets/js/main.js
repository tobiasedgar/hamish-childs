gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

ScrollTrigger.config({
  autoRefreshEvents: "visibilitychange,DOMContentLoaded,load, resize"
});


var b = document.querySelector(".enter");
if (b) {
    enterView({
        selector: '.enter',
        enter: function (el) {
        el.classList.add('entered');
        },
        exit: function (el) {
        el.classList.remove('entered');
        },
        offset: 0.1,
        // once: false,
    });
}

// Lenis Mooth Scroll
const lenis = new Lenis({
  duration: 0.8,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -9 * t)),
})
function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}
requestAnimationFrame(raf)


let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);



var frame = document.querySelector('.first');
var info = document.querySelector('.info');
var infoBtn = document.querySelector('.info-btn');
function slide(el) {
  var slide = gsap.timeline()
  slide.to(frame, {
    top: 0,
    duration: 0.6,
    ease: Power4.easeInOut,
  }).to(el, {
    top: 0,
    duration: 0,
  }).to(frame, {
    top: "100vh",
    duration: 0.6,
    ease: Power4.easeInOut,
    delay: 0.2
  }).to(frame, {
    top: "-100vh",
    duration: 0,
  });
}

function slideRev(el) {
  var slide = gsap.timeline()
  slide.to(frame, {
    top: 0,
    duration: 0.6,
    ease: Power4.easeInOut,
  }).to(el, {
    top: "-100vh",
    duration: 0,
  }).to(frame, {
    top: "100vh",
    duration: 0.6,
    ease: Power4.easeInOut,
    delay: 0.2
  }).to(frame, {
    top: "-100vh",
    duration: 0,
  });
}


function infoplay(e) {

  if (!e.classList.contains('active')) {
   
    setTimeout(() => {
      e.classList.add('active');
      designBtn.classList.remove('active')
      document.querySelector('body').classList.add('light');
    }, 800);
    slide(info)
  }
 
}



function inforeverse() {
  if (infoBtn.classList.contains('active')) {
    setTimeout(() => {
      infoBtn.classList.remove('active');
      document.querySelector('body').classList.remove('light')
    }, 800);
    slideRev(info)
  }
}


helloIn()
function helloIn() {
  // var hello = document.querySelector('.landing svg');
  gsap.from(".landing svg path", {
    y: "100vh",
    ease: Back.easeInOut,
    duration:1,
    stagger: 0.05,
  })
}

gsap.to('.landing svg', {
  // width: 0,
  top: -500,
  ease: "none",

  scrollTrigger: {
    trigger: ".landing",
    start: "top top",
    end: "bottom top",
    scrub: true,
    // markers: true
  }
})




function titleClick() {
  inforeverse()
  gsap.to(window, { 
    duration: 0, 
    scrollTo: 0,
  });
  if (infoBtn.classList.contains('active')) {
    setTimeout(() => {
      helloIn()
    }, 1000);
  } else {
    helloIn()
  }
}



var design = document.querySelector('.design');
var designBtn = document.querySelector('.design-btn');

function designClick() {
  inforeverse()
  gsap.to(window, { 
    duration: 1, 
    scrollTo: design,
  });
  designBtn.classList.add('active')
}

ScrollTrigger.create({
  trigger: design,
  scroller: "body",
  start: "top center",
  end: "bottom 40%",
  markers: false,
  onToggle: self => {
    if (self.isActive) {
      designBtn.classList.add('active')
    } else {
      designBtn.classList.remove('active')
    }
  }
});


function projClick(e) {
  console.log(e);
  var tl = gsap.timeline();
  tl.to(e, {
    top: 32,
    height: 'calc(100vh - 64px)',
    left: 32,
    duration: 1,
    ease: Power4.easeInOut,

  })
}





// projects on scroll
var projs = document.querySelectorAll('.proj');
for (let i = 0; i < projs.length; i++) {
  const e = projs[i];
  
  // gsap.to(e.querySelector('.aspect-bg'), { // Animate .text2
  //   // Whatever properties to animate here
  //   height: "100%",
  //   duration: 1,
  //   ease: Power4.easeInOut,
  //   scrollTrigger: {
  //     trigger: e,
  //     start: "20% bottom",
  //   }
  // });

  ScrollTrigger.create({
    trigger: e,
    start: "20% bottom",
    onEnter: () => {
      gsap.to(e.querySelector('.aspect-bg'), { 
        height: "100%",
        duration: 1,
        ease: Power4.easeInOut
      });
    },
    onLeaveBack: () => {
      gsap.to(e.querySelector('.aspect-bg'), { 
        height: "0%",
        duration: 1,
        ease: Power4.easeInOut
      });
    }
  });
  

}













/* Swiper Initialiser */
const swiperContainer = document.getElementsByClassName("swiper-container");

for (var i = 0; i < swiperContainer.length; i++) {
  swiperContainer[i].classList.add("swiper" + i);

  const swiperNext =
    swiperContainer[i].getElementsByClassName("swiper-button-prev");
  const swiperPrev =
    swiperContainer[i].getElementsByClassName("swiper-button-next");
  const swiperPage =
    swiperContainer[i].getElementsByClassName("swiper-pagination");

  if (swiperNext) {
    for (var s = 0; s < swiperNext.length; s++) {
      swiperNext[s].classList.add("next" + i);
    }
  }
  if (swiperPrev) {
    for (var s = 0; s < swiperPrev.length; s++) {
      swiperPrev[s].classList.add("prev" + i);
    }
  }
  if (swiperPage) {
    for (var s = 0; s < swiperPage.length; s++) {
      swiperPage[s].classList.add("page" + i);
    }
  }

  var mySwiper = new Swiper(".swiper" + i, {
    direction: "horizontal",
    loop: true,
    slidesPerView: 1,
    centeredSlides: true,
    autoHeight: true,
    speed: 300,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    navigation: {
      nextEl: ".next" + i,
      prevEl: ".prev" + i,
    },
    pagination: {
      el: ".page" + i,
      clickable: true,
    },
  });
}



/* Orphan Remove and LSEP Removal */
var nbspSelectors = ["h1", "h2", "h3", "h4", "h5", "h6", "p"];
var nbspWordMin = 6; //Minimum words within parent tag to activate script

nbspSelectors.forEach(function (selector) {
  var nbspElements = document.querySelectorAll(selector);
  nbspElements.forEach(function (element) {
    element.innerHTML = element.innerHTML.replace(/\u2028/g, "");
    element.innerHTML = element.innerHTML.replace(/&#8232;/g, "");
    // var wordCount = element.innerHTML.split(" ").length;
    // if (wordCount >= nbspWordMin) {
    //   element.innerHTML = element.innerHTML.replace(/ ([^ ]*)$/, "&nbsp;$1");
    // }
  });
});

/* Lazy Load Initialiser */
var lazyLoadInstance = new LazyLoad({});

/* LSEP Character Removal */

// Must reinitialise scripts after LSEP removal is called

window.onload = function () {
  //   document.body.innerHTML = document.body.innerHTML.replace(/\u2028/g, '');
  //   document.body.innerHTML = document.body.innerHTML.replace(/&#8232;/g, '');
  lazyLoadInstance.update();
};



