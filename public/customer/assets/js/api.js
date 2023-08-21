const Api = {
    Testimonials: {},   
    Information: {},    
    Event: {},    
    Partner: {},  
    Executive: {},   
    Future: {},
    FutureCategory: {},
    Current: {},
    CurrentCategory: {},
    News: {},
    NewsCategory: {}, 
    Community: {},
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
        url: `/customer/apip/testimonials/get`,
        method: 'GET',
    });  
})();

//Event
(() => {
    Api.Event.GetAll = () => $.ajax({
        url: `/customer/apip/event/get`,
        method: 'GET',
    });  
})();

//Partner
(() => {
    Api.Partner.GetAll = () => $.ajax({
        url: `/customer/apip/partner/get`,
        method: 'GET',
    });  
})();

//Executive
(() => {
    Api.Executive.GetAll = () => $.ajax({
        url: `/customer/apip/executive/get`,
        method: 'GET',
    });  
})();

//Information
(() => {
    Api.Information.GetAll = () => $.ajax({
        url: `/customer/apip/information/get`,
        method: 'GET',
    });  
})();
 
 

// Future
(() => {
    Api.Future.GetAll = (word, category) => $.ajax({
        url: `/customer/apip/future/get?keyword=${word}&category=${category}`,
        method: 'GET', 
    }); 
})();

// FutureCategory
(() => {
    Api.FutureCategory.GetAll = () => $.ajax({
        url: `/customer/apip/future-category/get`,
        method: 'GET',
    }); 
})();

// Current
(() => {
    Api.Current.GetAll = (word, category) => $.ajax({
        url: `/customer/apip/current/get?keyword=${word}&category=${category}`,
        method: 'GET',
    }); 
})();

// CurrentCategory
(() => {
    Api.CurrentCategory.GetAll = () => $.ajax({
        url: `/customer/apip/current-category/get`,
        method: 'GET',
    }); 
})();


// News
(() => {
    Api.News.GetAll = (word, category) => $.ajax({
        url: `/customer/apip/news/get?keyword=${word}&category=${category}`,
        method: 'GET',
    }); 
})();

// NewsCategory
(() => {
    Api.NewsCategory.GetAll = () => $.ajax({
        url: `/customer/apip/news-category/get`,
        method: 'GET',
    }); 
})();

// Community
(() => {
    Api.Community.GetAll = () => $.ajax({
        url: `/customer/apip/community/get`,
        method: 'GET',
    }); 
})();

// Message
(() => {
    Api.Message.Create = (data) => $.ajax({
        url: `/customer/apip/message/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
})();