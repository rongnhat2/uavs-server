const View = {
    Message: {
        renderDetail(data){
            $('.data-name').html(data.name)
            $('.data-email').html(data.email)
            $('.data-message').html(data.message)
        },
        render(data){
            data.map(v => {
                $(".mail-list-wrapper")
                    .append(`<div class="mail-list" message-id="1">
                                <table class="table list-info">
                                    <tbody>
                                    <tr>
                                        <td class="list-sender">
                                            <div class="media align-items-center"> 
                                                <h6 class="m-l-10 m-b-0">${v.name}</h6>
                                            </div>
                                        </td>
                                        <td class="list-content">
                                            <div class="list-msg">
                                                <span class="list-title">${v.email}</span>
                                                <span class="m-h-5 d-none d-lg-inline-block"> - </span>
                                                <span class="list-text text-gray">${v.phone} </span>
                                            </div>
                                        </td>
                                        <td class="list-date">
                                            <span>${v.created_at}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>`)
            })
        },
        onOpen(callback){
            $(document).on('click', `.mail-list`, function() {
                $('#mail-list').addClass('d-none')
                $('#mail-content').removeClass('d-none')
                callback($(this).attr("message-id"));
            }); 
        },
        onClose(){
            $(document).on('click', `.back-message-list`, function() {
                $('#mail-content').addClass('d-none')
                $('#mail-list').removeClass('d-none')
            });
        }
    },
    init(){

    }
};
(() => {
    View.init();
    function init(){
        getData();
    }

    View.Message.onOpen((id) => {
        Api.Message.getOne(id)
            .done(res => {
                View.Message.renderDetail(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })
    View.Message.onClose(() => {
        
    })
 

    function getData(){
        Api.Message.GetAll()
            .done(res => {
                View.Message.render(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
    
    function debounce(f, timeout) {
        let isLock = false;
        let timeoutID = null;
        return function(item) {
            if(!isLock) {
                f(item);
                isLock = true;
            }
            clearTimeout(timeoutID);
            timeoutID = setTimeout(function() {
                isLock = false;
            }, timeout);
        }
    }
    init();
})();
