// View
const View = { 
    Data: {
        render(data){
            data.map(v => {
                $(".community-list")
                    .append(`<div class="community-item">
                                <div class="item-image" style="background-image: url('/customer/assets/images/group-bg.png');">
                                    <div class="item-logo" style="background-image: url('${v.image}');"> </div>
                                </div>
                                <div class="item-description-wrapper">
                                    <div class="item-title">
                                        ${v.name}
                                    </div>
                                    <div class="item-description">
                                        ${v.description}
                                    </div>
                                    <div class="item-social">
                                        <div class="social-item">
                                            <div class="social-image">
                                                <i class="fab fa-facebook-square" style="color: #0050B3;"></i>
                                            </div>
                                            <a href="${v.facebook}" target="_blank" class="social-url">
                                                ${v.facebook}
                                            </a>
                                        </div>
                                        <div class="social-item">
                                            <div class="social-image">
                                                <i class="fab fa-google-plus-square" style="color: #CF1322;"></i>
                                            </div>
                                            <a href="${v.google}" target="_blank"  class="social-url">
                                                ${v.google}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>`)
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
        getData();  
    }

    function getData(){
        Api.Community.GetAll()
            .done(res => {
                View.Data.render(res.data);
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }

    init();
     
})();