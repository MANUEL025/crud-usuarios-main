<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=users&m=index" class="btn btn-link">← Cancelar o volver</a>
                          <form action="">
                            <div class="form-group mt-3">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Documento</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Direccion</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Telefono</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Estado</label>
                                <select [(ngModel)]="model">

                                
                                    <option *ngFor="let item of list" [value]="item">desactivado</option>
                                    <option *ngFor="let item of list" [value]="item">activo</option>
                                </select> 
                            </div>
                            <button class="btn btn-primary w-100 mt-4">Guardar cambios</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->