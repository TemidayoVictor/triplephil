
let navbar = document.querySelector('.header .navbar');
let contactInfo = document.querySelector('.contact-info');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    contactInfo.classList.remove('active');
}

document.querySelector('#info-btn').onclick = () =>{
    contactInfo.classList.add('active');
    navbar.classList.remove('active');
}

document.querySelector('#close-contact-info').onclick = () =>{
    contactInfo.classList.remove('active');
    navbar.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    contactInfo.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    loop:true,
    grabCursor:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop:true,
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".logo-slider", {
    loop:true,
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
        450: {
            slidesPerView: 3,
        },
        640: {
            slidesPerView: 4,
        },
        768: {
            slidesPerView: 5,
        },
        1000: {
            slidesPerView: 5,
        },
    },
});

var swiper = new Swiper(".food-slider", {
    loop:true,
    grabCursor:true,
    centeredSlides:true,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable:true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        700: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
    },
});


let previewContainer = document.querySelector('.event-preview-container');
let previewBox = document.querySelectorAll('.event-preview');

document.querySelectorAll('.events .slide').forEach(food =>{
    food.onclick = () => {
        previewContainer.style.display = 'flex';
        let name = food.getAttribute('data-name');
        previewBox.forEach(preview =>{
            let target = preview.getAttribute('data-target');
            if(name == target) {
                preview.classList.add('active');
            }
        });
    };
});

previewContainer.querySelector('#close-preview').onclick = () =>{
    previewContainer.style.display = 'none';
    previewBox.forEach(close =>{
        close.classList.add('active');
    });
} 