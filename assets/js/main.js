let width = screen.width;
const para = gsap.utils.toArray('p');
const titles = gsap.utils.toArray('.section-title');
const moveText = gsap.utils.toArray('.movable')

if( width > 1024 ){
    const heroSection = document.querySelector(".hero-wrapper");
    document.addEventListener("mousemove", parallax);
    function parallax(e){
        document.querySelectorAll(".movable").forEach(function(move){
            let movingVal = move.getAttribute("data-value");
            let x = (e.clientX * movingVal)  / 150;
            let y = (e.clientY * movingVal) / 150;
    
            move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
        });
    }
}

const hamburger = document.getElementById("mobile-icon");
const mobileMenu = document.getElementById("mobile-nav")
hamburger.addEventListener("click", openMenu);
function openMenu(e){
    e.preventDefault();
    hamburger.classList.toggle("is-active");
    mobileMenu.classList.toggle("menu-active")
}


let tl = gsap.timeline();

tl.to(".nav-item a", {
    y: 0,
    opacity: 1,
    stagger: 0.1 
  });

tl.to("#portrait-img", {
    y: 0,
    opacity: 1
});  

moveText.forEach(text =>{
  tl.to(text, {
    y: 0,
    opacity: 1
  });
});
// tl.to(".movable-elements", {
//     y: 0,
//     opacity: 1
// });

titles.forEach(title => {
    gsap.to(title, {
        y: 0,
        opacity: 1, 
        scrollTrigger: {
          trigger: title,
          start: 'top bottom',
          end: 'center center',
          scrub: true
        }
    });
});

para.forEach(p => {
    gsap.to(p, { 
      y: 0,
      opacity: 1,
      scrollTrigger: {
        trigger: p,
        start: "center 70%",
        end: "center 70%",
        scrub: true
      }
    });
});

gsap.to('.wave-animation', {
    y: 0,
    opacity: 1, 
    scrollTrigger: {
      trigger: '.wave-animation',
      start: 'top bottom',
      end: 'center center',
      scrub: true
    }
});

// Smooth Scroll 
const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)