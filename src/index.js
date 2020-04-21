import './scss/new.scss';

$(document).ready(()=>{

    $('.menu-img').click(()=>{
        $('.menu-and-contacts').slideToggle()
    })
    $('.main-slider').slick({
        dots:true,
        appendArrows: '.main-slider__arrows',
        appendDots: '.main-slider__dots',
        prevArrow:'<p class="main-slider__arrow"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.56397 7.49961L8.33822 0.725363C8.50482 0.558757 8.50482 0.29156 8.33822 0.124954C8.17161 -0.0416514 7.90442 -0.0416514 7.73781 0.124954L0.661789 7.20097C0.495183 7.36758 0.495183 7.63478 0.661789 7.80138L7.73781 14.8743C7.81954 14.956 7.92956 15 8.03644 15C8.14332 15 8.25335 14.9591 8.33508 14.8743C8.50168 14.7077 8.50168 14.4405 8.33508 14.2739L1.56397 7.49961Z" fill="white"/></svg></p>',
        nextArrow:'<p class="main-slider__arrow"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.43599 7.50039L0.661751 14.2746C0.495145 14.4412 0.495145 14.7084 0.661751 14.875C0.828356 15.0417 1.09555 15.0417 1.26216 14.875L8.33818 7.79903C8.50479 7.63242 8.50479 7.36522 8.33818 7.19862L1.26216 0.125741C1.18043 0.0440098 1.0704 6.46293e-07 0.963525 6.55637e-07C0.856646 6.6498e-07 0.746623 0.0408666 0.664892 0.125741C0.498287 0.292346 0.498287 0.559543 0.664892 0.726148L7.43599 7.50039Z" fill="white"/></svg></p>'
    })
    $('.clients__slider').slick({
        dots:true,
        slidesToShow:4,
        slidesToScroll:4,
        appendArrows: '.clients__slider-arrows',
        appendDots: '.clients__slider-dots',
        prevArrow:'<p class="clients__slider-arrow"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.56397 7.49961L8.33822 0.725363C8.50482 0.558757 8.50482 0.29156 8.33822 0.124954C8.17161 -0.0416514 7.90442 -0.0416514 7.73781 0.124954L0.661789 7.20097C0.495183 7.36758 0.495183 7.63478 0.661789 7.80138L7.73781 14.8743C7.81954 14.956 7.92956 15 8.03644 15C8.14332 15 8.25335 14.9591 8.33508 14.8743C8.50168 14.7077 8.50168 14.4405 8.33508 14.2739L1.56397 7.49961Z" fill="white"/></svg></p>',
        nextArrow:'<p class="clients__slider-arrow"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.43599 7.50039L0.661751 14.2746C0.495145 14.4412 0.495145 14.7084 0.661751 14.875C0.828356 15.0417 1.09555 15.0417 1.26216 14.875L8.33818 7.79903C8.50479 7.63242 8.50479 7.36522 8.33818 7.19862L1.26216 0.125741C1.18043 0.0440098 1.0704 6.46293e-07 0.963525 6.55637e-07C0.856646 6.6498e-07 0.746623 0.0408666 0.664892 0.125741C0.498287 0.292346 0.498287 0.559543 0.664892 0.726148L7.43599 7.50039Z" fill="white"/></svg></p>',
        responsive:[
            {
                breakpoint:992,
                settings:{
                    slidesToScroll:2,
                    slidesToShow:2
                }
            },
            {
                breakpoint:460,
                settings:{
                    slidesToScroll:1,
                    slidesToShow:1
                }
            }

        ]
    })
    $('.feedback__slider').slick({
        dots:true,
        appendArrows: '.feedback-slider__arrows',
        appendDots: '.feedback-slider__dots',
        prevArrow:'<p class="feedback__slider-arrow"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.56397 7.49961L8.33822 0.725363C8.50482 0.558757 8.50482 0.29156 8.33822 0.124954C8.17161 -0.0416514 7.90442 -0.0416514 7.73781 0.124954L0.661789 7.20097C0.495183 7.36758 0.495183 7.63478 0.661789 7.80138L7.73781 14.8743C7.81954 14.956 7.92956 15 8.03644 15C8.14332 15 8.25335 14.9591 8.33508 14.8743C8.50168 14.7077 8.50168 14.4405 8.33508 14.2739L1.56397 7.49961Z" fill="white"/></svg></p>',
        nextArrow:'<p class="feedback__slider-arrow"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.43599 7.50039L0.661751 14.2746C0.495145 14.4412 0.495145 14.7084 0.661751 14.875C0.828356 15.0417 1.09555 15.0417 1.26216 14.875L8.33818 7.79903C8.50479 7.63242 8.50479 7.36522 8.33818 7.19862L1.26216 0.125741C1.18043 0.0440098 1.0704 6.46293e-07 0.963525 6.55637e-07C0.856646 6.6498e-07 0.746623 0.0408666 0.664892 0.125741C0.498287 0.292346 0.498287 0.559543 0.664892 0.726148L7.43599 7.50039Z" fill="white"/></svg></p>'
    })
})