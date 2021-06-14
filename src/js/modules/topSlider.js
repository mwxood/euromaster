const topSlider = () => {
    const slider = document.querySelector('#top-slider');

    try {
        new Splide( slider, {
            type   : 'loop',
            perPage: 1,
            drag   : false,
            navigation: false,
            pagination: false
        } ).mount();
    } catch(e) {}

   
};

export default topSlider;