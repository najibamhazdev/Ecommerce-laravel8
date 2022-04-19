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
                            <div class="col-md-6"><h2>All Categories</h2></div>
                            <div class="col-md-6 text-right" style="text-align:right;"><a href="{{route('admin.addcategory')}}" class="text-right pull-right btn btn-success" > Add New </a></div>
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
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td><a href="{{ route('admin.editcategory',['category_id'=>$category->id]) }}" ><i  class="fa fa-edit ">Edit</i></a> | 
                                        <a href="#" wire:click.prevent="deleteCategory({{$category->id}})" ><i  class="fa fa-times fa-2x "> Delete</i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
