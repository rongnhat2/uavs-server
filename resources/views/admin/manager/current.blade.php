@extends('admin.layout')
@section('title', 'Sinh viên hiện tại')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="current-group | current">
@endsection()


@section('css')

@endsection()


@section('body')

    
<div class="page-header no-gutters has-tab">
    <div class="d-md-flex m-b-15 align-items-center justify-content-between notification relative" id="notification">
        <div class="media align-center justify-content-between m-b-15 w-100">
            <div class="m-l-15">
                <h4 class="m-b-0">Sinh viên hiện tại</h4>
            </div>
            @include('admin.alert')
        </div>
    </div>
</div>
<div class="row m-t-25">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-center">
                <h5 class="text-center m-0">Danh mục</h5>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between category-item is-selected" category-id="0">
                    Tất cả danh mục
                    <span class="badge badge-pill badge-cyan total-count"></span>
                </div>
                <div class="category-list">

                </div>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-default flex-right tab-action w-100 mb-2" atr="CreateCategory">Tạo danh mục<i class="fas fa-plus m-l-5"></i></a> 
                <a href="#" class="btn btn-default flex-right tab-action w-100" atr="Create">Tạo bài viết<i class="fas fa-plus m-l-5"></i></a> 
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card data-custom-tab on-show" data-tab-name="Table"> 
            <div class="card-body">
                <div class="mb-4 category-item-event d-none d-flex justify-content-end align-items-center">
                    <div class="col-md-1">Danh mục</div>
                    <div class="col-md-3">
                        <input type="hidden" class="form-control data-id">
                        <input type="text" class="form-control data-name">
                    </div>
                    <button class="btn btn-success sub-tab-action mr-2" atr="Update"><i class="anticon anticon-save"></i></button>
                    <button class="btn btn-danger tab-action category-delete-id" atr="DeleteCategory"><i class="anticon anticon-delete"></i></button> 
                </div>
                <table id="data-table" class="table"> </table>
            </div>
        </div>
        <div class="data-custom-tab" data-tab-name="Create" id="popup-create"> </div>
        <div class="data-custom-tab" data-tab-name="Update" id="popup-update"> </div>
        <div class="data-custom-tab" data-tab-name="Delete" id="popup-delete"> </div>
        <div class="data-custom-tab" data-tab-name="CreateCategory" id="popup-create-category"> </div>
        <div class="data-custom-tab" data-tab-name="DeleteCategory" id="popup-delete-category"> </div>
    </div>
</div>

<div class="layout-tab-create">
    <input type="hidden" class="form-control data-id">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">   
                    <div class="tab-content" id="myTabContent">
                        <div class="error-log">
                            
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Hình ảnh ( 300 x 200 )</label> 
                                            <div class="col-md-8">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input image-input data-image" id="customFile" accept="image/*">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div> 
                                                <div class="image-preview form-preview">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Tiêu đề</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control data-name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Mô tả ngắn</label>
                                            <div class="col-md-8">
                                                <textarea name="" id="" cols="30" rows="10" class="form-control data-description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Danh mục</label> 
                                            <div class="col-md-8 data-category">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Nội dung</label>
                                            <div class="col-md-12">
                                                <textarea name="" id="" cols="30" rows="10" class="form-control data-detail summernote"></textarea>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-defauld mr-2 tab-action" atr="Table">Hủy</button>
                        <button class="btn btn-primary full-tab-action" atr="Confirm">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-tab-delete">
    <input type="hidden" class="form-control data-id">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">   
                    <h3>Xóa đối tượng</h3>
                    <div class="form-group text-right">
                        <button class="btn btn-defauld mr-2 tab-action" atr="Table">Hủy</button>
                        <button class="btn btn-primary full-tab-action" atr="Delete">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-tab-create-category">
    <input type="hidden" class="form-control data-id">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">   
                    <div class="tab-content" id="myTabContent">
                        <div class="error-log">
                            
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Tên danh mục</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control data-name" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-defauld mr-2 tab-action" atr="Table">Hủy</button>
                        <button class="btn btn-primary full-tab-action" atr="Confirm">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-tab-delete-category">
    <input type="hidden" class="form-control data-id">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">   
                    <h3>Xóa danh mục</h3>
                    <div class="form-group text-right">
                        <button class="btn btn-defauld mr-2 tab-action" atr="Table">Hủy</button>
                        <button class="btn btn-primary full-tab-action" atr="Delete">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection()
 

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/current.js') }}"></script>

@endsection()