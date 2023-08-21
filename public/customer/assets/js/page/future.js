// View
const View = {
    Category: {
        render(data){
            data.map(v => {
                $(".category-list")
                    .append(`<div class="category-item">
                                <a href="/future?category=${v.id}">${v.name}</a>
                                <div class="item-count">${v.count}</div>
                            </div>`)
            })
        }
    },
    Data: {
        render(data){
            data.map(v => {
                $(".list-item")
                    .append(`<div class="item-wrapper">
                                <a href="/future-detail/${v.slug}" class="item-image" style="background-image: url('/customer/assets/images/uavs.png');"></a>
                                <div class="item-description-wrapper">
                                    <a href="/future-detail/${v.slug}" class="item-title">
                                        ${v.name}
                                    </a>
                                    <div class="item-time">
                                        ${v.created_at}
                                    </div>
                                    <div class="item-description">
                                        ${v.description}
                                    </div>
                                    <a href="/future-detail/${v.slug}" class="item-view">Xem thêm <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>`)
            })
        }
    },
    formSearch: {
        getVal(){
            const regex = /(<([^>]+)>)/ig;
            return $('.data-search').val().replace(regex, "")
        },
        onPush(callback){
            $(document).on('click', `.search-action`, function() {
                callback();
            });
        }, 
    }, 
    URL: {
        get(id){
            var urlParam    = new URLSearchParams(window.location.search);
            return urlParam.get(id)
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
        getCategoryData(); 
    }

    View.formSearch.onPush(() => {
        window.location.href = `/future?word=${View.formSearch.getVal()}`
    })
    
    
    function getData(){
        Api.Future.GetAll(View.URL.get("word"),View.URL.get("category"))
            .done(res => {
                View.Data.render(res.data);
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
    function getCategoryData(){
        Api.FutureCategory.GetAll()
            .done(res => {
                View.Category.data = res.data.category;
                View.Category.render(res.data.category, res.data.count);
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }

    init();
     
})();