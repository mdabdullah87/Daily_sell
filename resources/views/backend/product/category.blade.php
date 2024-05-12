
@extends('layouts.backendapp')

  
@section('content')


    @livewire('category.category-component')


@endsection

@section('script')
<script>
    window.addEventListener('closeModal', event => {
     $("#staticBackdrop").modal('hide');                
})
</script>
@endsection