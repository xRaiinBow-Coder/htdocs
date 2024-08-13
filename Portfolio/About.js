document.getElementById('Hobbies').onclick = function() {
    location.href = "hobbies.php";
}



document.addEventListener('DOMContentLoaded', function() {
    var hobbiesElement = document.getElementById('Hobbies');
    
    var images = [
        "pictures/MinecaftD.png",
        "pictures/Book2.jpg",
        "pictures/Flash.jpg",
    ];

    function setRandomBackgroundImage() {
        var randomImage = images[Math.floor(Math.random() * images.length)];
        hobbiesElement.style.backgroundImage = 'url(' + randomImage + ')';
    }

    hobbiesElement.addEventListener('mouseover', setRandomBackgroundImage);

    hobbiesElement.addEventListener('mouseout', function() {
        hobbiesElement.style.backgroundImage = '';
    });
});