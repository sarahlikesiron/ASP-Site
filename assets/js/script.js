// function to show the rest of the data on the timeline
function expandData(id) {
    var x = document.getElementById(id);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

// function to toggle the hamburger menu
function turnHamb() {
    var nav = document.getElementById('topnav');
    if (nav.className === "topnav") {
        nav.className += " responsive";
    } else {
        nav.className = "topnav";
    }
}

// section to add functions to control a slideshow of images
var images = ['http://serenity.ist.rit.edu/~sli8695/240/final/assets/images/thunderrocks1.JPG', 'http://serenity.ist.rit.edu/~sli8695/240/final/assets/images/quakermuseum.JPG', 'http://serenity.ist.rit.edu/~sli8695/240/final/assets/images/stepshike.JPG', 'http://serenity.ist.rit.edu/~sli8695/240/final/assets/images/wetlandobservation.JPG', 'http://serenity.ist.rit.edu/~sli8695/240/final/assets/images/beavers.JPG', 'http://serenity.ist.rit.edu/~sli8695/240/final/assets/images/amphitheater.JPG'];
var imageIndex = 0;
showImages(imageIndex);

// function to control the next/previous buttons
function changeImage(n) {
    showImages(imageIndex += n);
}

// function to control the thumbnail image
function showImages(n) {
    
    if (n > images.length - 1) {
        imageIndex = 0;
    }
    if (n < 0) {
        imageIndex = images.length - 1;
    }
    
    document.getElementsByClassName("parallax")[0].style.backgroundImage = "url('" + images[imageIndex] + "')";
}