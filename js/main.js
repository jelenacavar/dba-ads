jQuery(document).ready(function(){
    init();
});

function init()
{
    var annesofieModal1 = document.getElementById("annesofie-first-modal");
    var kristianModal1 = document.getElementById("kristian-first-modal");
    var annesofieCta = document.getElementById("annesofie-cta");
    var kristianCta = document.getElementById("kristian-cta");

    if(annesofieModal1)
    {
        annesofieModal1.onclick = function(){
            forcePlayVideo("annesofie-video1");
            forcePlayVideo("annesofie-video2");    
        };
    }

    if(kristianModal1)
    {
        kristianModal1.onclick = function(){
            forcePlayVideo("kristian-video1");
            forcePlayVideo("kristian-video2");    
        };
    }

    if(annesofieCta)
    {
        annesofieCta.onclick = function(){
            displayText(["annesofie-cta-text1", "annesofie-cta-text2"], "annesofie-cta-button");
        }
    }
    
    if(kristianCta)
    {
        kristianCta.onclick = function()
        {
            displayText(["kristian-cta-text1", "kristian-cta-text2"], "kristian-cta-button");
        }
    }
    
    function forcePlayVideo(id)
    {
        var video = document.getElementById(id);
        if(video && video.paused)
        {
            video.play();
        }
    }

    function displayText(textIds, buttonId)
    {    
        var text1 = document.getElementById(textIds[0]);
        var text2 = document.getElementById(textIds[1]);
        var button = document.getElementById(buttonId);
        if(text1 && text2 && button)
        {
            if(text1.style.display == "none")            
            {
                text1.style.display = "inline-block";
                text2.style.display = "inline-block";
                button.style.display = "none";
            } 
            else
            {
                text1.style.display = "none";
                text2.style.display = "none";
                button.style.display = "inline-block";
            }
        }
    }
}
