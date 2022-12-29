const sliders = $('.slider_container');
const slider = $('.slider')
const nextBtn = $('.button-right');
const prevBtn = $('.button-left');

const size = slider[0].clientWidth;

let index=0;

let sliderInterval;
runSlider();

nextBtn.click(() => {
    clearInterval(sliderInterval);
    index++;
    if(index < sliders.length){
        changeSlide(index);
    }else{
        index = 0;
        changeSlide(index);
    }
    runSlider();
});

prevBtn.click(() => {
    clearInterval(sliderInterval);
    index--;
    if(index >= 0 ){
        changeSlide(index);
    }else{
        index = sliders.length - 1;
        changeSlide(index);
    }
    runSlider();
});

function changeSlide(index){
    sliders.map((i) => {
        if(i == index){
            slider.css({'transform':`translateX(-${index*size}px)`});
        }
    });
}
function runSlider(){
    sliderInterval = setInterval(function(){
        changeSlide(index++);
        if(index > sliders.length - 1) index = 0;
    },3000);
}