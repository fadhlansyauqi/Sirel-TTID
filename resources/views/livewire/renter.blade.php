<div>
    <div class="card card-custom">
        <div class="card-header">
         <h3 class="card-title">
          Base Controls
         </h3>
         <div class="card-toolbar">
          <div class="example-tools justify-content-center">
           <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
           <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
          </div>
         </div>
        </div>
        <!--begin::Form-->
        <form>
         <div class="card-body">
          <div class="form-group">
            <label>Name <span class="text-danger">*</span></label>
            <input type="text" wire:model="name" class="form-control" name="name" placeholder="Enter Name"/>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
           </div>
          <div class="form-group">
           <label>Email address <span class="text-danger">*</span></label>
           <input type="email" wire:model="email" class="form-control" name="email" placeholder="Enter email"/>
           <span class="form-text text-muted">We'll never share your email with anyone else.</span>
           @error('email') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group">
           <label>Phone <span class="text-danger">*</span></label>
           <input type="text" wire:model="phone" class="form-control" name="phone" placeholder="Enter Phone"/>
           @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group mb-1">
           <label >Address <span class="text-danger">*</span></label>
           <textarea wire:model="address" class="form-control" name="address" rows="3"></textarea>
           @error('address') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
         </div>
         <div class="card-footer">
          <button type="submit" wire:click="store" class="btn btn-primary mr-2">Submit</button>
          <button type="reset" class="btn btn-secondary">Cancel</button>
         </div>
        </form>
        <!--end::Form-->
       </div>
</div>
