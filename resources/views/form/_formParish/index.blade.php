<div class="row">
    <div class="col-md-4 py-2">
        <label for="name">Nome</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Nome da Paróquia" required
            value="{{ isset($parishes->name) ? $parishes->name : old('name') }}">
    </div>
    <div class="col-md-4 py-2">
        <label for="duration">Contactos</label>
        <input class="form-control" type="text" name="phone" id="phone" placeholder="Digite o Contacto da Paróquia"
            required value="{{ isset($parishes->phone) ? $parishes->phone : old('phone') }}">
    </div>
     <div class="col-md-4 py-2">
        <label for="duration">Endereço da Paróquia</label>
        <input class="form-control" type="text" name="address" id="address" placeholder="Digite o Endereço da Paróquia"
            required value="{{ isset($parishes->address) ? $parishes->address : old('address') }}">
    </div>
    <div class="col-md-12 py-2">
        <label for="details">Alguns Detalhes sobe a Paróquia</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5"
            placeholder="Digite os Detalhes">{{ isset($parishes->details) ? $parishes->details : old('details') }}</textarea>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($parishes) ? 'Guardar' : 'Cadastrar' }}</button>
    </div>

</div>
