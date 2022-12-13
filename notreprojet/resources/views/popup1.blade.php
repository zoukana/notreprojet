@extends('layouts.commun')
@section('content')


  <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
             <div><h5 class="modal-title" style="color: red;;">Voulez_vous vraiment vous déconnecter</h5></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><a href="/post"></a>&times;</span>
                </button>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">  <a href="/" data-dismiss="modal">OUI</a></button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">   <a href="/api/post">NON</a></button>


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
