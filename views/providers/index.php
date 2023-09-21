<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=providers&m=create" class="btn btn-primary">Crear nuevo proveedor</a>
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
        <?php
        // datos simulados en un arreglo ya que no hay base de datos conectada aun
        $datos = [
            ['id' => 1, 'nombre' => 'corona', 'nit' => '860.500.480-8', 'direccion' => 'Avenida Calle 26 # 86 - 85', 'telefono' => '404 88 84', 'logo' => 'assets/images/logosproveedor/logo_corona.png'],
            ['id' => 2, 'nombre' => 'corona', 'nit' => '860.500.480-8', 'direccion' => 'Avenida Calle 26 # 86 - 85', 'telefono' => '404 88 84', 'logo' => 'assets/images/carretilla.jpeg'],
            ['id' => 3, 'nombre' => 'Pisos Alfa', 'nit' => ' 860032550', 'direccion' => 'Av. Caracas #45 - 03 sur ', 'telefono' => '318 8007990', 'logo' => 'assets/images/logosproveedor/logoalfa.jpg']
            // ... aqui podriamos poner mas arreglos para llenar datos
        ];

        foreach ($datos as $empresa) {
            echo '<tr>';
            echo '<td>' . $empresa['id'] . '</td>';
            echo '<td>' . $empresa['nombre'] . '</td>';
            echo '<td>' . $empresa['nit'] . '</td>';
            echo '<td>' . $empresa['direccion'] . '</td>';
            echo '<td>' . $empresa['telefono'] . '</td>';
            echo '<td><img src="' . $empresa['logo'] . '" alt="Logo" width="50" height="30"></td>';
            echo '<td>
            <a href="?c=providers&amp;m=show" class="btn btn-sm btn-info">Detalles</a>
            <a href="?c=providers&amp;m=edit" class="btn btn-sm btn-warning">Editar</a>
            <a href="" class="btn btn-sm btn-danger">Eliminar</a>
        </td>';
            echo '</tr>';
        }
        ?>
    
    </

   
</tbody>
                                
                            </table>
                          </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>