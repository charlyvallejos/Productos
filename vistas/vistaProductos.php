<div ng-controller="productosController">
    <div class="panel" ng-init="">
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                    </tr>
                </tbody>                
            </table>            
        </div>        
    </div>    
</div>
