
@extends('layouts.backendapp')

  
@section('content')


    @livewire('suplier.suplier-component')


@endsection

@section('script')
<script>
    window.addEventListener('closeModal', event => {
     $("#staticBackdrop").modal('hide');                
})
</script>
@endsection