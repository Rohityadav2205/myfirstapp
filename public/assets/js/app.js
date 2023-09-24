// @charset "UTF-8";
const show = (display)=>{
    let select = document.getElementsByClassName('verify-box');
    for(let i = 0; i<select.length; i++){
        select[i].style.display = 'none';

    }

   document.getElementById(display).style.display = 'block';
   
}

const showForm = (form)=>{
    let frm = document.getElementsByClassName('formBox');
    for(let i = 0; i<frm.length; i++){
        frm[i].style.display = 'none';
    }

    document.getElementById(form).style.display = 'block';
    
}
$(document).ready(function(){
    $('.nav-tabs li .nav-link').click(function(){
      $('li .nav-link').removeClass("my-active show");
      $(this).addClass("my-active show");
  });
  });

 //owl slider Certificate

 jQuery("#carousel").owlCarousel({
    autoplay:false,
    rewind: true, /* use rewind if you don't want loop */
    margin: 20,
     /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    smartSpeed: 800,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
  
      600: {
        items: 1
      },
  
      1024: {
        items: 1
      },
  
      1366: {
        items: 1
      }
    }
  });
  
  //Owl Slider Popular Courses

 jQuery("#carousel1").owlCarousel({
  autoplay: false,
  rewind: true, /* use rewind if you don't want loop */
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    500: {
      items: 1
    },
    
    1024: {
      items: 2
    },

    1280:{
      items:3
    },

    1366: {
      items: 3
    }
  }
});

  //typewriter

  var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

$('.icon').click (function(event){
  event.preventDefault();
  if( $ (this).hasClass('inOut')  ){
    $('.mp-color').stop().animate({left:'0px'},500 );
  } else{
    $('.mp-color').stop().animate({left:'-231px'},500 );
  } 
  $(this).toggleClass('inOut');
  return false;

}  );

//owl carousel Students
jQuery("#carousel45").owlCarousel({
  autoplay: false,
  rewind: true, /* use rewind if you don't want loop */
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 1
    },

    1024: {
      items: 5
    },

    1366: {
      items: 5
    }
  }
});