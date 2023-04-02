{{--  
 @if ($message = Session::get('success'))
  <div class="toast" style="position: absolute; top: 30px; right: 30px; z-index:9999">
    <div class="toast-header bg-success" data-delay="10000">
      <img src="{{ asset('assets/backend/img/others/img1-dark.png') }}" class="rounded mr-2" alt="...">
      <strong class="mr-auto">Stowaa</strong>
      <small>1s ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      {{ $message }}
    </div>
  </div>
 @endif

 
@section('toast-js')
<script>
 $('.toast').toast('show')
</script>
@endsection --}}
     

@if($message = Session::get('success'))
<div id="toast" style="z-index: 99999999">
  <div class="toast-body">
      <h4>{{ $message }}</h4>
  </div>
</div>
@endif