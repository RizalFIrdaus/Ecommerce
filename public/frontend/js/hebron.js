// $('.alertify-notifier .ajs-message.ajs-success').css("background-color","#ff4200");

// // splash screen animation
// const splashMasta = document.querySelector('.splash-masta')
// const splashBagas = document.querySelector('.splash-bagas')
// const reelsMasta = document.querySelector('.reels-masta')
// const reelsBagas = document.querySelector('.reels-bagas')

// const intervalSplash = setInterval(() => {
//     setTimeout(() => {
//         splashMasta.src = splashMasta.src.replace('1', '2')
//         splashBagas.src = splashBagas.src.replace('1', '2')
//     }, 250)
//     setTimeout(() => {
//         splashMasta.src = splashMasta.src.replace('2', '3')
//         splashBagas.src = splashBagas.src.replace('2', '3')
//     }, 500)
//     setTimeout(() => {
//         splashMasta.src = splashMasta.src.replace('3', '4')
//         splashBagas.src = splashBagas.src.replace('3', '4')
//     }, 750)
//     setTimeout(() => {
//         splashMasta.src = splashMasta.src.replace('4', '1')
//         splashBagas.src = splashBagas.src.replace('4', '1')
//     }, 1000)

//     if(document.querySelector('#splash-screen-home').style.display == 'none'){
//         clearInterval(intervalSplash)
//     }
// }, 1010)

// const intervalReels = setInterval(() => {
//     setTimeout(() => {
//         reelsMasta.src = reelsMasta.src.replace('1', '2')
//         reelsBagas.src = reelsBagas.src.replace('1', '2')
//     }, 250)
//     setTimeout(() => {
//         reelsMasta.src = reelsMasta.src.replace('2', '3')
//         reelsBagas.src = reelsBagas.src.replace('2', '3')
//     }, 500)
//     setTimeout(() => {
//         reelsMasta.src = reelsMasta.src.replace('3', '4')
//         reelsBagas.src = reelsBagas.src.replace('3', '4')
//     }, 750)
//     setTimeout(() => {
//         reelsMasta.src = reelsMasta.src.replace('4', '1')
//         reelsBagas.src = reelsBagas.src.replace('4', '1')
//     }, 1000)
// }, 1010)
// // end splash screen


// splash screen cookies
// function doOnce() {
//     if (!document.cookie.split('; ').find((row) => row.startsWith('doSomethingOnlyOnce'))) {
//         document.cookie = "doSomethingOnlyOnce=true;";
//         console.log(document.cookie)
//     } else {
//         const output = document.getElementById('splash-screen-home')
//         output.classList.remove('show')
//         output.style.display = 'none'
//     }
// }


$(".toggle-password").click(function() {

  $(this).toggleClass("eyehide");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$(function () {
  $(".thumbnail-news").each(function (i) {
      len = $(this).text().length;
      if (len > 80) {
          $(this).text($(this).text().substring(0, 80) + "...");
      }
  });
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