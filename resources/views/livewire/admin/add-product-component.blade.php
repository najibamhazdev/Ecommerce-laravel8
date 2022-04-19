


<section id="content">
			<div class="content-wrap py-0">

				<div class="section dark p-0 m-0 h-100 position-absolute"></div>

				<div class="section bg-transparent min-vh-100 p-0 m-0 d-flex">
					<div class="vertical-middle">
						<div class="container py-5">

							
                            <x-jet-validation-errors class="mb-4" />
							<div class="card mx-auto rounded-0 border-0" style="max-width: 400px;">
								<div class="card-body" style="padding: 40px;">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                
									<form id="login-form" name="login-form" class="mb-0" wire:submit.prevent="storeproduct" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-10"><h3>+ Add New Product</h3></div>
                                            <div class="col-md-2"><a href="{{route('admin.products')}}" class="btn btn-success" >All</a></div>
                                        </div>
                                        

										<div class="row">
											<div class="col-12 form-group">
												<label for="productname">Product Name:</label>
												<input  id="productname" class="form-control not-dark" placeholder="Product Name" wire:model="name" wire:blur.prevent="generateslug" type="text" name="name"  required  />
											</div>
                                            <div class="col-12 form-group">
												<label for="productname">Category:</label>
												<select name="category_id"  class="form-control" required wire:model="category_id">
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                            </select>
											</div>

                                            <div class="col-12 form-group">
												<label for="r_price">Regular Price:</label>
												<input  id="r_price" class="form-control not-dark" placeholder="Regular Price" wire:model="regular_price" type="text" name="regular_price"  required  />
											</div>

                                            <div class="col-12 form-group">
												<label for="s_price">Sale Price:</label>
												<input  id="s_price" class="form-control not-dark" placeholder="Sale Price" wire:model="sale_price" type="text" name="sale_price"    />
											</div>

                                            <div class="col-12 form-group">
												<label for="short_description">Short Description:</label>
												<textarea id="short_description" class="form-control not-dark" placeholder="Short Description"  wire:model="short_description" type="text" name="short_description"  required  ></textarea>
											</div>

                                            <div class="col-12 form-group">
												<label for="description">Short Description:</label>
												<textarea id="description" class="form-control not-dark" placeholder="Full Description"  wire:model="description" type="text" name="description"  required  ></textarea>
											</div>

                                            <div class="col-12 form-group">
												<label for="sku">SKU:</label>
												<input  id="sku" class="form-control not-dark" placeholder="SKU" wire:model="sku" type="text" name="sku"  required  />
											</div>

                                            <div class="col-12 form-group">
												<label for="productname">Stock:</label>
												<select id="stock_status" name="stock_status" wire:model="stock_status" class="form-control" >
                                                    <option value="instock">InStock</option>
                                                    <option value="outofstock">Out of Stock</option>
                                            </select>
											</div>

                                            <div class="col-12 form-group">
												<label for="productname">Featured:</label>
												<select name="featured"  class="form-control" wire:model="featured">
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                            </select>
											</div>

                                            <div class="col-12 form-group">
												<label for="qty">Qty:</label>
												<input  id="qty" class="form-control not-dark" placeholder="Quantity" wire:model="quantity" type="text" name="qty"    />
											</div>

                                            <div class="col-12 form-group">
												<label for="photo">Image:</label>
												<input  id="photo" class="form-control not-dark"  type="file" name="image" wire:model="image"   />
                                                @if($image)
                                                    <img src="{{$image->temporaryUrl()}}" width="120" alt="">
                                                @endif
											</div>

                                            <div class="col-12 form-group">
												<label for="photo2">Image 2:</label>
												<input  id="photo2" class="form-control not-dark"  type="file" name="image2" wire:model="image2"   />
                                                @if($image2)
                                                    <img src="{{$image2->temporaryUrl()}}" width="120" alt="">
                                                @endif
											</div>


                                            <div class="form-group">
                                                <label for="product_slug" class=" control-label" >Product Slug:</label>
                                                
                                                <input type="text" id="product_slug" placeholder="Product Slug" wire:model="slug" class="form-control input-md">
                                                
                                            </div>

											

											<div class="col-12 form-group mb-0 mt-4 pull-right">
												<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Subnit</button>
												
											</div>
										</div>
									</form>

									
								</div>
							</div>

							

						</div>
					</div>
				</div>

			</div>
		</section>