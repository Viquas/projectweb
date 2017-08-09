<?php
?>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/owl.carousel.min.js"></script>
<script>

$(document).ready(function(){

/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
 */
var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
              if(this.elements[i] == 'header'){
                document.getElementById(this.elements[i]).className = "navbar navbar-fixed-top fixed-theme";
              }else if(this.elements[i] == 'main'){
                document.getElementById(this.elements[i]).className = "main-content  main-pad";
              }else {
                document.getElementById(this.elements[i]).className += " fixed-theme";
              }

            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
          if(this.elements[i] == 'header'){
            document.getElementById(this.elements[i]).className = "navbar navbar-collapse";
          }else if(this.elements[i] == 'main'){
            document.getElementById(this.elements[i]).className = "main-content";
          }else {
            document.getElementById(this.elements[i]).className =
                document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
          }
        }
        this.flagAdd = true;
    }

};

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
myNavBar.init([
    "header",
    "header-container",
    "brand",
    "main"
]);

/**
 * Function that manage the direction
 * of the scroll
 */
function offSetManager(){

    var yOffset = 200;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet < yOffset){
        myNavBar.remove();
    }

}

/**
 * bind to the document scroll detection
 */
window.onscroll = function(e) {
    offSetManager();
}

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
offSetManager();
});

$(function() {
	$( ".box" ).draggable();
});
</script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:100,

    responsiveClass:false,
    responsive:{
        0:{
            items:2,

        },
        600:{
            items:3,

        },
        1000:{
            items:5,

            loop:false
        }
    }
})
</script>
