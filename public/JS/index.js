document.getElementById('instagram_icon').onmouseover = function () {
    instagram_tab.classList.remove("hidden");
    tiktok_tab.classList.add("hidden");
}
document.getElementById('instagram_tab').onmouseout = function () {
    instagram_tab.classList.add("hidden");
}

document.getElementById('tiktok_icon').onmouseover = function () {
    tiktok_tab.classList.remove("hidden");
    instagram_tab.classList.add("hidden");
}

document.getElementById('tiktok_tab').onmouseout = function () {
    tiktok_tab.classList.add("hidden");
}



function burger() {
    let page_links_check = document.getElementById('page_links');
    let social_links = document.getElementById('social_links').classList;
    let page_links = document.getElementById('page_links').classList;
    if (page_links_check.classList.contains('visible')) {
        page_links.remove('visible');
        social_links.remove('show');
    } else {
        page_links.add('visible');
        social_links.add('show');
    }
}

document.addEventListener("DOMContentLoaded", function () {

    var slides = 0;

    function carousel() {
        let x = document.getElementsByClassName('picture');
        for (let i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }

        slides++;
        if (slides > x.length) {
            slides = 1;
        }

        x[slides - 1].style.display = "block";
        setTimeout(carousel, 4000);
    }

    carousel();
});

document.addEventListener("DOMContentLoaded", function () {
    const slideInElements = document.querySelectorAll(".genre_discription");
    slideInElements.forEach(function (element) {
        element.classList.add("active");
    });

});
