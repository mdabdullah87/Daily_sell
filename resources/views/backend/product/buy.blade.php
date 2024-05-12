
@extends('layouts.backendapp')

  
@section('content')


    @livewire('product.buy-component')


@endsection

@section('script')
<script>
    window.addEventListener('closeModal', event => {
     $("#staticBackdrop").modal('hide');                
})
</script>
@endsection