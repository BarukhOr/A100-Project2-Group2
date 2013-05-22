$(document).ready(function(){
    /* The following code is executed once the DOM is loaded */

    $('.profileFlip').bind("click",function(){

        // $(this) point to the clicked .profileFlip element (caching it in elem for speed):

        var elem = $(this);

        // data('flipped') is a flag we set when we flip the element:

        if(elem.data('flipped'))
        {
            // If the element has already been flipped, use the revertFlip method
            // defined by the plug-in to revert to the default state automatically:

            elem.revertFlip();

            // Unsetting the flag:
            elem.data('flipped',false)
        }
        else
        {
            // Using the flip method defined by the plugin:

            elem.flip({
                direction:'lr',
                speed: 350,
                onBefore: function(){
                    // Insert the contents of the .profileData div (hidden
                    // from view with display:none) into the clicked
                    // .profileFlip div before the flipping animation starts:

                    elem.html(elem.siblings('.profileData').html());
                }
            });

            // Setting the flag:
            elem.data('flipped',true);
        }
    });

    $(".profileFlip").hoverIntent(flipOver, flipBack);
});

    
function flipOver(){
    elem.flip({
                direction:'lr',
                speed: 350,
                onBefore: function(){
                    // Insert the contents of the .profileData div (hidden
                    // from view with display:none) into the clicked
                    // .profileFlip div before the flipping animation starts:

                    elem.html(elem.siblings('.profileData').html());
                }
            });

            // Setting the flag:
            elem.data('flipped',true);
}

function flipBack(){
    elem.revertFlip();

            // Unsetting the flag:
            elem.data('flipped',false)

}