<div class="modal fade" id="myModal{{$productos->id}}" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center;">Quitar Producto de
                    Novedad</h4>
            </div>
            <div class="modal-body">
                <form
                    action="{{route( 'admin.productos.productoPromocion', $productos->id )}}"
                    method="POST" style="margin-block-end:-1em !important;">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="promocion" value="no">
                    <h4>Quitar de Lista de Promoción </h4><br>
                    <h5 style="text-align: center;">
                        {{ strtoupper($productos->nombre_producto) }}</h5><br>
                    <div class="row" style="display: block;">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger"
                                style="width: 100% !important; ">
                                <i class="fa fa-close" aria-hidden="true"></i>
                                &nbsp; Quitar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>