@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục sản phẩm
                </header>
                <div class="panel-body">
                    <?php
                    $message = Session::get('message');
                    if($message)
                    {
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                    
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục sản phẩm</label>
                            <input type="text" name="category_product_name" class="form-control" 
                            id="exampleInputEmail1" placeholder="Tên danh mục sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục sản phẩm</label>
                            <textarea style="resize: none" class="form-control" name="category_product_desc" id="ckeditor1" 
                            cols="30" rows="10" placeholder="Mô tả danh mục sản phẩm">

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Từ khóa danh mục sản phẩm</label>
                            <textarea style="resize: none" class="form-control" name="category_product_keywords" id="ckeditor1" 
                            cols="30" rows="10" placeholder="Mô tả danh mục sản phẩm">

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select class="form-control input-sm m-bot15" name="category_product_status">
                                <option value="0">Ẩn</option></option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection