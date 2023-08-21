// View
const View = {
    Testimonials: {
        render(data){
            data.map(v => {
                $('.testimonials-list')
                    .append(`<div class="testimonials-item">
                                <div class="item-avatar">
                                    <div class="avatar-wrapper" style="background-image: url('/${v.image}')"></div>
                                </div>
                                <div class="item-name">${v.name}</div>
                                <div class="item-description">${v.position}</div>
                                <div class="item-detail">${v.comment}</div>
                            </div>`)
            })

            $('#carousel-testimonials.owl-carousel').owlCarousel({
                loop: true, 
                responsiveClass:true,
                autoplay: true,
                autoplayTimeout: 5000,
                margin: 40,
                stagePadding: 20,
                autoplayHoverPause:false,
                responsive:{
                    0:{
                        items: 1,
                        nav:true
                    },
                    600:{
                        items: 2,
                        nav:false,
                        margin: 20,
                    },
                    890:{
                        items: 3,
                        nav:false,
                        margin: 20,
                    },
                    1000:{
                        items: 3,
                        nav:true, 
                        margin: 40,
                    }
                }
            })
        }
    },
    Event: {
        render(data){
            data.map(v => { 
                $(".news-item-list .news-item").remove();
                data.map(v =>{
                    $(".news-item-list")
                        .append(`<div class="news-item">
                                    <div class="news-block">
                                        <div class="news-image" style="background-image: url('/${v.image}');"></div>
                                        <div class="news-date">${v.created_at}</div>
                                        <div class="news-title">${v.name}</div>
                                        <div class="news-description">${v.description}</div>
                                        <a href="/news-detail/${v.id}" class="news-link">Xem thêm</a>
                                    </div>
                                </div>`)
                    }) 
            })
            // $('#carousel-event.owl-carousel').owlCarousel({
            //     loop: true, 
            //     responsiveClass:true,
            //     autoplay: true,
            //     autoplayTimeout: 5000,
            //     margin: 40,
            //     stagePadding: 20,
            //     autoplayHoverPause:false,
            //     responsive:{
            //         0:{
            //             items: 1,
            //             nav:true
            //         },
            //         600:{
            //             items: 2,
            //             nav:false,
            //             margin: 20,
            //         },
            //         890:{
            //             items: 3,
            //             nav:false,
            //             margin: 20,
            //         },
            //         1000:{
            //             items: 4,
            //             nav:true, 
            //             margin: 40,
            //         }
            //     }
            // })
        }
    },
    Partner: {
        render(data){
            data.map(v => {
                $('.adv-list')
                    .append(`<div class="adv-item">
                                <div class="item-adv" style="background-image: url('/${v.image}');">
                                    
                                </div>
                            </div>`)
            })
            $('#carousel-adv.owl-carousel').owlCarousel({
                loop: true, 
                responsiveClass:true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause:false,
                responsive:{
                    0:{
                        items: 2,
                        margin: 20, 
                        nav:true
                    },
                    600:{
                        items: 4,
                        margin: 40, 
                        nav:false
                    },
                    1000:{
                        items: 6,
                        margin: 80, 
                        nav:true, 
                    }
                }
            })
        }
    },
    formData: {
        validateEmail(email){
            return email.match( /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ );
        },
        isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        },
        setDefaul(resource){
            $(resource).find('.data-name').val("")
            $(resource).find('.data-email').val("")
            $(resource).find('.data-phone').val("")
            $(resource).find('.data-message').val("")
        },
        getVal(resource){ 
            var fd = new FormData();
            var required_data = [];
            var onPushData = true;
            const regex = /(<([^>]+)>)/ig;

            
            var data_name       = $(resource).find('.data-name').val().replace(regex, "");
            var data_email      = $(resource).find('.data-email').val().replace(regex, "");
            var data_phone      = $(resource).find('.data-phone').val().replace(regex, "");
            var data_message    = $(resource).find('.data-message').val().replace(regex, "");

            if (data_name == '') { required_data.push('Name is required.'); onPushData = false }
            if (data_message == '') { required_data.push('Message is required.'); onPushData = false }
            if (data_phone == '') { required_data.push('Phone is required.'); onPushData = false }
            if (View.formData.validateEmail(data_email) == null) { 
                if (data_email == '') { 
                    required_data.push('Email is required.'); onPushData = false 
                }else{
                    required_data.push('Email is invalid.'); onPushData = false 
                }
            }

            $(resource).find('.error-log .js-errors').remove();
            if (onPushData) {

                fd.append('data_name', data_name);
                fd.append('data_email', data_email);
                fd.append('data_phone', data_phone);
                fd.append('data_message', data_message);

                return fd;
            }else{
                var required_noti = ``;
                for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                $(resource).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                return false;
            }
        },
        onPush(name, callback){
            $(document).on('click', `.form-submit`, function() {
                if($(this).attr('atr').trim() == name) {
                    callback();
                }
            });
        },
        init(){
            $(document).on('keypress', `.data-phone`, function(event) {
                return IndexView.formData.isNumberKey(event);
            });
        }
    }, 
    init(){

    }
};
// Controller
(() => { 
    View.init()

    function init(){
        getTestimonials();
        getEvent();
        getPartner();
    }
    
    function getTestimonials(){
        Api.Testimonials.GetAll()
            .done(res => {
                View.Testimonials.render(res.data)
            })
            .fail(err => {  })
            .always(() => { });
    }
    
    function getEvent(){
        Api.Event.GetAll()
            .done(res => {
                View.Event.render(res.data) 
            })
            .fail(err => {  })
            .always(() => { });
    }
    
    function getPartner(){
        Api.Partner.GetAll()
            .done(res => {
                View.Partner.render(res.data) 
            })
            .fail(err => {  })
            .always(() => { });
    }

    View.formData.onPush("Send", () => {
        var fd = View.formData.getVal("#form-contact");
        if (fd) { 
            Api.Message.Create(fd)
                .done(res => { 
                    View.formData.setDefaul("#form-contact");
                    $('.error-log').prepend(` <ul class="js-success"><li class="success">Sending message successful</li></ul> `)
                })
                .fail(err => {   })
                .always(() => { });
        }
    })

    init();
    
    window.onload = function () {
    var $cards = $(".I-banner .image-prev"); 
    $cards.
        on("mousemove touchmove", function (e) {
          var pos = [e.offsetX, e.offsetY];
          e.preventDefault();
          if (e.type === "touchmove") {
            pos = [e.touches[0].clientX, e.touches[0].clientY];
          }
          var $card = $(this);
          // math for mouse position
          var l = pos[0];
          var t = pos[1];
          var h = $card.height();
          var w = $card.width();
          var px = Math.abs(Math.floor(100 / w * l) - 100);
          var py = Math.abs(Math.floor(100 / h * t) - 100);
          var pa = 50 - px + (50 - py);

          var lp = 50 + (px - 50) / 1.5;
          var tp = 50 + (py - 50) / 1.5;
          var px_spark = 50 + (px - 50) / 7;
          var py_spark = 50 + (py - 50) / 7;
          var p_opc = 20 + Math.abs(pa) * 1.5;
          var ty = (tp - 50) / 2 * -1;
          var tx = (lp - 50) / 1.5 * .5;

          var grad_pos = `background-position: ${lp}% ${tp}%;`;
          var sprk_pos = `background-position: ${px_spark}% ${py_spark}%;`;
          var opc = `opacity: ${p_opc / 100};`;
          var tf = `transform: rotateX(${ty}deg) rotateY(${tx}deg)`;

          $cards.removeClass("active"); 
          $card.attr("style", tf); 
          if (e.type === "touchmove") {
            return false;
          } 
        })
        .on("mouseout touchend touchcancel", function () {
          var $card = $(this); 
          $card.removeAttr("style"); 
        });
    }; 
})();