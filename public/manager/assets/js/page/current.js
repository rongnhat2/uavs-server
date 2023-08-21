const View = {
    table: {
        __generateDTRow(data){ 
            return [
                `<div class="id-order">${data.id}</div>`,
                data.name,  
                `<img src="/${data.image}" style="width:100px" alt="">`,   
                `<div class="view-data tab-action" atr="Edit" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-edit"></i></div>
                <div class="view-data tab-action" atr="Delete" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-delete"></i></div>`
            ]
        },
        init(){
            var row_table = [ 
                                { title: 'ID', name: 'id', orderable: true, width: '10%', },
                                { title: 'Tên', name: 'name', orderable: true, },
                                { title: 'Hình ảnh', name: 'image', orderable: true, },
                                { title: 'Hành động', name: 'action', orderable: true, width: '10%', },
                            ];
            IndexView.table.init("#data-table", row_table);
        }
    },   
    Category: {
        data: [],
        render(data, count){
            $(".category-list .category-item").remove();
            $(".category-item .total-count").html(count);
            data.map(v => {
                $(".category-list")
                    .append(`<div class="d-flex align-items-center category-item justify-content-between" category-id="${v.id}" category-name="${v.name}"> ${v.name} <span class="badge badge-pill badge-cyan">${v.count}</span></div>`)
            })
        },
        getVal(resource){
            var fd = new FormData();
            var required_data = [];
            var onPushData = true;
            const noTag = /(<([^>]+)>)/ig;
            const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;
            var data_id           = $(`${resource}`).find('.data-id').val().replace(noTag, ""); 
            var data_name           = $(`${resource}`).find('.data-name').val().replace(noTag, ""); 
            if (onPushData) {
                fd.append('data_id', data_id);
                fd.append('data_name', data_name);
                return fd;
            }else{
                return false;
            }
        },
        onPush(name, callback){ 
            $(document).on('click', `.sub-tab-action`, function() {
                $(this).attr('atr').trim()
                if($(this).attr('atr').trim() == name) {
                    callback();
                }
            }); 
        },
        onChange(callback){ 
            $(document).on('click', `.category-item`, function() {
                let id = $(this).attr("category-id");
                if (id != 0) {
                    $(".category-item-event").removeClass("d-none")
                }else{
                    $(".category-item-event").addClass("d-none")
                }
                $(".category-item-event .data-name").val($(this).attr("category-name"))
                $(".category-item-event .data-id").val($(this).attr("category-id"))
                $(".category-item-event .category-delete-id").attr("data-id", id)
                $(".category-item").removeClass("is-selected");
                $(this).addClass("is-selected");
                callback($(this).attr("category-id"));
            }); 
        },
    },
    Layout: {
        FormCreate: "",
        FormUpdate: "",
        FormDelete: "",
        FormCreateCategory: "",
        FormDeleteCategory: "",
        init(){
            View.Layout.FormCreate = $(".layout-tab-create").html();
            View.Layout.FormUpdate = $(".layout-tab-create").html();
            View.Layout.FormDelete = $(".layout-tab-delete").html();
            View.Layout.FormCreateCategory = $(".layout-tab-create-category").html();
            View.Layout.FormDeleteCategory = $(".layout-tab-delete-category").html();
            $(".layout-tab-create").remove();
            $(".layout-tab-delete").remove();
            $(".layout-tab-create-category").remove();
            $(".layout-tab-delete-category").remove();
        }
    },
    FullTab: {  
        Create: { 
            setVal(resource){
                $(resource).find(".data-category .radio").remove();
                View.Category.data.map(v => {
                    $(resource).find(".data-category")
                        .append(`<div class="radio">
                                    <input id="radio${v.id}" name="category" value="${v.id}" type="radio">
                                    <label for="radio${v.id}">${v.name}</label>
                                </div>`)
                })
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_id             = $(`${resource}`).find('.data-id').val()
                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_name           = $(`${resource}`).find('.data-name').val().replace(noTag, ""); 
                var data_category       = $(`${resource}`).find('[name=category]:checked').val();
                var data_description    = $(`${resource}`).find('.data-description').val();
                var data_detail         = $(`${resource}`).find('.data-detail').val();

                // --Required Value
                if (data_image.length <= 0) { required_data.push('Hãy chọn ảnh.'); onPushData = false }  
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false } 
                if (data_description == '') { required_data.push('Nhập mô tả ngắn.'); onPushData = false } 
                if (data_detail == '') { required_data.push('Nhập nội dung.'); onPushData = false }

                if (onPushData) {
                    fd.append('data_image', data_image[0] ?? "null");
                    fd.append('data_name', data_name);
                    fd.append('data_category', data_category ?? "null");
                    fd.append('data_description', data_description);  
                    fd.append('data_detail', data_detail);

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            }, 
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreate);
                IndexView.summerNote.init(".summernote", "", 300);
            }
        },
        Update: { 
            setVal(resource, data){
                $(resource).find(".data-category .radio").remove();
                View.Category.data.map(v => {
                    $(resource).find(".data-category")
                        .append(`<div class="radio">
                                    <input id="radio${v.id}" name="category" value="${v.id}" type="radio">
                                    <label for="radio${v.id}">${v.name}</label>
                                </div>`)
                })
                $(`${resource}`).find('.data-id').val(data.id);
                $(`${resource}`).find('.data-name').val(data.name);
                $(`${resource}`).find('.image-preview').css({
                    'background-image': `url('/${data.image ?? 'icon/noimage.png'}')`
                })
                $(`${resource}`).find('.data-description').val(data.description);
                $(`${resource}`).find(`[name=category][value=${data.category_id}]`).prop('checked', true);
                IndexView.summerNote.update(`${resource} .data-detail`, data.detail); 
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_id             = $(`${resource}`).find('.data-id').val().replaceAll(noTag, "");

                var data_name        = $(`${resource}`).find('.data-name').val().replace(noTag, "");
                var data_category       = $(`${resource}`).find('[name=category]:checked').val();
                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_description    = $(`${resource}`).find('.data-description').val();  
                var data_detail         = $(`${resource}`).find('.data-detail').val();

                // --Required Value
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false } 
                if (data_description == '') { required_data.push('Nhập mô tả ngắn.'); onPushData = false } 
                if (data_detail == '') { required_data.push('Nhập nội dung.'); onPushData = false }

                if (onPushData) {
                    fd.append('data_id', data_id); 
                    fd.append('data_name', data_name); 
                    fd.append('data_image', data_image[0] ?? "null"); 
                    fd.append('data_category', data_category ?? "null");
                    fd.append('data_description', data_description);  
                    fd.append('data_detail', data_detail);

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreate);
                IndexView.summerNote.init(".summernote", "", 300);
            }
        },
        Delete: {
            setVal(resource, id){
                $(resource).find('.data-id').val(id)
            },
            getVal(resource){ 
                $(resource).find('.data-id').val()
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormDelete)
            }
        },
        CreateCategory: { 
            setVal(resource, data){ },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_name           = $(`${resource}`).find('.data-name').val().replace(noTag, ""); 

                // --Required Value
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false } 

                if (onPushData) {
                    fd.append('data_name', data_name);

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            }, 
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreateCategory);
            }
        },
        DeleteCategory: {
            setVal(resource, id){
                $(resource).find('.data-id').val(id)
            },
            getVal(resource){ 
                $(resource).find('.data-id').val()
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormDeleteCategory)
            }
        },
        onPush(name, resource, callback){ 
            $(document).on('click', `${resource} .full-tab-action`, function() {
                $(this).attr('atr').trim();
                if($(this).attr('atr').trim() == name) {
                    callback();
                }
            }); 
        },
        default(name){
            $(`[data-tab-name=${name}]`).html("");
        },
        doShow(name){
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
        View.table.init(); 
    }
};
(() => {
    View.init();
    function init(){
        getData();
        getCategoryData();
    }

    // Table
    View.FullTab.onShow("Table", () => {
        View.FullTab.doShow("Table");
        View.FullTab.default("Create");
        View.FullTab.default("Update");
        View.FullTab.default("Delete");
        getData();
    })
 
    // Create
    View.FullTab.onShow("Create", () => {
        View.FullTab.doShow("Create");
        View.FullTab.Create.init("Create");
        View.FullTab.Create.setVal("#popup-create");
    })
    View.FullTab.onPush("Confirm", "#popup-create", () => { 
        var fd = View.FullTab.Create.getVal("#popup-create");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.Current.Store(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getData();
                    getCategoryData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })

    // Update
    View.FullTab.onShow("Edit", (id) => {
        View.FullTab.doShow("Update");
        View.FullTab.Update.init("Update");
        IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
        Api.Current.getOne(id)
            .done(res => { 
                View.FullTab.Update.setVal("#popup-update", res.data)
                IndexView.helper.showToastSuccess('Success', 'Lấy ra dữ liệu'); 
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })
    View.FullTab.onPush("Confirm", "#popup-update", () => { 
        var fd = View.FullTab.Update.getVal("#popup-update");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.Current.Update(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getData();
                    getCategoryData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })

    // Delete
    View.FullTab.onShow("Delete", (id) => {
        View.FullTab.doShow("Delete");
        View.FullTab.Delete.init("Delete"); 
        View.FullTab.Delete.setVal("#popup-delete", id)
    })
    View.FullTab.onPush("Delete", "#popup-delete", () => {
        View.FullTab.doShow("Table");
        View.FullTab.default();
        IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
        Api.Current.Delete($("#popup-delete").find('.data-id').val())
            .done(res => { 
                IndexView.helper.showToastSuccess('Success', 'Thành công');
                getData();
                getCategoryData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })

 
    // Create Category
    View.FullTab.onShow("CreateCategory", () => {
        View.FullTab.doShow("CreateCategory");
        View.FullTab.CreateCategory.init("CreateCategory");
    })
    View.FullTab.onPush("Confirm", "#popup-create-category", () => { 
        var fd = View.FullTab.CreateCategory.getVal("#popup-create-category");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.CurrentCategory.Store(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getCategoryData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })

    View.Category.onChange((id) => {
        View.FullTab.doShow("Table");
        View.FullTab.default("Create");
        View.FullTab.default("Update");
        View.FullTab.default("Delete");
        getData(id)
    })
    View.Category.onPush("Update", () => { 
        var fd = View.Category.getVal(".category-item-event");
        if (fd) {
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.CurrentCategory.Update(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getCategoryData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })
    View.FullTab.onShow("DeleteCategory", (id) => {
        View.FullTab.doShow("DeleteCategory");
        View.FullTab.DeleteCategory.init("DeleteCategory");
        View.FullTab.DeleteCategory.setVal("#popup-delete-category", id)
    })
    View.FullTab.onPush("Delete", "#popup-delete-category", () => { 
        View.FullTab.doShow("Table");
        View.FullTab.default();
        IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
        Api.CurrentCategory.Delete($("#popup-delete-category").find('.data-id').val())
            .done(res => { 
                IndexView.helper.showToastSuccess('Success', 'Thành công');
                getCategoryData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })
 
    function getData(id){
        Api.Current.GetAll(id)
            .done(res => {
                IndexView.table.clearRows();
                Object.values(res.data).map(v => {
                    IndexView.table.insertRow(View.table.__generateDTRow(v));
                    IndexView.table.render();
                })
                IndexView.table.render();
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
