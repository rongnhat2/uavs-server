const View = { 
    Layout: {
        FormCreate: "",
        FormUpdate: "",
        FormDelete: "",
        init(){
            View.Layout.FormCreate = $(".layout-tab-create").html();
            View.Layout.FormUpdate = $(".layout-tab-create").html();
            View.Layout.FormDelete = $(".layout-tab-delete").html();
            $(".layout-tab-create").remove();
            $(".layout-tab-delete").remove();
        }
    },
    Category: {
        onChange(callback){ 
            $(document).on('click', `.category-item`, function() {
                $(".category-item").removeClass("is-selected");
                $(this).addClass("is-selected");
                callback();
            }); 
        },
    },
    FullTab: {   
        Update: { 
            setVal(data){
                var json_data = JSON.parse(data.home);
                $('.data-image-header-1').parent().parent().find('.image-preview').css({ 'background-image': `url('/${json_data.data_image_header_1 ?? 'icon/noimage.png'}')` })
                $('.data-image-header-2').parent().parent().find('.image-preview').css({ 'background-image': `url('/${json_data.data_image_header_2 ?? 'icon/noimage.png'}')` })
                $('.data-image-header-3').parent().parent().find('.image-preview').css({ 'background-image': `url('/${json_data.data_image_header_3 ?? 'icon/noimage.png'}')` })
                $('.data-image-header-4').parent().parent().find('.image-preview').css({ 'background-image': `url('/${json_data.data_image_header_4 ?? 'icon/noimage.png'}')` })
                $('.data-image-about').parent().parent().find('.image-preview').css({ 'background-image': `url('/${json_data.data_image_about ?? 'icon/noimage.png'}')` })
                $('.data-num-01').val(json_data.data_num_1);
                $('.data-num-02').val(json_data.data_num_2);
                $('.data-num-03').val(json_data.data_num_3);
                $('.data-num-04').val(json_data.data_num_4);
                $('.data-detail-01').val(json_data.data_detail_1);
                $('.data-detail-02').val(json_data.data_detail_2);
                $('.data-detail-03').val(json_data.data_detail_3);
                $('.data-detail-04').val(json_data.data_detail_4);
                $('.data-detail-05').val(json_data.data_detail_5);
                $('.data-image-contact').parent().parent().find('.image-preview').css({ 'background-image': `url('/${json_data.data_image_contact ?? 'icon/noimage.png'}')` })
                var json_data = JSON.parse(data.about);
                $('.data-image-about-01').parent().parent().find('.image-preview').css({ 'background-image': `url('/${json_data.data_image_about_01 ?? 'icon/noimage.png'}')` })
                $('.data-image-about-02').parent().parent().find('.image-preview').css({ 'background-image': `url('/${json_data.data_image_about_02 ?? 'icon/noimage.png'}')` })
                $('.data-image-about-03').parent().parent().find('.image-preview').css({ 'background-image': `url('/${json_data.data_image_about_03 ?? 'icon/noimage.png'}')` }) 
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;
 
                var data_image_header_1          = $(`${resource}`).find('.data-image-header-1')[0].files; 
                var data_image_header_2          = $(`${resource}`).find('.data-image-header-2')[0].files; 
                var data_image_header_3          = $(`${resource}`).find('.data-image-header-3')[0].files; 
                var data_image_header_4          = $(`${resource}`).find('.data-image-header-4')[0].files; 
                var data_image_about          = $(`${resource}`).find('.data-image-about')[0].files; 
                var data_num_1         = $(`${resource}`).find('.data-num-01').val();
                var data_num_2         = $(`${resource}`).find('.data-num-02').val();
                var data_num_3         = $(`${resource}`).find('.data-num-03').val();
                var data_num_4         = $(`${resource}`).find('.data-num-04').val();
                var data_detail_1         = $(`${resource}`).find('.data-detail-01').val();
                var data_detail_2         = $(`${resource}`).find('.data-detail-02').val();
                var data_detail_3         = $(`${resource}`).find('.data-detail-03').val();
                var data_detail_4         = $(`${resource}`).find('.data-detail-04').val();
                var data_detail_5         = $(`${resource}`).find('.data-detail-05').val();
                var data_image_contact          = $(`${resource}`).find('.data-image-contact')[0].files; 
                var data_image_about_01          = $(`${resource}`).find('.data-image-about-01')[0].files; 
                var data_image_about_02          = $(`${resource}`).find('.data-image-about-02')[0].files; 
                var data_image_about_03          = $(`${resource}`).find('.data-image-about-03')[0].files; 

                if (onPushData) {
                    fd.append('data_image_header_1', data_image_header_1[0] ?? "null"); 
                    fd.append('data_image_header_2', data_image_header_2[0] ?? "null"); 
                    fd.append('data_image_header_3', data_image_header_3[0] ?? "null"); 
                    fd.append('data_image_header_4', data_image_header_4[0] ?? "null"); 
                    fd.append('data_image_about', data_image_about[0] ?? "null"); 
                    fd.append('data_num_1', data_num_1);  
                    fd.append('data_num_2', data_num_2);  
                    fd.append('data_num_3', data_num_3);  
                    fd.append('data_num_4', data_num_4);  
                    fd.append('data_detail_1', data_detail_1);  
                    fd.append('data_detail_2', data_detail_2);  
                    fd.append('data_detail_3', data_detail_3);  
                    fd.append('data_detail_4', data_detail_4);  
                    fd.append('data_detail_5', data_detail_5);  
                    fd.append('data_image_contact', data_image_contact[0] ?? "null"); 
                    fd.append('data_image_about_01', data_image_about_01[0] ?? "null"); 
                    fd.append('data_image_about_02', data_image_about_02[0] ?? "null"); 
                    fd.append('data_image_about_03', data_image_about_03[0] ?? "null"); 

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            }, 
        },
        onPush(name, resource, callback){ 
            $(document).on('click', `${resource} .full-tab-action`, function() {
                $(this).attr('atr').trim()
                if($(this).attr('atr').trim() == name) {
                    callback();
                }
            }); 
        },
        default(name){
            $(`[data-tab-name=${name}]`).html("");
        },
        doShow(name){
            $(".tab-action").removeClass("is-selected");
            $(`.tab-action[atr=${name}]`).addClass("is-selected");
            $(".data-custom-tab").removeClass("on-show");
            $(`.data-custom-tab[data-tab-name=${name}]`).addClass("on-show"); 
        }, 
        onShow(name, callback){
            $(document).on('click', `.tab-action`, function() {
                if($(this).attr('atr').trim() == name) {
                    var id = $(this).attr("data-id");
                    callback(id);
                }
            });
        },
    },
    init(){
        View.Layout.init(); 
    }
};
(() => {
    View.init();
    function init(){
        getData();
    }

    // Table
    View.FullTab.onShow("Home", () => {
        View.FullTab.doShow("Home");  
    })
    View.FullTab.onShow("About", () => {
        View.FullTab.doShow("About");  
    })
  
    // Update
    View.FullTab.onPush("Confirm", "#popup-update", () => { 
        var fd = View.FullTab.Update.getVal("#popup-update");
        console.log(fd); 
        IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
        Api.About.Update(fd)
            .done(res => { 
                IndexView.helper.showToastSuccess('Success', 'Thành công');
                getData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { }); 
    })

 
    function getData(){
        Api.About.GetAll()
            .done(res => {
                View.FullTab.Update.setVal(res.data);
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



