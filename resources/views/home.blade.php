@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Toko Obat</div>
                <div class="panel-body">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.watsons.co.id/medias/sys_master/front/zoom/8890369212446.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Mylanta</h5>
                        <p class="card-text">Obat Maag</p>
                        <p class="card-text">Stok : 10</p>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    Selamat Datang !

</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget
          var recipient = button.data('whatever')
          var modal = $(this) 
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
      })
  </script>
  @endsection
