

<div class="row">
    <div class="col-md-4 py-2">
        <label for="title">Nome do Responsavel do Estudante</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Responsavel do Estudante"
            required value="{{ isset($responsibles->name) ? $responsibles->name : old('name') }}">
    </div>
    <div class="col-md-4 py-2">
        <label for="religion">Religiâo</label>
        <input class="form-control" type="religion" name="religion" id="religion"
            placeholder="Digite a Religiâo" required
            value="{{ isset($responsibles->religion) ? $responsibles->religion : old('religion') }}">
    </div>

 <div class="col-md-4 py-2">
        <label for="nBi">Contacto</label>
        <input class="form-control" type="text" name="phone" id="phone"
            placeholder="Digite os Contactos" required
            value="{{ isset($responsibles->phone) ? $responsibles->phone : old('phone') }}">
    </div>

    <div class="col-md-4 py-2">
        <label for="email">Email do Responsável</label>
        <input class="form-control" type="email" name="email" id="email"
            placeholder="Digite o Email" required
            value="{{ isset($responsibles->email) ? $responsibles->email : old('email') }}">
    </div>

   <div class="col-md-4 py-2">
        <label for="title">Ocupação </label>
        <input class="form-control" type="text" name="occupation" id="name" placeholder="Digite a Ocupação"
            required value="{{ isset($responsibles->occupation) ? $responsibles->occupation : old('occupation') }}">
    </div>

    <div class="col-md-4 py-2">
        <label for="religion">Endereço</label>
        <input class="form-control" type="text" name="address" id="address"
            placeholder="Digite o Endereço" required
            value="{{ isset($responsibles->address) ? $responsibles->address : old('address') }}">
    </div>

    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($responsibles) ? 'Guardar' : 'Cadastrar' }}</button>
    </div>

</div>
