// View
const View = {
    Category: {
        render(data){
            data.map(v => {
                $(".category-list")
                    .append(`<div class="category-item">
                                <a href="/current?category=${v.id}">${v.name}</a>
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
                                <a href="/current-detail/${v.slug}" class="item-image" style="background-image: url('/${v.image}');"></a>
                                <div class="item-description-wrapper">
                                    <a href="/current-detail/${v.slug}" class="item-title">
                                        ${v.name}
                                    </a>
                                    <div class="item-time">
                                        ${v.created_at}
                                    </div>
                                    <div class="item-description">
                                        ${v.description}
                                    </div>
                                    <a href="/current-detail/${v.slug}" class="item-view">Xem thêm <i class="fas fa-chevron-right"></i></a>
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
        window.location.href = `/current?word=${View.formSearch.getVal()}`
    })
    
    
    function getData(){
        Api.Current.GetAll(View.URL.get("word"),View.URL.get("category"))
            .done(res => {
                View.Data.render(res.data);
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
    function getCategoryData(){
        Api.CurrentCategory.GetAll()
            .done(res => {
                View.Category.data = res.data.category;
                View.Category.render(res.data.category, res.data.count);
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }

    init();
     
})();