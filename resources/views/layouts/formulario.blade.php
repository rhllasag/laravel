<form class="form-horizontal" role="form">
  {{csrf_field()}}
  <div class="form-group">
    <label for="mensaje" class="col-lg-2 control-label">Mensaje</label>
    <div class="col-lg-10">
      <input type="email" class="form-control" id="mensaje"
             placeholder="Mensaje">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Entrar</button>
    </div>
  </div>
</form>
