<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6"><h2>All Products</h2></div>
                            <div class="col-md-6 text-right" style="text-align:right;"><a href="{{route('admin.addproduct')}}" class="text-right pull-right btn btn-success" > Add New </a></div>
                        </div>
                        
                    </div>
                    <div class="panel-body">

                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="{{ asset('assets/images/products') }}/{{$product->image}}" width="70" alt="{{$product->name}}"></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->stock_status}}</td>
                                        <td>{{$product->sale_price}}</td>
                                        
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->created_at}}</td>

                                        <td><a href="{{ route('admin.editproduct',['product_id'=>$product->id]) }}" class="btn btn-primary" style="font-size:10px;">Edit</a> | 
                                        
                                        <button type="button" wire:click="deleteProduct({{$product->id}})" class="btn btn-danger" data-toggle="modal" style="font-size:10px;" data-target="#exampleModal">Delete</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                       <div class="modal-body">
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                            <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>
                        </div>
                    </div>
                </div>
    </div>
</div>
