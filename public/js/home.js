var sliderTimer = null;

$(document).ready(function() {
    initialAnimations();
    
    dragScroll('.company-list');
})


function initialAnimations() {
    animateBannerSubTextBox();
    sliderTimer = sliderTimerStart();
}


function sliderTimerStart() {
    sliderTimer && clearTimeout(sliderTimer);
    return setTimeout(()=>{
        bannerNext();
    }, 5000)
}


function animateBannerSubTextBox() {
    let cWidth =  $('.banner .sub-text').width();
    let iWidth =  $('.banner .sub-text img').width();
    $('.banner .sub-text img').css('transform', `translateX(${cWidth-iWidth+20}px)`)
}

function bannerNext() {
    let totalBanners = $('.banner-variable-item').length > 0 ? $('.banner-variable-item').last().attr('data-banner') : 0;
    let currentBanner = $('.banner-variable-item.active').length > 0 ? $('.banner-variable-item.active').attr('data-banner') : 0;
    
    $('.banner-variable-item').removeClass('active');
    
    if (currentBanner >= totalBanners) {
        $(`.banner-variable-item[data-banner="${1}"]`).addClass('active');
    } {
        $(`.banner-variable-item[data-banner="${Number(currentBanner)+1}"]`).addClass('active');
    }

    animateBannerSubTextBox();

    sliderTimer = sliderTimerStart();
}


function bannerPrev() {
    let totalBanners = $('.banner-variable-item').length > 0 ? $('.banner-variable-item').last().attr('data-banner') : 0;
    let currentBanner = $('.banner-variable-item.active').length > 0 ? $('.banner-variable-item.active').attr('data-banner') : 0;
    
    $('.banner-variable-item').removeClass('active');
    
    if (currentBanner <= 1) {
        $(`.banner-variable-item[data-banner="${totalBanners}"]`).addClass('active');
    } {
        $(`.banner-variable-item[data-banner="${Number(currentBanner)-1}"]`).addClass('active');
    }

    animateBannerSubTextBox();
    sliderTimer = sliderTimerStart();
}