document.getElementById('menu-hamburger-button').addEventListener('click', function() {
var texts = document.querySelectorAll('.menu-chapter-text-js');
texts.forEach(function(text) {
    if (text.style.display === "none") {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
    });
});


$('.owl-carousel').owlCarousel({
    margin: 10,            
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 4
        },
        1000: {
            items: 4
        }
    }
});
