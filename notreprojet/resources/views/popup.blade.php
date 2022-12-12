@extends('layouts.commun')
@section('content')

{{-- <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}

  <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
             <div><h5 class="modal-title" style="color: green; margin-left:140px;">Inscription reussi </h5></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><a href="/post"></a>&times;</span>
                </button>
            </div>
            <div class="modal-body" style="display: flex;justify-content:center;">
             Voulez-vous connecter
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">  <a href="/" data-dismiss="modal">OUI</a></button>

                <button type="button" class="btn btn-dark" data-dismiss="modal">   <a href="/post">NON</a></button>


          </div>
        </div>
    </div>
</div>

  <script type="text/javascript">
    window.onload = function () {
        OpenBootstrapPopup();
    };
    function OpenBootstrapPopup() {
        $("#simpleModal").modal('show');
    }
</script>
@endsection
