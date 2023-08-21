// View
const View = {
    Executive: {
        render(data){
            data.map(v => {
                $('.executive-list')
                    .append(`<div class="executive-item">
                            <div class="item-title-wrapper">
                                <div class="item-image-wrapper">
                                    <div class="item-image">
                                        <img src="/${v.image}" alt="">
                                    </div>
                                </div>
                                <div class="item-position">
                                    ${v.position}
                                </div>
                                <div class="item-name">
                                    ${v.name}
                                </div>
                                <div class="item-description">
                                    ${v.description}
                                </div>
                            </div>      
                        </div> `)
            })

            $('#carousel-executive.owl-carousel').owlCarousel({
                loop: true, 
                responsiveClass:true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause:false,
                responsive:{
                    0:{
                        items: 1,
                        margin: 20, 
                        nav:true
                    },
                    550:{
                        items: 2,
                        margin: 15, 
                        nav:true, 
                    },
                    850:{
                        items: 3,
                        margin: 20, 
                        nav:true, 
                    },
                    1440:{
                        items: 4,
                        margin: 30, 
                        nav:true, 
                    },
                    1600:{
                        items: 4,
                        margin: 40, 
                        nav:true, 
                    }
                }
            })
        }
    },  
    init(){ 
    }
};
// Controller
(() => { 
    View.init()

    function init(){
        getExecutive(); 
    }
    
    function getExecutive(){
        Api.Executive.GetAll()
            .done(res => {
                View.Executive.render(res.data)
            })
            .fail(err => {  })
            .always(() => { });
    } 

    init();
     
})();