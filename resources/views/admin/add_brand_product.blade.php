@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thương hiệu sản phẩm
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
                        <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu sản phẩm</label>
                            <input type="text" name="brand_product_name" class="form-control" 
                            id="exampleInputEmail1" placeholder="Tên danh mục sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả thương hiệu sản phẩm</label>
                            <textarea style="resize: none" class="form-control" name="brand_product_desc" id="ckeditor1" 
                            cols="30" rows="10" placeholder="Mô tả danh mục sản phẩm">

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select class="form-control input-sm m-bot15" name="brand_product_status">
                                <option value="0">Ẩn</option></option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm thương hiệu</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection