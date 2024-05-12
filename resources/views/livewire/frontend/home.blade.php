<div>

<section>
        <div class="d-flex justify-content-center align-items-center">
            <div>
                <div class="fs-3 fw-bolder">Our Visa Partner</div>
                <div class="fs-5 fw-bolder ms-5">NEED VISA...??</div>
         
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="container border rounded shadow p-2 mt-4 mb-5 bg-light">
            <form wire:submit="save" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 p-4 m-3 mt-2 mb-2">
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-3">
                               <label for=""></label>
                               <div class="text-danger">
                                            @error('citizen') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                <select id="citizen" class="form-select"
                                    wire:model.live="citizen"value="{{ old('citizen') }}">
                                    <option value="">Select One...</option>
                                    @foreach($citizens as $citizen)
                                    <option value="{{ $citizen->id }}">{{ $citizen->citizen }}</option>
                                    @endforeach
                                   
                                </select>
                              
                                <!-- Create Post Form -->
                            </div>

                            <div class="col-sm-3">
                            <label for=""></label>
                            <div class="text-danger">
                                            @error('travelling') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                <select class="form-select" wire:model="travelling" id="travelling">
                                    <option value="">Select One...</option>
                                    @foreach($travellings as $citizen)
                                    <option value="{{ $citizen->id }}">{{ $citizen->travelling }}</option>
                                    @endforeach
                                </select>
                              

                            </div>

                            <div class="col-sm-3">
                              <label for=""></label>
                              <div class="text-danger">
                                            @error('visa') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                <select class="form-select" wire:model="visa"  id="visa">
                                    <option value="">Select One...</option>
                                  
                                </select>
                              
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-primary btn-lg mt-4">check
                                    Requirement</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>



    <script>
        $(document).ready(function() {

            $('#travelling').change(function(e) {

                let travelling_id = $(this).val();

                // alert(travelling_id);

                $.ajax({
                    type: 'post',
                    url: '/travelling',
                    data: 'data=' + travelling_id + '&_token={{ csrf_token() }}',
                    success: function(result) {

                        $('#visa').html(result);

                    }
                });

            });

        });
    </script>



</div>
