
// Preloader
$(window).on('load', function () {
  if ($('#preloader').length) {
    $('#preloader').delay(100).fadeOut('fast', function () {
      $(this).remove();
    });
  }
});


$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn();
    } else {
      $('.back-to-top').fadeOut();
    }
  });
  $('.back-to-top').click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});



gsap.from('.section2 h2', {
  scrollTrigger: {
    trigger: '.section2 h2',
    toggleActions: "play none none none"
  },
  opacity: 0,
  duration: 1,
  y: 50
});
gsap.from('.section2 p', {
  scrollTrigger: {
    trigger: '.section2 p',
    toggleActions: "play none none none"
  },
  opacity: 0,
  duration: 1,
  y: 50
});

gsap.from('.section2 img', {
  scrollTrigger: {
    trigger: '.section2 img',
    toggleActions: "play none none none"
  },
  opacity: 0,
  duration: 1.5,
  y: 50
});



var arr = document.getElementsByClassName("x");
for (var i = 0; i < arr.length; i++) {
  gsap.from(arr[i], {
    scrollTrigger: {
      trigger: arr[i],
      toggleActions: "play none none none"
    },
    opacity: 0,
    duration: 1.5,
    y: 50
  });
}

var arr = document.getElementsByClassName("y");
for (var i = 0; i < arr.length; i++) {
  gsap.from(arr[i], {
    scrollTrigger: {
      trigger: arr[i],
      toggleActions: "play none none none"
    },
    opacity: 0,
    duration: 0.5,
    y: -50,
    stagger: 0.2,
    delay: 0.5
  });
}

var arr = document.getElementsByClassName("z");
for (var i = 0; i < arr.length; i++) {
  gsap.from(arr[i], {
    scrollTrigger: {
      trigger: arr[i],
      toggleActions: "play none none none"
    },
    opacity: 0,
    duration: 1.5,
    y: 50
  });
}

var arr = document.getElementsByClassName("T1");
for (var i = 0; i < arr.length; i++) {
  gsap.from(arr[i], {
    scrollTrigger: {
      trigger: arr[i],
      toggleActions: "play none none none"
    },
    opacity: 0,
    duration: 0.5,
    y: 50
  });
}
var arr = document.getElementsByClassName("T2");
for (var i = 0; i < arr.length; i++) {
  gsap.from(arr[i], {
    scrollTrigger: {
      trigger: arr[i],
      toggleActions: "play none none none"
    },
    opacity: 0,
    duration: 0.5,
    y: 50
  });
}
$(document).ready(function () {
  $(" .debits").hover(function () {
    $(" .center-right").css("background-color", "#4997cd");
  }, function () {
    $(" .center-right").css("background-color", "#fff");
  });
});
$(document).ready(function () {
  $(".credits").hover(function () {
    $(".center-left").css("background-color", "#4997cd");
  }, function () {
    $(".center-left").css("background-color", "#fff");
  });
});

$(".step").click(function () {
  $(this).addClass("active").prevAll().addClass("active");
  $(this).nextAll().removeClass("active");
});

$(".step01").click(function () {
  $("#line-progress").css("width", "3%");
  $(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click(function () {
  $("#line-progress").css("width", "25%");
  $(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click(function () {
  $("#line-progress").css("width", "50%");
  $(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click(function () {
  $("#line-progress").css("width", "75%");
  $(".production").addClass("active").siblings().removeClass("active");
});

$(".step05").click(function () {
  $("#line-progress").css("width", "100%");
  $(".analysis").addClass("active").siblings().removeClass("active");
});
var arr = document.getElementsByClassName("two");
for (var i = 0; i < arr.length; i++) {
  gsap.from(arr[i], {
    scrollTrigger: {
      trigger: arr[i],
      toggleActions: "restart none none none"
    },
    opacity: 0,
    duration: 1.0,
    y: 50
  });
}



