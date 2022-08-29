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
    spaceBetween: 30
})
