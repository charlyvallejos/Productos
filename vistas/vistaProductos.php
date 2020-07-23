<div ng-controller="productosController">
    <div class="panel" ng-init="consultaProductos()">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9 col-xs-9">
                    <input type="search" ng-model="buscar" class="form-control" placeholder="Buscar">
                </div>
                <div class="col-md-3 col-xs-3">
                    <label for="itemsPorPag">Productos por pagina</label>
                    <select id="itemsPorPag" ng-model="NumxPag">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>                                
                    </select>
                </div>                
            </div>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th ng-click="sort('Codigo_Producto')">Codigo</th>
                        <th ng-click="sort('Descripcion_Producto')">Descripcion</th>
                        <th ng-click="sort('Ume_Vta')">Ume Vta</th>
                        <th ng-click="sort('Minimo')" class="centrar">Minimo</th>
                        <th ng-click="sort('Precio')">Precio</th>
                        <th ng-click="sort('Rubro_Vta')">Rubro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate="pro in productos | filter:buscar|orderBy:sortKey:reverse | itemsPerPage: numXpag" pagination-id="prod">
                        <td>{{pro.Codigo_Producto}}</td>
                        <td>{{pro.Descripcion_Producto}}</td>
                        <td>{{pro.Ume_Vta}}</td>
                        <td>{{pro.Minimo}}</td>
                        <td>{{pro.Precio}}</td>
                        <td>{{pro.Rubro_Vta}}</td>
                    </tr>
                </tbody>                
            </table> 
            <dir-pagination-controls pagination-id="prod" boundary-links="true"> </dir-pagination-controls>
        </div>        
    </div>    
</div>
