console.log("Arohan Health Care JS Loaded!");

// Alert for modern browsers only
if (window.addEventListener) {
    alert("Welcome to Arohan Health Care!");
}

// Lazy-load additional images
document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = document.querySelectorAll("img.lazy");

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function(entries, observer) {
            for (var i = 0; i < entries.length; i++) {
                if (entries[i].isIntersecting) {
                    var img = entries[i].target;
                    img.src = img.getAttribute('data-src') || img.src;
                    img.className = img.className.replace('lazy','');
                    observer.unobserve(img);
                }
            }
        });

        for (var j = 0; j < lazyImages.length; j++) {
            observer.observe(lazyImages[j]);
        }
    } else {
        // Fallback for IE11
        for (var k = 0; k < lazyImages.length; k++) {
            var img = lazyImages[k];
            img.src = img.getAttribute('data-src') || img.src;
            img.className = img.className.replace('lazy','');
        }
    }
});
