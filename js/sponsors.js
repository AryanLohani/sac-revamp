gsap.registerPlugin(ScrollTrigger);


for (var i = 1; i < 29; i++) {
  gsap.from(".s-" + i + " h2", { scrollTrigger: ".s-" + i + " h2", x: -300, duration: 1.5, opacity: 0.2 });
  gsap.from(".s-" + i + " .col-sm-12", { scrollTrigger: ".s-" + i + " .col-sm-12", x: -300, duration: 1.5, opacity: 0.2 });

}

