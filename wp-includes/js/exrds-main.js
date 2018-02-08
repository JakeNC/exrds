jQuery(document).ready(function(){

    jQuery("#dive-down").on('click', function(e) {
        console.log(this.hash);
        e.preventDefault();
        jQuery('html,body').animate({
            scrollTop: jQuery("#main").offset().top
        }, 800, 'linear');
    });

    console.log(screen.width);

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {


    } else {
        // make some waves.
        var ocean = document.getElementById("ocean"),
            waveWidth = 16,
            waveCount = Math.floor(screen.width/waveWidth),
            docFrag = document.createDocumentFragment();
        for(var i = 0; i < waveCount; i++){
            var wave = document.createElement("div");
            wave.className += " wave";
            docFrag.appendChild(wave);
            wave.style.left = i * waveWidth + "px";
            wave.style.webkitAnimationDelay = (i/100) + "s";

            var wave_middle = document.createElement("div");
            wave_middle.className += " wave_middle";
            docFrag.appendChild(wave_middle);
            wave_middle.style.left = i * waveWidth + "px";
            wave_middle.style.webkitAnimationDelay = (i/91) + "s";

            var wave_bottom = document.createElement("div");
            wave_bottom.className += " wave_bottom";
            docFrag.appendChild(wave_bottom);
            wave_bottom.style.left = i * waveWidth + "px";
            wave_bottom.style.webkitAnimationDelay = (i/97) + "s";

            var wave_light = document.createElement("div");
            wave_light.className += " wave_light";
            docFrag.appendChild(wave_light);
            wave_light.style.left = i * waveWidth + "px";
            wave_light.style.webkitAnimationDelay = 0 + "s";

        }
        ocean.appendChild(docFrag);
    }





    var fadeStart = 0;
    var fadeUntil = (jQuery(window).height() / 2);


    jQuery(window).bind('scroll', function(){
        var offset = jQuery(document).scrollTop();
        var opacity=0;

        if (offset <= fadeStart){
            opacity=1;
        } else if (offset <= fadeUntil){
            opacity = 1 - offset / fadeUntil;
        }

        jQuery('#fading').css('opacity',opacity);
    });
});