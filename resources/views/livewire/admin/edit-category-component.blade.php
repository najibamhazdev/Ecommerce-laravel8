


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
                                
									<form id="login-form" name="login-form" class="mb-0" wire:submit.prevent="updatecategory" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-10"><h3>Edit Category </h3></div>
                                            <div class="col-md-2"><a href="{{route('admin.categories')}}" class="btn btn-success" >All</a></div>
                                        </div>
                                        

										<div class="row">
											<div class="col-12 form-group">
												<label for="categoryname">Category Name:</label>
												<input  id="categoryname" class="form-control not-dark" placeholder="Category Name" wire:model="name" wire:blur.prevent="generateslug" type="text" name="name"  required autofocus />
											</div>

                                            <div class="form-group">
                                                <label for="category_slug" class=" control-label">Category Slug:</label>
                                                
                                                <input type="text" id="category_slug" placeholder="Category Slug"  wire:model="slug" class="form-control input-md">
                                                
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