// View
const IndexView = {  
    Information: {
        render(data){
            let data_json       = JSON.parse(data.home);
            let data_json_about = JSON.parse(data.about);
            $(".image-bg-data").each(function(index, el) {
                let name = $(this).attr("data-image");
                $(this).attr("style", `background-image: url('/${data_json[`${name}`]}')`)
            });
            $(".image-view-data").each(function(index, el) {
                let name = $(this).attr("data-image");
                $(this).attr("src", `/${data_json[`${name}`]}`)
            });
            $(".data-value").each(function(index, el) {
                let name = $(this).attr("data-value-item");
                $(this).html(`${data_json[`${name}`]}`)
            });
            $(".data-link").each(function(index, el) {
                let name = $(this).attr("data-link-item");
                $(this).attr("href", `/${data_json[`${name}`]}`)
            });

            $(".data-image-about").each(function(index, el) {
                let name = $(this).attr("data-image-item");
                $(this).attr("src", `/${data_json_about[`${name}`]}`)
            });
        }
    },
    init(){ 
    }
};
// Controller
(() => {
    IndexView.init(); 
    getInformation();

    
    function getInformation(){
        Api.Information.GetAll()
            .done(res => {
                IndexView.Information.render(res.data);
            })
            .fail(err => {  })
            .always(() => { });
    }
    let page_name = $(".page-name").val();
    $(`[page-name=${page_name}]`).addClass("is-selected")

    var stickyNav = $('body').offset().top;
    window.onscroll = function() {
        window.pageYOffset > stickyNav ? $('header').addClass('is-scroll') : $('header').removeClass('is-scroll');
    }; 


    $(document).on('click', '.nav-control', function() { 
        $(`.header-nav`).toggleClass('is-open'); 
    });
    $(document).mouseup(function(e) {
        var container = $("header");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.header-nav').removeClass('is-open');
        }
    });
})();