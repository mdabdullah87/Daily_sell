
@extends('layouts.backendapp')

  
@section('content')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



    @livewire('product.sellproduct-component')

    <script>
        $('.select2').select2();
    </script>
@endsection

@section('script')
<script>
    window.addEventListener('success', event => {
     $("#exampleModal").modal('show');                
})


    window.addEventListener('closeModel', event => {
     $("#exampleModal").modal('hide');                
})


window.addEventListener('refresh', event => {
   
    window.location.reload();
})




</script>
@endsection