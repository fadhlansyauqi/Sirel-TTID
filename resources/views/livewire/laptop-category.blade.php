{{-- <div>
    <h1>Laptop category</h1>
</div> --}}
<div>
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Custom Demo
											<span class="d-block text-muted pt-2 font-size-sm">light head and row separator</span></h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="la la-download"></i>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<ul class="nav flex-column nav-hover">
														<li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-print"></i>
																<span class="nav-text">Print</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-copy"></i>
																<span class="nav-text">Copy</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-excel-o"></i>
																<span class="nav-text">Excel</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-text-o"></i>
																<span class="nav-text">CSV</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-pdf-o"></i>
																<span class="nav-text">PDF</span>
															</a>
														</li>
													</ul>
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											
                                            <!-- Button trigger modal-->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#laptopModal">
                                                Add New Data
                                            </button>

                                            <!-- Modal-->
                                            <div wire:ignore class="modal fade" id="laptopModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content" >
                                                        <div class="card card-custom">
                                                            <div class="card-header">
                                                             <h3 class="card-title">
                                                              Add New Data
                                                             </h3>
                                                            </div>
                                                            <!--begin::Form-->
                                                            <form>
                                                             <div class="card-body">
                                                              <div class="form-group">
                                                               <label>Laptop code <span class="text-danger">*</span></label>
                                                               <input type="text" wire:model="code" class="form-control @error('code') is-invalid @enderror" name="code"  placeholder="Enter laptop code"/>
															   @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                                                              </div>
                                                              <div class="form-group">
                                                               <label for="laptopName">Laptop Name <span class="text-danger">*</span></label>
                                                               <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Laptop name"/>
															   @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="laptopCategory">Laptop Category <span class="text-danger">*</span></label>
                                                                <input type="text" wire:model="category" class="form-control @error('category') is-invalid @enderror" name="category"  placeholder="Laptop Category"/>
																@error('category') <span class="text-danger">{{ $message }}</span> @enderror
                                                               </div>
                                                               <div class="form-group">
                                                                <label for="status">Laptop Status <span class="text-danger">*</span></label>
                                                                <input type="text" wire:model="status" class="form-control @error('status') is-invalid @enderror" name="status"  placeholder="Laptop Status"/>
																@error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                                               </div>
                                                             </div>
                                                             <div class="card-footer">
                                                              <button type="submit" class="btn btn-primary mr-2" wire:click="store" wire:key>Submit</button>
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancel</button>
                                                             </div>
                                                            </form>
                                                            <!--end::Form-->
                                                           </div>
                                                    </div>
                                                </div>
                                            </div>
											<!--end::Modal-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable_2">
											<thead>
												<tr>
													<th>Record ID</th>
													<th>Order ID</th>
													<th>Country</th>
													<th>Ship City</th>
													<th>Ship Address</th>
													<th>Company Agent</th>
													<th>Company Name</th>
													<th>Ship Date</th>
													<th>Status</th>
													<th>Type</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>64616-103</td>
													<td>Brazil</td>
													<td>São Félix do Xingu</td>
													<td>698 Oriole Pass</td>
													<td>Hayes Boule</td>
													<td>Casper-Kerluke</td>
													<td>10/15/2017</td>
													<td>5</td>
													<td>1</td>
													<td nowrap="nowrap"></td>
												</tr>
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->				
</div>

