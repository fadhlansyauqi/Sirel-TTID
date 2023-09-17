<div class="">
    <!--begin::Container-->
    <div class="container mt-2">
		<!--begin::Card-->
		<div class="card card-custom mb-20">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label ">Laptop List
					<span class="d-block text-muted pt-2 font-size-sm">Sistem Informasi Rental Laptop</span></h3>
					
				</div>
				<input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px"  />
			</div>
			<div class="card-body ">
				<!--begin: Datatable-->
				<table class="table table-separate table-head-custom table-checkable" id="kt_datatable_2">
					<thead>
						<tr>
							<th>No.</th>
							<th>Code</th>
							<th>Name</th>
							<th>Category</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@php
							$num = ($laptops->currentPage()-1) * $laptops->perPage()+1; 
						@endphp
						@foreach($laptops as $laptop)
							<tr>
								<td>{{ $num++ }}</td>
                                <td>{{ $laptop->code }}</td>
                                <td>{{ $laptop->name }}</td>
                                <td>
									<span class="label font-weight-bold label-lg label-light-info label-inline" style="
										@if($laptop->category === 'Standar')
											color: white; background-color: #CECE5A;
										@elseif($laptop->category === 'Ultrabook')
											color: white; background-color: #FD8D14;
										@elseif($laptop->category === 'Gaming')
											color: white; background-color: #F24C3D;
										@elseif($laptop->category === 'Mac')
											color: white; background-color: #FFE17B;
										@endif">
										{{ $laptop->category }}
									</span>
								</td>
								
									<td>
										<span style="width: 108px;">
											<span class="label font-weight-bold label-lg label-light-info label-inline" style="background-color: {{ $laptop->status === 'In Stock' ? '#1A5D1A' : ($laptop->status === 'Rented' ? '#C51605' : 'default') }}; color: white;">
												{{ $laptop->status }}
											</span>
										</span>
									</td>
									
									
									</td>
									
								<td><span
                                    style="overflow: visible; position: relative; width: 125px;">
                                    <button wire:click="edit('{{ $laptop->id }}')" type="button"
                                        class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details"> <span
                                            class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24"
                                                        height="24">
                                                    </rect>
                                                    <path
                                                        d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                    </path>
                                                    <rect fill="#000000" opacity="0.3" x="5"
                                                        y="20" width="15" height="2" rx="1">
                                                    </rect>
                                                </g>
                                            </svg> </span> </button> <button wire:click="delete('{{ $laptop->id }}')"
                                        type="button" class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                            class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24"
                                                        height="24">
                                                    </rect>
                                                    <path
                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                    <path
                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg> </span> </button>
                                </span></td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<!--end: Datatable-->
				<div>
					{{ $laptops->links() }}
				</div>
			</div>
		</div>
		<!--end::Card-->

        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Base Controls</h3>
            </div>
			
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Laptop Code
                            <span class="text-danger">*</span></label>
                        <input type="code" class="form-control" wire:model="code" />
                        @error('code')
                        <div class="mt-2 alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Laptop Name
                            <span class="text-danger">*</span></label>
                        <input type="name" class="form-control" wire:model="name" />
                        @error('name')
                        <div class="mt-2 alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <<div class="form-group">
						<label >Laptop Category
							<span class="text-danger">*</span>
						</label>
						<select class="form-control" wire:model="category">
							<option value="">Choose Category</option> <!-- Opsi default -->
							<option value="Standar">Standar</option>
							<option value="Ultrabook">Ultrabook</option>
							<option value="Gaming">Gaming</option>
							<option value="Mac">Mac</option>
						</select>
						@error('status')
						<div class="mt-2 alert alert-danger" role="alert">
							{{$message}}
						</div>
						@enderror
					</div>

                    <div class="form-group">
						<label>Laptop Status
							<span class="text-danger">*</span>
						</label>
						<select class="form-control" wire:model="status">
							<option value="">Choose Status</option> <!-- Opsi default -->
							<option value="In Stock">In Stock</option>
							<option value="Rented">Rented</option>
						</select>
						@error('status')
						<div class="mt-2 alert alert-danger" role="alert">
							{{$message}}
						</div>
						@enderror
					</div>
					
                    
                </div>
                <div class="card-footer">
                    {{-- <button type="reset" class="btn btn-primary mr-2" wire:click="store">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button> --}}

					<button type="reset" class="btn btn-{{ $editMode ? 'light-primary' : 'primary' }} mr-2" wire:click="{{ $editMode ? 'update' : 'store' }}" wire:loading.attr="disabled">
						{{ $editMode ? 'Update' : 'Submit' }}
						<div wire:loading>
                            <div class="spinner-border spinner-border-sm" role="status">
                               
                              </div>
                        </div>
					</button>
					<button type="reset" class="btn btn-light" wire:click="cancelEdit">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
