
@extends('layouts.backendapp')

  
@section('content')


    @livewire('customer.customer-component')


@endsection

@section('script')
<script>
    window.addEventListener('closeModal', event => {
     $("#staticBackdrop").modal('hide');                
})
</script>
@endsection