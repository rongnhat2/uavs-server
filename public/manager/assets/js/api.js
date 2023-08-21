const Api = {
    About: {},
    Testimonials: {},
    Partners: {},
    Community: {},
    Future: {},
    FutureCategory: {},
    Current: {},
    CurrentCategory: {},
    News: {},
    NewsCategory: {},
    Executive: {},
    Image: {},
    Message: {},
    
};
(() => {
    $.ajaxSetup({
        headers: { 
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
        },
        crossDomain: true
    });
})();

//Testimonials
(() => {
    Api.Testimonials.GetAll = () => $.ajax({
        url: `/apip/testimonials/get`,
        method: 'GET',
    }); 
    Api.Testimonials.Store = (data) => $.ajax({
        url: `/apip/testimonials/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Testimonials.getOne = (id) => $.ajax({
        url: `/apip/testimonials/get-one/${id}`,
        method: 'GET',
    });
    Api.Testimonials.Update = (data) => $.ajax({
        url: `/apip/testimonials/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Testimonials.Delete = (id) => $.ajax({
        url: `/apip/testimonials/delete/${id}`,
        method: 'GET',
    });
})();

// partner
(() => {
    Api.Partners.GetAll = () => $.ajax({
        url: `/apip/partners/get`,
        method: 'GET',
    }); 
    Api.Partners.Store = (data) => $.ajax({
        url: `/apip/partners/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Partners.getOne = (id) => $.ajax({
        url: `/apip/partners/get-one/${id}`,
        method: 'GET',
    });
    Api.Partners.Update = (data) => $.ajax({
        url: `/apip/partners/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Partners.Delete = (id) => $.ajax({
        url: `/apip/partners/delete/${id}`,
        method: 'GET',
    });
})();

// Community
(() => {
    Api.Community.GetAll = () => $.ajax({
        url: `/apip/community/get`,
        method: 'GET',
    }); 
    Api.Community.Store = (data) => $.ajax({
        url: `/apip/community/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Community.getOne = (id) => $.ajax({
        url: `/apip/community/get-one/${id}`,
        method: 'GET',
    });
    Api.Community.Update = (data) => $.ajax({
        url: `/apip/community/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Community.Delete = (id) => $.ajax({
        url: `/apip/community/delete/${id}`,
        method: 'GET',
    });
})();

// Future
(() => {
    Api.Future.GetAll = (id) => $.ajax({
        url: `/apip/future/get`,
        method: 'GET',
        dataType: 'json',
        data: {
            id: id ?? '',
        }
    }); 
    Api.Future.Store = (data) => $.ajax({
        url: `/apip/future/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Future.getOne = (id) => $.ajax({
        url: `/apip/future/get-one/${id}`,
        method: 'GET',
    });
    Api.Future.Update = (data) => $.ajax({
        url: `/apip/future/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Future.Delete = (id) => $.ajax({
        url: `/apip/future/delete/${id}`,
        method: 'GET',
    });
})();

// FutureCategory
(() => {
    Api.FutureCategory.GetAll = () => $.ajax({
        url: `/apip/future-category/get`,
        method: 'GET',
    }); 
    Api.FutureCategory.Store = (data) => $.ajax({
        url: `/apip/future-category/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.FutureCategory.getOne = (id) => $.ajax({
        url: `/apip/future-category/get-one/${id}`,
        method: 'GET',
    });
    Api.FutureCategory.Update = (data) => $.ajax({
        url: `/apip/future-category/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.FutureCategory.Delete = (id) => $.ajax({
        url: `/apip/future-category/delete/${id}`,
        method: 'GET',
    });
})();

// Current
(() => {
    Api.Current.GetAll = () => $.ajax({
        url: `/apip/current/get`,
        method: 'GET',
    }); 
    Api.Current.Store = (data) => $.ajax({
        url: `/apip/current/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Current.getOne = (id) => $.ajax({
        url: `/apip/current/get-one/${id}`,
        method: 'GET',
    });
    Api.Current.Update = (data) => $.ajax({
        url: `/apip/current/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Current.Delete = (id) => $.ajax({
        url: `/apip/current/delete/${id}`,
        method: 'GET',
    });
})();

// Message
(() => {
    Api.Message.GetAll = () => $.ajax({
        url: `/apip/message/get`,
        method: 'GET',
    }); 
    Api.Message.Store = (data) => $.ajax({
        url: `/apip/message/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Message.getOne = (id) => $.ajax({
        url: `/apip/message/get-one/${id}`,
        method: 'GET',
    });
    Api.Message.Update = (data) => $.ajax({
        url: `/apip/message/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Message.Delete = (id) => $.ajax({
        url: `/apip/message/delete/${id}`,
        method: 'GET',
    });
})();

// About
(() => {
    Api.About.GetAll = () => $.ajax({
        url: `/apip/about/get`,
        method: 'GET',
    });  
    Api.About.Update = (data) => $.ajax({
        url: `/apip/about/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
})();

// CurrentCategory
(() => {
    Api.CurrentCategory.GetAll = () => $.ajax({
        url: `/apip/current-category/get`,
        method: 'GET',
    }); 
    Api.CurrentCategory.Store = (data) => $.ajax({
        url: `/apip/current-category/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.CurrentCategory.getOne = (id) => $.ajax({
        url: `/apip/current-category/get-one/${id}`,
        method: 'GET',
    });
    Api.CurrentCategory.Update = (data) => $.ajax({
        url: `/apip/current-category/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.CurrentCategory.Delete = (id) => $.ajax({
        url: `/apip/current-category/delete/${id}`,
        method: 'GET',
    });
})();

// News
(() => {
    Api.News.GetAll = () => $.ajax({
        url: `/apip/news/get`,
        method: 'GET',
    }); 
    Api.News.Store = (data) => $.ajax({
        url: `/apip/news/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.News.getOne = (id) => $.ajax({
        url: `/apip/news/get-one/${id}`,
        method: 'GET',
    });
    Api.News.Update = (data) => $.ajax({
        url: `/apip/news/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.News.Delete = (id) => $.ajax({
        url: `/apip/news/delete/${id}`,
        method: 'GET',
    });
})();

// NewsCategory
(() => {
    Api.NewsCategory.GetAll = () => $.ajax({
        url: `/apip/news-category/get`,
        method: 'GET',
    }); 
    Api.NewsCategory.Store = (data) => $.ajax({
        url: `/apip/news-category/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.NewsCategory.getOne = (id) => $.ajax({
        url: `/apip/news-category/get-one/${id}`,
        method: 'GET',
    });
    Api.NewsCategory.Update = (data) => $.ajax({
        url: `/apip/news-category/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.NewsCategory.Delete = (id) => $.ajax({
        url: `/apip/news-category/delete/${id}`,
        method: 'GET',
    });
})();

// Executive
(() => {
    Api.Executive.GetAll = () => $.ajax({
        url: `/apip/executive/get`,
        method: 'GET',
    }); 
    Api.Executive.Store = (data) => $.ajax({
        url: `/apip/executive/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Executive.getOne = (id) => $.ajax({
        url: `/apip/executive/get-one/${id}`,
        method: 'GET',
    });
    Api.Executive.Update = (data) => $.ajax({
        url: `/apip/executive/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Executive.Delete = (id) => $.ajax({
        url: `/apip/executive/delete/${id}`,
        method: 'GET',
    });
})();
 

// Image
(() => {
    Api.Image.Create = (data) => $.ajax({
        url: `/apip/post-image`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
})();
