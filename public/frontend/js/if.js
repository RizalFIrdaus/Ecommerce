var dropdown = document.querySelectorAll(".side-dd .dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

jQuery(document).ready(($) => {
    $('.quantity').on('click', '.plus', function(e) {
        let $input = $(this).prev('input.qty');
        let val = parseInt($input.val());
        $input.val( val+1 ).change();
    });

    $('.quantity').on('click', '.minus', 
        function(e) {
        let $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        if (val > 0) {
            $input.val( val-1 ).change();
        } 
    });
});

// yutup =============================================================================================================================================================
var ytplayerList;

function onPlayerReady(e) {
    var video_data = e.target.getVideoData(),
        label = video_data.video_id+':'+video_data.title;
    e.target.ulabel = label;
    console.log(label + " is ready!");
 
}
function onPlayerError(e) {
    console.log('[onPlayerError]');
}
function onPlayerStateChange(e) {
    var label = e.target.ulabel;
    if (e["data"] == YT.PlayerState.PLAYING) {
        console.log({
            event: "youtube",
            action: "play:"+e.target.getPlaybackQuality(),
            label: label
        });
        //if one video is play then pause other
        pauseOthersYoutubes(e.target);
    }
    if (e["data"] == YT.PlayerState.PAUSED) {
        console.log({
            event: "youtube",
            action: "pause:"+e.target.getPlaybackQuality(),
            label: label
        });
    }
    if (e["data"] == YT.PlayerState.ENDED) {
        console.log({
            event: "youtube",
            action: "end",
            label: label
        });
    }
    //track number of buffering and quality of video
    if (e["data"] == YT.PlayerState.BUFFERING) {
        e.target.uBufferingCount?++e.target.uBufferingCount:e.target.uBufferingCount=1; 
        console.log({
            event: "youtube",
            action: "buffering["+e.target.uBufferingCount+"]:"+e.target.getPlaybackQuality(),
            label: label
        });
        //if one video is play then pause other, this is needed because at start video is in buffered state and start playing without go to playing state
        if( YT.PlayerState.UNSTARTED ==  e.target.uLastPlayerState ){
            pauseOthersYoutubes(e.target);
        }
    }
    //last action keep stage in uLastPlayerState
    if( e.data != e.target.uLastPlayerState ) {
        console.log(label + ":state change from " + e.target.uLastPlayerState + " to " + e.data);
        e.target.uLastPlayerState = e.data;
    }
}
function initYoutubePlayers(){
    ytplayerList = null; //reset
    ytplayerList = []; //create new array to hold youtube player
    for (var e = document.getElementsByTagName("iframe"), x = e.length; x-- ;) {
        if (/youtube.com\/embed/.test(e[x].src)) {
            ytplayerList.push(initYoutubePlayer(e[x]));
            console.log("create a Youtube player successfully");
        }
    }
    
}
function pauseOthersYoutubes( currentPlayer ) {
    if (!currentPlayer) return;
    for (var i = ytplayerList.length; i-- ;){
        if( ytplayerList[i] && (ytplayerList[i] != currentPlayer) ){
            ytplayerList[i].pauseVideo();
        }
    }  
}
//init a youtube iframe
function initYoutubePlayer(ytiframe){
    console.log("have youtube iframe");
    var ytp = new YT.Player(ytiframe, {
        events: {
            onStateChange: onPlayerStateChange,
            onError: onPlayerError,
            onReady: onPlayerReady
        }
    });
    ytiframe.ytp = ytp;
    return ytp;
}
function onYouTubeIframeAPIReady() {
    console.log("YouTubeIframeAPI is ready");
    initYoutubePlayers();
}
var tag = document.createElement('script');
//use https when loading script and youtube iframe src since if user is logging in youtube the youtube src will switch to https.
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);    

// video scroll
console.clear();

"use strict";
const iframeVideoPlugin = { // Iframe Video On Scroll
    init() {
        this.videoEls = Array.from(document.querySelectorAll(
            'iframe[src*="facebook.com/plugins/video"], ' +
            'iframe[src*="youtube.com"], ' +
            'iframe[src*="vimeo.com"], ' +
            'iframe[src*="dailymotion.com"], ' +
            'iframe[src*="hurriyet.com.tr/video"], ' +
            'iframe[src*="twitch.tv"]'
        )); // select supported iframe Nodes and convert them into ordinary Array (so we can push more elements on the fly)

        this.videoElsTwitter = this.videoElsTwitter || []; // twitter elements are pushed into this array
        Array.prototype.push.apply(this.videoEls, this.videoElsTwitter); // twitter nodeList array is appended to Iframe NodeList array
        this.fraction = 0.25; // VideoArea fraction to decide whether video is in ViewPort or not
        this.waiting = false;
        this.waitingThreshold = 500; // increses performance upon onScroll
        this.notSupportedVideosRegex = '(facebook.com)|(twitch.tv)'; // not-supported video iframes will be handled by an another method
        this.autoStartRegex = /(autostart=true)|(autoplay=1)|(autoPlay)/g; // auto-play parameters regEx, different video platforms uses different parameter

        // Parsing and categorizing the iframes videos
        if (this.videoEls.length > 0) {
            Array.prototype.forEach.call(this.videoEls, videoEl => {

                if (videoEl.src.search(this.notSupportedVideosRegex) > 0) { // check if supported or not supported video
                    if (videoEl.src.search('twitch.tv') > 0 && videoEl.src.search('autoplay=false') < 0) { // twitch exception
                        videoEl.classList.add('playing');
                    }
                    this.notSupportedVideosClickDetect(videoEl);
                } else if (videoEl.src.search(this.autoStartRegex) > 0) {
                    videoEl.classList.add('playing');
                    videoEl.classList.add('rhd-auto-play');
                    videoEl.src = videoEl.src.replace(this.autoStartRegex, 'autostart=false');
                    videoEl.onload = () => {
                        videoEl.classList.remove('playing');
                        this.scrollHandler();
                    }
                }
            });

            // Remove listeners -- in case init() is called multiple times, the previously attached events have to be removed.
            window.removeEventListener('scroll', this.scrollHandler);
            window.removeEventListener('resize', this.scrollHandler); // OPTIONAL
            window.removeEventListener('load', this.scrollHandler); // OPTIONAL

            // Add listeners
            window.addEventListener('scroll', this.scrollHandler, false);
            window.addEventListener('resize', this.scrollHandler, false); // OPTIONAL
            window.addEventListener('load', this.scrollHandler, false); // OPTIONAL
        }
    },

    scrollHandler: () => { // this method is attached to Window by Arrow Function; so it can be removed safely by .removeEventListener()
        if (iframeVideoPlugin.waiting) {
            return;
        }
        iframeVideoPlugin.waiting = true;
        clearTimeout(iframeVideoPlugin.endScrollHandle);
        iframeVideoPlugin.scrollHandlerHelper();
        setTimeout(() => {
            iframeVideoPlugin.waiting = false;
        }, iframeVideoPlugin.waitingThreshold);
        iframeVideoPlugin.endScrollHandle = setTimeout(() => {
            iframeVideoPlugin.scrollHandlerHelper();
        }, iframeVideoPlugin.waitingThreshold);
    },

    scrollHandlerHelper() {
        Array.prototype.forEach.call(this.videoEls, videoEl => {
            this.isInViewPort(videoEl);
        });
    },

    notSupportedVideosClickDetect(videoEl) {
        videoEl.addEventListener('mouseenter', function () {
            videoEl.classList.add('iframe-hovered');
        });
        videoEl.addEventListener('mouseleave', function () {
            videoEl.classList.remove('iframe-hovered');
            window.focus();
        });
        window.addEventListener('blur', this.notSupportedVideosWindowBlurHandler, false);
        window.focus();
    },

    notSupportedVideosStopPlaying(videoEl) {
        if (videoEl.src.search('twitch.tv') > 0 && videoEl.src.search('autoplay') < 0) {
            videoEl.src = videoEl.src + '&autoplay=false';
        } else {
            videoEl.src = videoEl.src;
        }
        videoEl.classList.remove('playing');
    },

    notSupportedVideosWindowBlurHandler() {
        var hoveredIframes = document.querySelector('.iframe-hovered');
        if (hoveredIframes) {
            hoveredIframes.classList.add('playing');
        }
    },

    messageFn(action, src) {
        if (src.search("vimeo") > 0) { // case for Vimeo
            return JSON.stringify({
                method: action
            });
        } else if (src.search("youtube") > 0) { // case for youTube
            return JSON.stringify({
                event: 'command',
                func: action + 'Video'
            });
        } else { // case for other video services (hurriyet videos, dailymotion etc..)
            return action;
        }
    },

    isInViewPort(videoEl) {
        let percentVisible = this.fraction,
            elemRect = videoEl.getBoundingClientRect(),
            elemTop = elemRect.top,
            elemBottom = elemRect.bottom,
            elemHeight = elemRect.height,
            overhang = elemHeight * (1 - percentVisible),

            isVisible = (elemTop >= -overhang) && (elemBottom <= window.innerHeight + overhang);

        if (isVisible) { // video is in the ViewPort, play it
            if (!videoEl.classList.contains('playing') && videoEl.src.search(this.notSupportedVideosRegex) < 0) {
                videoEl.classList.add('playing');
                if (videoEl.classList.contains('rhd-auto-play')) {
                    videoEl.contentWindow.postMessage(this.messageFn('play', videoEl.src), '*');
                }
            }
        } else { // video is outside the ViewPort, pause
            if (videoEl.classList.contains('playing')) {
                if (videoEl.src.search(this.notSupportedVideosRegex) > 0) { // stop only not supported iframes
                    this.notSupportedVideosStopPlaying(videoEl);
                } else if (videoEl.classList.contains('rhd-twitter-video')) { // stop only twitter videos
                    videoEl.classList.remove('playing');
                    let isVideoIframeInIframe = videoEl.contentDocument.querySelector('iframe');
                    if (isVideoIframeInIframe) { // if twitter video is playing
                        let iframeSrc = isVideoIframeInIframe.src;
                        iframeSrc = iframeSrc.split('?')[0];
                        isVideoIframeInIframe.src = iframeSrc;
                    }
                } else { // pause supported iframes
                    videoEl.classList.remove('playing');
                    videoEl.contentWindow.postMessage(this.messageFn('pause', videoEl.src), '*');
                }
            }
        }
    },
};

const loadJS = (source, callback) => { // Fn to load JS files and append to <head></head>
    let scriptEl = document.createElement('script'),
        head = document.getElementsByTagName('head')[0];
    scriptEl.async = 1;
    scriptEl.defer = 1;
    scriptEl.onload = scriptEl.onreadystatechange = function (_, isAbort) {
        if (isAbort || !scriptEl.readyState || /loaded|complete/.test(scriptEl.readyState)) {
            scriptEl.onload = scriptEl.onreadystatechange = null;
            scriptEl = undefined;
            if (!isAbort) {
                if (callback) callback();
            }
        }
    };
    scriptEl.src = source;
    head.appendChild(scriptEl);
};

const checkInstagramEmbed = () => {
    let instagramEl = document.querySelectorAll('.instagram-media');

    if (instagramEl.length > 0) {
        if (typeof (window.instgrm) !== 'undefined') {
            window.instgrm.Embeds.process();
        } else {
            loadJS('https://www.instagram.com/embed.js');
        }
    }
};

const twitterCallback = () => {
    twttr.events.bind('rendered', (event) => {
        if (event.target.classList.contains('twitter-video')) {
            let twitterVideoIframe = event.target.querySelector('iframe');
            twitterVideoIframe.classList.add('rhd-twitter-video');
            iframeVideoPlugin.videoElsTwitter.push(twitterVideoIframe); // push the Twitter element
            iframeVideoPlugin.init(); // re-init the iframe scroll watcher, because a new twitter element has added
        }
    }
                     );
};

const checkTwitterEmbed = () => {
    let twitterEls = document.querySelectorAll('.twitter-video, .twitter-tweet');

    if (twitterEls.length > 0) {
        if (typeof (window.twttr) !== 'undefined') {
            window.twttr.widgets.load();
        } else {
            loadJS('https://platform.twitter.com/widgets.js', twitterCallback);
        }
    }
};

document.addEventListener("DOMContentLoaded", () => {
    checkInstagramEmbed();
    checkTwitterEmbed();
    iframeVideoPlugin.init();
});


// OPTIONAL -- a video is inserted to DOM after 2 seconds
// setTimeout(() => {
//     let dynamicEl = document.querySelector('.dynamic-item');
//     dynamicEl.innerHTML = '<h4>YouTube Video -- Dynamically inserted to DOM</h4><iframe width="560" height="315" src="https://www.youtube.com/embed/RK1K2bCg4J8?rel=0&amp;controls=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allowfullscreen></iframe>';
//     iframeVideoPlugin.init(); // re-initilized because a new video is intered to page
// }, 2000);
// end yutup =============================================================================================================================================================


// video.js
var player = document.getElementById("my-video");

function playPause() {
    if (player.paused)
        player.play();
    else
        player.pause();
}

function muteVolume() {
    if (player.muted)
        player.muted = false;
    else
        player.muted = true;
}

// button
$(".animation").click(function(){
    $("#first").toggleClass("pause play");
    $("#second").toggleClass("pause play");
});
$(".dynamic").click(function(){
    $("#vol-one").toggleClass("on off");
    $("#vol-two").toggleClass("on off");
});

const listLength = 5;

$('.show-more-link').each(function(element) {
    var muncul = $(this);
    if ($(this).prev().children().length < listLength) {
    $(this).hide();
    }
    else if ($(this).prev().children().length == listLength){
    $(this).stopPropagation();
    }
});

$('.show-more-link').on('click', function(e) {
    $(this).parent().toggleClass('list--show-hidden list--show-all');
    let text = $(this).text();
    $(this).text(text == "Tampilkan lebih sedikit..." ? "Tampilkan lebih banyak..." : "Tampilkan lebih sedikit...");
})

$('.list--show-all').on('click', function(e){
    e.stopPropagation();
})

// video.js
var player = document.getElementById("my-video");

function playPause() {
    if (player.paused){
        player.play();
        $('#videojs-btn').attr('src','frontend/img/ico/videobtn/resume-default.png');
        $('#videojs-btn').hover(
            function () {
                // over
                $('#videojs-btn').attr('src','frontend/img/ico/videobtn/resume-active.png');
            }, function () {
                // out
                $('#videojs-btn').attr('src','frontend/img/ico/videobtn/resume-default.png');
            }
        );
    }   
    else{
        player.pause();
        $('#videojs-btn').attr('src','frontend/img/ico/videobtn/pause-default.png');
        $('#videojs-btn').hover(
            function () {
                // over
                $('#videojs-btn').attr('src','frontend/img/ico/videobtn/pause-active.png');
            }, function () {
                // out
                $('#videojs-btn').attr('src','frontend/img/ico/videobtn/pause-default.png');
            }
        );
    }
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

function chatToggle() {
    var chat = document.getElementById("chatNih");
    var faq = document.getElementById("FAQnih");
    if (chat.style.display === "none") {
        chat.style.display = "block";
        faq.style.display = "none";
    } else {
        chat.style.display = "none";
        faq.style.display = "block";
    }
}
