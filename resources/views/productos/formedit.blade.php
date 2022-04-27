<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codprod">Código</label>
            <input type="text" name="codprod" class="form-control form-control-sm col-sm-4" id="codprod" value="{{ $productos->codprod }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nombreprod">Nombre del Producto</label>
            <input type="text" name="nombreprod" class="form-control form-control-sm col-sm-10" id="nombreprod" value="{{ $productos->nombreprod }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="descriprod">Descripción</label>
            <input type="text" name="descriprod" class="form-control form-control-sm col-sm-10" id="nombreprod" value="{{ $productos->descriprod }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="typprod">Tipo de Producto</label>
            <input type="text" name="typprod" class="form-control form-control-sm col-sm-10" id="typprod" value="{{ $productos->typprod }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="costunit">Costo Unitario</label>
            <input type="number" name="costunit" class="form-control form-control-sm col-sm-4" id="costunit" step="0000.0001" value="{{ $productos->costunit }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="cantprod">Cantidad</label>
            <input type="number" name="cantprod" class="form-control form-control-sm col-sm-4" id="cantprod" value="{{ $productos->cantprod }}">
        </div>
    </div>
</div>
<div class="modal-footer">
    <a href="{{ route('productos') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
</div>