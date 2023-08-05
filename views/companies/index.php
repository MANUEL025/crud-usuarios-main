<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=companies&m=create" class="btn btn-primary">Crear nuevo compañia</a>
                          <div class="table-responsive mt-4">
                            <table class="table table-border table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>NIT</th>
                                        <th>DIRECCION</th>
                                        <th>TELEFONO</th>
                                        <th>LOGO</th>
                                        <th width="260">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1;$i<10;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>Coca Cola</td>
                                        <td>5512521-2</td>
                                        <td>Calle falsa 1 2 3</td>
                                        <td>0800045215154</td>
                                        <td> 
                                        <img src="assets/images/logococa.jpeg" alt="" width="50px">
                                            
                                        </td>
                                        <td>
                                            <a href="?c=companies&m=show" class="btn btn-sm btn-info">Detalles</a>
                                            <a href="?c=companies&m=edit" class="btn btn-sm btn-warning">Editar</a>
                                            <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                          </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>