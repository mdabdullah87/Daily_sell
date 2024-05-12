
@extends('layouts.backendapp')

  
@section('content')


    @livewire('product.product-component')


@endsection


@section('script')
<script>
    window.addEventListener('closeModal', event => {
     $("#staticBackdrop").modal('hide');                
})
</script>
@endsection