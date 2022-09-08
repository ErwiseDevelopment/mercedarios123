// /* services */
// const swiperServices = new Swiper('.swiper-container-services', {
//     pagination: {
//         el: '.swiper-pagination-services',
//     },
// });

// /* services */
// const swiperServices = new Swiper('.swiper-container-services', {
//     pagination: {
//         el: '.swiper-pagination-services',
//     },
// });

// /* testemonials */
// const swiperTestemonials = new Swiper('.swiper-container-testemonials', {
//     navigation: {
//         nextEl: '.swiper-button-next-testemonials',
//         prevEl: '.swiper-button-prev-testemonials',
//     },

//     pagination: {
//         el: '.swiper-pagination-testemonials',
//     },
// });

/* banner materials */
const swiperBannerMaterials = new Swiper( '.js-swiper-banner-materials', {
    loop: true,
    
    autoplay: {
        delay: 6000,
        disableOnInteraction: false
    }
})

/* blogs */
const swiperBlogs = new Swiper( '.js-swiper-blogs', {
    slidesPerView: 3,
    spaceBetween: 30,

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 30
        },

        768: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-blogs',
        nextEl: '.js-swiper-button-next-blogs'
    },

    pagination: {
        el: '.js-swiper-pagination-blogs'
    }
})

//calendar
const swiperMonths = new Swiper( '.js-swiper-months', {
    slidesPerView: 2,
    spaceBetween: 30,
    allowTouchMove: false,

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 30,
            allowTouchMove: true,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 30,
            allowTouchMove: false,
        }
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-months',
        nextEl: '.js-swiper-button-next-months'
    },
})

const swiperCalendar = new Swiper( '.js-swiper-calendar', {
    slidesPerView: 2,
    spaceBetween: 30,
    allowTouchMove: false,

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 30,
            allowTouchMove: true,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 30,
            allowTouchMove: false,
        }
    },
    
    navigation: {
        prevEl: '.js-swiper-button-prev-months',
        nextEl: '.js-swiper-button-next-months'
    },
})

/* editorial news */
const swiperEditorialNews = new Swiper( '.js-swiper-editorial-news', {
    slidesPerView: 4,
    spaceBetween: 30,

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 30
        },

        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },

        992: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-editorial-news',
        nextEl: '.js-swiper-button-next-editorial-news'
    }
})

const swiperOurConstruction = new Swiper( '.js-swiper-our-construction', {
    slidesPerView: 3,

    breakpoints: {
        320: {
            slidesPerView: 1,
        },

        768: {
            slidesPerView: 2,
        },

        992: {
            slidesPerView: 3,
        }
    },

    autoplay: {
        delay: 6000,
        disableOnInteraction: false
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-our-construction',
        nextEl: '.js-swiper-button-next-our-construction'
    }
})