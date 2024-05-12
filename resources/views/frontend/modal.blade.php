<div>
                <!--Bootstrap Modal-->
                <div class="float-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now
                    </button>
                    <!-- Modal -->
                    <div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Add Origin for car</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
   <!--Form start With Model--->

   <div class="mt-2">
                                        <div class="card">
                                            <div class="card-body">

                                    
                                                <form action="{{ route('visa.apply') }}">
                                                <div class="text-danger">
                                            @error('name') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                                    <div class="p-2 m-2">
                                                        <label for="" class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="country">
                                                    </div>
                                                    <div class="text-danger">
                                            @error('mobaile') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                                    <div class="p-2 m-2">
                                                        <label for="" class="form-label">Mobaile</label>
                                                        <input type="text" name="mobaile" class="form-control" placeholder="country">
                                                    </div>
                                                    <div class="text-danger">
                                            @error('email') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                                    <div class="p-2 m-2">
                                                        <label for="" class="form-label">Email</label>
                                                        <input type="text" wire:model.live="email" class="form-control" placeholder="country">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary">Submit</button>
                            </form>
                <!--Model form End-->   
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>