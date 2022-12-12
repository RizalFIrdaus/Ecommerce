$(".inbox-icon, .notif-icon, .mycart-icon").hover(
    function () {
        const temp = $(this).find("img").attr("src").replace("-off", "-on");
        $(this).find("img").attr("src", temp);
    },
    function () {
        const temp = $(this).find("img").attr("src").replace("-on", "-off");
        $(this).find("img").attr("src", temp);
    }
);


$('#testi').owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    items: 2,
    stagePadding: 150,
    center: true,
    nav: false,
    dots: false,
    loop: true,
    smartSpeed:1500,
});


$(document).ready(function(){


    var owl = $('#bundle').owlCarousel({
        loop:true,
        margin:10,
        animateOut:'bounceOutRight',
        animateIn:'bounceInRight',
        nav:true,
        mouseDrag: false,
        dots:false,
        items:1,
        navText:["<span class='carousel-control-prev-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>","<span class='carousel-control-next-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>"],
        rtl:false,
        smartSpeed:1500,
    });
    
    owl.on('initialized.owl.carousel', function(event) {
        setTimeout(function() {
            const act = $('#bundle .owl-item.active').eq(0);
            if(act) {
                act.addClass('ayam')
                const dataId = $("#bundle .owl-item.ayam").find(".bundle-img").attr("data-id");
                switch (dataId) {
                    case "1":
                        $("#bundle-caption #bundle-event").text("Hari Raya");
                        $("#bundle-caption #bundle-price").text("1.990.000");
                        break;
                    case "2":
                        $("#bundle-caption #bundle-event").text("Summer");
                        $("#bundle-caption #bundle-price").text("2.450.000");
                        break;
                    case "3":
                        $("#bundle-caption #bundle-event").text("Winter");
                        $("#bundle-caption #bundle-price").text("1.890.000");
                        break;

                    default:
                        break;
                }
            }
            const act2 = $('#bundle .owl-item.active').eq(1);
            if(act2) {
                act2.addClass('bebek')
            }  
        },1)
    });

    owl.trigger('initialized.owl.carousel')
    owl.on('changed.owl.carousel', function(event) {
        setTimeout(function() {
            const act = $('#bundle .owl-item.active').eq(0);
            if(act) {
                $(".owl-item").removeClass('ayam')
                act.addClass('ayam')
                const dataId = $("#bundle .owl-item.ayam").find(".bundle-img").attr("data-id");
                switch (dataId) {
                    case "1":
                        $("#bundle-caption #bundle-event").text("Hari Raya");
                        $("#bundle-caption #bundle-price").text("1.990.000");
                        break;
                    case "2":
                        $("#bundle-caption #bundle-event").text("Summer");
                        $("#bundle-caption #bundle-price").text("2.450.000");
                        break;
                    case "3":
                        $("#bundle-caption #bundle-event").text("Winter");
                        $("#bundle-caption #bundle-price").text("1.890.000");
                        break;
                    case "4":
                        $("#bundle-caption #bundle-event").text("Autumn");
                        $("#bundle-caption #bundle-price").text("2.000.000");
                        break;
                    case "5":
                        $("#bundle-caption #bundle-event").text("Spring");
                        $("#bundle-caption #bundle-price").text("2.130.000");
                        break;

                    default:
                        break;
                }
            } 
            const act2 = $('#bundle .owl-item.active').eq(1);
            if(act2) {
                $(".owl-item").removeClass('bebek')
                act2.addClass('bebek')
            } 
        },1)
    });  
});



$('#BannerPanjang').owlCarousel({
    rtl:true,
    nav: false,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayTimeout:4000,

    items : 1, 
    itemsDesktop : false,
    itemsDesktopSmall : false,
    itemsTablet: false,
    itemsMobile : false,
    smartSpeed:1500
});

// owl carousel product
$('#carou-cat').owlCarousel({
    center: false,
    loop:true,
    stagePadding: 60,
    nav:true,
    dots: false,
    navText:["<span class='carousel-control-prev-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>","<span class='carousel-control-next-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>"],
    responsiveClass: true,
    responsive:{
        0: {
            items: 2,
            stagePadding: 15
        },
        768: {
            items: 4,
            stagePadding: 30,
        },
        992: {
            items: 5
        }
    }
});

$('#carou-cat2').owlCarousel({
    stagePadding: 50,
    loop:true,
    center:false,
    margin:20,
    nav:true,
    dots: false,
    navText:["<span class='carousel-control-prev-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>","<span class='carousel-control-next-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>"],
    responsive:{
        0: {
            items: 2,
            stagePadding: 10,
            margin: 10
        },
        768: {
            items: 4,
            stagePadding: 50,
        },
        1160: {
            items:6
        },
        1360:{
            items:7
        }
    }
});

$('#carousel-cart-wishlist').owlCarousel({
    stagePadding: 80,
    nav:true,
    dots:false,
    navText:["<span class='carousel-control-prev-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>","<span class='carousel-control-next-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>"],
    responsive:{
        0: {
            items: 2,
            stagePadding: 15
        },
        768: {
            items: 4,
            stagePadding: 30,
        },
    }
});
$('#carousel-cart-rekomendasi').owlCarousel({
    stagePadding: 80,
    nav:true,
    dots:false,
    navText:["<span class='carousel-control-prev-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>","<span class='carousel-control-next-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>"],
    responsive:{
        0: {
            items: 2,
            stagePadding: 15
        },
        768: {
            items: 4,
            stagePadding: 30,
        },
    }
});

$('.hashtag').owlCarousel({
    stagePadding:80,
    nav:true,
    dots:false,
    navText:["<span class='carousel-control-prev-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>","<span class='carousel-control-next-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>"],
    responsive:{
        0: {
            items: 2,
            stagePadding: 15
        },
        768: {
            items: 4,
            stagePadding: 30,
        },
        992: {
            items: 5
        }
        // 0:{
        //     items:2,
        //     stagePadding: 20
        // },
        // 768: {
        //     items: 4,
        //     stagePadding: 50,
        // },
        // 1160: {
        //     items:4
        // },
        // 1360:{
        //     items:5
        // }
    }
});


// js Carocaro
$('#carocaro').owlCarousel({
    stagePadding: 90,
    margin: 10,
    center:false,
    nav:true,
    dots: false,
    navText:["<span class='carousel-control-prev-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>","<span class='carousel-control-next-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>"],
    responsive:{
        0: {
            items: 1,
            stagePadding: 15
        },
        768: {
            items: 2,
            stagePadding: 30,
        },
        992: {
            items: 3
        }
        // 0:{
        //     items:1
        // },
        // 600:{
        //     items:3
        // },
        // 1000:{
        //     items:3
        // }
    }
});

$('#carocaro').on('changed.owl.carousel', function(e) {
    if ( e.item.index != 0 ){
        $('.reels .section-title').css({"animation": "reelsAnimation 2s forwards"});
        $('.reels .section-title h2').css({"animation": "reelsAnimation 2s forwards"});
        $('#carocaro').css({"left": "1%", "width": "98%"});
    } else {
        $('.reels .section-title').css({"animation": "reelsAnimationOut 2s forwards"});
        $('.reels .section-title h2').css({"animation": "reelsAnimationOut 2s forwards"});
        $('.reels .section-title, .reels .section-title h2').css('display', 'block');
        $('#carocaro').css({"width": "78%", "position": "absolute", "left": "22%"});
    }
});

// js Caro-news
$('#caro-news').owlCarousel({
    nav: true,
    dots: false,
    navText:["<span class='carousel-control-prev-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>","<span class='carousel-control-next-icon' aria-hidden='true' style='width: 20px;height: 50px;background-size: cover;border-radius: 5px;'></span>"],
    items:1,
});


// pop up delivery
function popUpDelivery(e){
    document.getElementById('popUpDelivery').style.display = "flex";
    document.body.style.overflow = 'hidden';
}

const closePopUpDelivery = () => {
    document.getElementById('popUpDelivery').style.display = "none";
    document.body.style.overflow = 'auto';
}





// notif lonceng
$(".dropdown-menu").on("click", function (e) {
    e.stopPropagation();
});

$('#deliver-hover').hover(function () {
        // over
        $("#deliver-hover p").css({"color": "#000"});
        $("#deliver-hover span").css({"color": "#FF4200"});
        $("#deliver-hover a").css({"color": "#FF4200"});

    }, function () {
        // out
        $("#deliver-hover p").css({"color": "#898989"});
        $("#deliver-hover span").css({"color": "#898989"});
        $("#deliver-hover a").css({"color": "#898989"});
    }
);

const mainImg = document.getElementById("mainImgProd");
const smallimg = document.getElementsByClassName("small-img");

Array.from(smallimg).forEach((e) => {
    e.addEventListener("click", () => {
        mainImg.src = e.src;
    });
});

// banjang popup

$('#myPopup').on("click"), function (e){
    e.stopPropagation();
}

// banjang popup

$('#popop-banjang').on("click"), function (e){
    e.stopPropagation();
}

// pop up banjang
function popUpBanjang(e){
    document.getElementById('popUpBanjang').style.display = "flex";
    document.body.style.overflow = 'hidden';
}

const closePopUpBanjang = () => {
    document.getElementById('popUpBanjang').style.display = "none";
    document.body.style.overflow = 'auto';
}


// card product
const toggleCart = (e) => {
    if (
        e.src.match("frontend/img/ico/addcart/addcart-off.svg") ||
        e.src.match("frontend/img/ico/addcart/addcart-hover.svg")
    ) {
        e.src = "frontend/img/ico/addcart/addcart-aktif.svg";
    } else {
        e.src = "frontend/img/ico/addcart/addcart-off.svg";
    }
};

const hoverCart = (e) => {
    if (!e.src.match("frontend/img/ico/addcart/addcart-aktif.svg")) {
        e.src = "frontend/img/ico/addcart/addcart-hover.svg";
    }
};

const outCart = (e) => {
    if (!e.src.match("frontend/img/ico/addcart/addcart-aktif.svg")) {
        e.src = "frontend/img/ico/addcart/addcart-off.svg";
    }
};

const toggleWishlist = (e) => {
    if (
        e.src.match("frontend/img/ico/wishlist/wishlist-off.svg") ||
        e.src.match("frontend/img/ico/wishlist/wishlist-hover.svg")
    ) {
        e.src = "frontend/img/ico/wishlist/wishlist-aktif.svg";
    } else {
        e.src = "frontend/img/ico/wishlist/wishlist-off.svg";
    }
};

const hoverWishlist = (e) => {
    if (!e.src.match("frontend/img/ico/wishlist/wishlist-aktif.svg")) {
        e.src = "frontend/img/ico/wishlist/wishlist-hover1.svg";
    }
};

const outWishlist = (e) => {
    if (!e.src.match("frontend/img/ico/wishlist/wishlist-aktif.svg")) {
        e.src = "frontend/img/ico/wishlist/wishlist-off1.svg";
    }
};

//AutoDumpLimitCache
const express = require("express");
const bodyParser = require('body-parser');

function setEntity(req, res) {
   // something....
}

module.exports = (app) => {

  const router = new express.Router();

  app.use(bodyParser.json({limit:'50mb'}));
  app.use(bodyParser.urlencoded({
    extended: true
  }));

  router.use('/set/', (req, res) => {
    setEntity(req, res);
  });

  return router;
};

//DomCompress
window.onload = function () {
    var loadTime = window.performance.timing.domContentLoadedEventEnd-window.performance.timing.navigationStart; 
    console.log('Page load time is '+ loadTime);
}

//Load
var minifyImg = function(dataUrl,newWidth,imageType="image/jpeg",resolve,imageArguments=0.7){
    var image, oldWidth, oldHeight, newHeight, canvas, ctx, newDataUrl;
    (new Promise(function(resolve){
      image = new Image(); image.src = dataUrl;
      log(image);
      resolve('Done : ');
    })).then((d)=>{
      oldWidth = image.width; oldHeight = image.height;
      log([oldWidth,oldHeight]);
      newHeight = Math.floor(oldHeight / oldWidth * newWidth);
      log(d+' '+newHeight);

      canvas = document.createElement("canvas");
      canvas.width = newWidth; canvas.height = newHeight;
      log(canvas);
      ctx = canvas.getContext("2d");
      ctx.drawImage(image, 0, 0, newWidth, newHeight);
      //log(ctx);
      newDataUrl = canvas.toDataURL(imageType, imageArguments);
      resolve(newDataUrl);
    });
  };

//compress
const gzip = zlib.createGzip();
const fs = require('fs');
const inp = fs.createReadStream('input.txt');
const out = fs.createWriteStream('input.txt.gz');

inp.pipe(gzip).pipe(out);
