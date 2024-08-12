function start() {
    var rotate = document.getElementById("rotate"); 
    var images = ['me.jpg', 'Me2.jpg']; 
    var num = 0;

    var changeImage = function(direction) {
        num = (num + direction + images.length) % images.length; 
        rotate.src = images[num];
    };

    
    var nextItem = document.getElementById('Next');
    var previousItem = document.getElementById('Back')
    
    nextItem.addEventListener('click', function() {
        changeImage(1) ;
    });

    previousItem.addEventListener('click', function() {
        changeImage(-1);
    });
}

window.onload = function() {
    start();
};