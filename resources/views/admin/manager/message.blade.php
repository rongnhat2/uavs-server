@extends('admin.layout')
@section('title', 'Tin nhắn')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="message-group | message">
@endsection()


@section('css')

@endsection()


@section('body')

    
<div class="page-header no-gutters has-tab">
    <div class="d-md-flex m-b-15 align-items-center justify-content-between notification relative" id="notification">
        <div class="media align-center justify-content-between m-b-15 w-100">
            <div class="m-l-15">
                <h4 class="m-b-0">Tin nhắn</h4>
            </div>
            @include('admin.alert')
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body"> 
        <div class="mail-wrapper">
            <div class="mail-nav" id="mail-nav">
                <div class="p-v-15">
                    <ul class="menu nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="anticon anticon-inbox"></i>
                                <span>Tin nhắn</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="anticon anticon-delete"></i>
                                <span>Đã xóa</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div id="mail-list" class="mail-content">
                <div class="p-h-10 p-v-5 d-md-none d-inline-block">
                    <a class="text-dark font-size-18 mail-open-nav" href="javascript:void(0);">
                        <i class="anticon anticon-menu-unfold"></i>
                    </a>
                </div>
                <div class="row d-flex align-items-center justify-content-end p-10">
                    {{-- <div class="col-md-2 d-none d-md-flex align-items-baseline m-b-10">
                        <select class="custom-select">
                            <option value="All">Tất cả</option>
                            <option value="Unread">Chưa đọc</option>
                        </select>
                    </div> --}}
                </div>
                <div class="mail-list-wrapper">

                </div>
                <div class="m-t-20 text-right">
                    {{-- <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul> --}}
                </div>
            </div>
            <div id="mail-content" class="mail-content d-none">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <div class="media align-items-center m-b-15">
                        <a id="back" class="text-gray m-r-15 font-size-18 back-message-list" href="javascript:void(0);">
                            <i class="anticon anticon-left-circle"></i>
                        </a>

                        <div class="m-l-10">
                            <h6 class="m-b-0 data-name"> </h6>
                            <span class="text-muted font-size-13 data-email"> </span>
                        </div>
                    </div>

                </div>
                <div class="m-t-30 p-h-30 data-message"> 

                </div>
            </div> 
        </div>
    </div>
</div>

@endsection()


@section('sub_layout')


@endsection()

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/message.js') }}"></script>

@endsection()