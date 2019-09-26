<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="requerido">Primer Nombre</label>
            <input type="text" name="first_name" class="form-control" style="width: 100%;" value="{{old('first_name')}}" required>
        </div>
        <div class="form-group">
            <label class="requerido">Compañia</label>
            <select name="companies_id"  class="form-control select2" style="width: 100%;">
                <option>Selecione</option>
                
                    <option value="">Companies</option>
                
            </select>
        </div>
        <div class="form-group">
            <label class="requerido">Celular</label>
            <input type="text" name="phone" class="form-control" style="width: 100%;" value="{{old('phone')}}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="requerido">Segundo Nombre</label>
            <input type="text" name="last_name" class="form-control" style="width: 100%;" value="{{old('last_name')}}" required>
        </div>
        <div class="form-group">
            <label class="requerido">Correo</label>
            <input type="text" name="email" class="form-control" style="width: 100%;" value="{{old('email')}}" required>
        </div>
    </div>
</div>