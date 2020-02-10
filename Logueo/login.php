<div class="modal" id="login" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form action="Logueo/loguear.php" method="POST">
      <div class="modal-body">
        <label for="title" class="control-label">USUARIO:</label>
        <input type="text" name="usuario" class="form-control"  placeholder="USUARIO" required>
        <label for="title" class="control-label">CONTRASEÑA:</label>
        <input type="password" name="clave" class="form-control"  placeholder="CONTRASEÑA" required>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        <button type="sumbit" class="btn btn-primary" id="INICIAR" >INICIAR</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal" id="registro" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

