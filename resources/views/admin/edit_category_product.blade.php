@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Danh Mục Sản Phẩm
                        </header>
                        
                            <?php 
                                $message=Session::get('message');
                                if($message){
                                    echo '<span class="text_alert" style="color: red; border-radius: 5px; font-weight: bold;">' 
                                    . $message . 
                                    '</span>';
                               
                                    Session::put('message',null);
                                }
                            ?>
                            <div class="panel-body">
                                @foreach($edit_category_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form"action="{{URL::to('update-category-product/'.$edit_value->category_id)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" value="{{$edit_value->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                    <textarea style="resize:none " row="8"class="form-control" name="category_product_desc" id="exampleInputPassword1">{{$edit_value->category_desc}}</textarea>
                                </div>
                    
                              
                                <button type="submit" name="edit_category_product" class="btn btn-info">Cập Nhật Danh Mục</button>
                            </form>
                            </div>
                        @endforeach
                        </div>
                    </section>

            </div>
@endsection