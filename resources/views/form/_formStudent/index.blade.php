<div class="row">
    <div class="col-md-12 py-2">
        <label for="nProcess">Nº de Processo</label>
        <input class="form-control" type="number" name="nProcess" id="nProcess" placeholder="Digite o Nº de Processo"
            value="{{ isset($student->nProcess) ? $student->nProcess : $total + 1 }}" readonly>
    </div>


    <div class="col-md-3 py-2">
        <label for="title">Nome Completo</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Nome Completo"
            required value="{{ isset($student->name) ? $student->name : old('name') }}">
    </div>
    <div class="col-md-3 py-2">
        <label for="father">Nome do Pai</label>
        <input class="form-control" type="text" name="father" id="father" placeholder="Digite o Nome do Pai"
            required value="{{ isset($student->father) ? $student->father : old('father') }}">
    </div>

    <div class="col-md-3 py-2">
        <label for="mother">Nome da Mâe</label>
        <input class="form-control" type="text" name="mother" id="mother" placeholder="Digite o Nome da mãe"
            required value="{{ isset($student->mother) ? $student->mother : old('mother') }}">
    </div>

    <div class="col-md-3 py-2">
        <label for="nBi">Nº do BI</label>
        <input class="form-control" type="text" name="nBi" id="nBi"
            placeholder="Digite o nº do Bilhete de Identidade" required
            value="{{ isset($student->nBi) ? $student->nBi : old('nBi') }}">
    </div>

    <div class="col-md-3 py-2">
        <label for="dateBirth">Data de Nascimento</label>
        <input class="form-control" type="date" name="dateBirth" id="dateBirth"
            placeholder="Digite a data de Nascimento" required
            value="{{ isset($student->dateBirth) ? $student->dateBirth : old('dateBirth') }}">
    </div>
    <div class="col-md-3 py-2">
        <label for="email">Endereço de E-mail</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="Digite o E-mail" required
            value="{{ isset($student->email) ? $student->email : old('email') }}">
    </div>
    <div class="col-md-6 py-2">
        <div class="row">
            <div class="col-6">
                <label for="genro">Contacto</label>
                <input class="form-control" type="text" name="contact" id="contact" placeholder="Digite o Número"
                    required value="{{ isset($student->contact) ? $student->contact : old('contact') }}">
            </div>
            <div class="col-6">
                <label for="sex">Sexo:</label>
        <select class="form-control" id="sex" name="sex">
            <option></option>
            <option value="Male"
                {{ isset($employee) && $employee->sex == 'Male' ? 'selected' : (old('sex') == 'Male' ? 'selected' : '') }}>
                Masculino</option>
            <option value="Female"
                {{ isset($employee) && $employee->sex == 'Female' ? 'selected' : (old('sex') == 'Female' ? 'selected' : '') }}>
                Feminino</option>
            <option value="Other"
                {{ isset($employee) && $employee->sex == 'Other' ? 'selected' : (old('sex') == 'Other' ? 'selected' : '') }}>
                Outro</option>
        </select>
            </div>
        </div>
    </div>

    <div class="col-md-3 py-2">
        <label for="arquive">Arquivo de Identificação</label>
        <input class="form-control" type="text" name="arquive" id="arquive" placeholder="Arquivo de Identificação"
            required value="{{ isset($student->arquive) ? $student->arquive : old('arquive') }}">
    </div>
    <div class="col-md-3 py-2">
        <label for="placeBaptism">Local do Baptismo</label>
        <input class="form-control" type="text" name="placeBaptism" id="placeBaptism" placeholder="Local do Baptismo"
            required value="{{ isset($student->placeBaptism) ? $student->placeBaptism : old('placeBaptism') }}">
    </div>

    <div class="col-md-3 py-2">
        <label for="confirmLocation">Local da Confirmação(Crisma)</label>
        <input class="form-control" type="text" name="confirmLocation" id="confirmLocation"
            placeholder="Local da Confirmação(Crisma)" required
            value="{{ isset($student->confirmLocation) ? $student->confirmLocation : old('confirmLocation') }}">
    </div>

    <div class="col-md-3 py-2">
       <label for="country">País</label>
                <select name="country" class="form-control" name="country" id="country">
                    <option value=""></option>
                    <option value="Afeganistão">Afeganistão</option>
                    <option value="Albânia">Albânia</option>
                    <option value="Argélia">Argélia</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola"
                        {{ isset($employee) && $employee->country == 'Angola' ? 'selected' : (old('country') == 'Angola' ? 'selected' : '') }}>
                        Angola</option>
                    <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armênia">Armênia</option>
                    <option value="Austrália">Austrália</option>
                    <option value="Áustria">Áustria</option>
                    <option value="Azerbaijão">Azerbaijão</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrein">Bahrein</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Bélgica">Bélgica</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Butão">Butão</option>
                    <option value="Bolívia">Bolívia</option>
                    <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                    <option value="Botsuana">Botsuana</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgária">Bulgária</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Camboja">Camboja</option>
                    <option value="Camarões">Camarões</option>
                    <option value="Canadá">Canadá</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="República Centro-Africana">República Centro-Africana</option>
                    <option value="Chade">Chade</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Colômbia">Colômbia</option>
                    <option value="Comores">Comores</option>
                    <option value="Congo">Congo</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croácia">Croácia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Chipre">Chipre</option>
                    <option value="República Tcheca">República Tcheca</option>
                    <option value="Costa do Marfim">Costa do Marfim</option>
                    <option value="Dinamarca">Dinamarca</option>
                    <option value="Djibuti">Djibuti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="República Dominicana">República Dominicana</option>
                    <option value="Equador">Equador</option>
                    <option value="Egito">Egito</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Guiné Equatorial">Guiné Equatorial</option>
                    <option value="Eritreia">Eritreia</option>
                    <option value="Estônia">Estônia</option>
                    <option value="Etiópia">Etiópia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finlândia">Finlândia</option>
                    <option value="França">França</option>
                    <option value="Gabão">Gabão</option>
                    <option value="Gâmbia">Gâmbia</option>
                    <option value="Geórgia">Geórgia</option>
                    <option value="Alemanha">Alemanha</option>
                    <option value="Gana">Gana</option>
                    <option value="Grécia">Grécia</option>
                    <option value="Granada">Granada</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guiné">Guiné</option>
                    <option value="Guiné-Bissau">Guiné-Bissau</option>
                    <option value="Guiana">Guiana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hungria">Hungria</option>
                    <option value="Islândia">Islândia</option>
                    <option value="Índia">Índia</option>
                    <option value="Indonésia">Indonésia</option>
                    <option value="Irã">Irã</option>
                    <option value="Iraque">Iraque</option>
                    <option value="Irlanda">Irlanda</option>
                    <option value="Israel">Israel</option>
                    <option value="Itália">Itália</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japão">Japão</option>
                    <option value="Jordânia">Jordânia</option>
                    <option value="Cazaquistão">Cazaquistão</option>
                    <option value="Quênia">Quênia</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Quirguistão">Quirguistão</option>
                    <option value="Laos">Laos</option>
                    <option value="Letônia">Letônia</option>
                    <option value="Líbano">Líbano</option>
                    <option value="Lesoto">Lesoto</option>
                    <option value="Libéria">Libéria</option>
                    <option value="Líbia">Líbia</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lituânia">Lituânia</option>
                    <option value="Luxemburgo">Luxemburgo</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malásia">Malásia</option>
                    <option value="Maldivas">Maldivas</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Ilhas Marshall">Ilhas Marshall</option>
                    <option value="Mauritânia">Mauritânia</option>
                    <option value="Maurícia">Maurícia</option>
                    <option value="México">México</option>
                    <option value="Micronésia">Micronésia</option>
                    <option value="Moldávia">Moldávia</option>
                    <option value="Mônaco">Mônaco</option>
                    <option value="Mongólia">Mongólia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Marrocos">Marrocos</option>
                    <option value="Moçambique">Moçambique</option>
                    <option value="Mianmar">Mianmar</option>
                    <option value="Namíbia">Namíbia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Holanda">Holanda</option>
                    <option value="Nova Zelândia">Nova Zelândia</option>
                    <option value="Nicarágua">Nicarágua</option>
                    <option value="Níger">Níger</option>
                    <option value="Nigéria">Nigéria</option>
                    <option value="Coreia do Norte">Coreia do Norte</option>
                    <option value="Macedônia do Norte">Macedônia do Norte</option>
                    <option value="Noruega">Noruega</option>
                    <option value="Omã">Omã</option>
                    <option value="Paquistão">Paquistão</option>
                    <option value="Palau">Palau</option>
                    <option value="Panamá">Panamá</option>
                    <option value="Papua Nova Guiné">Papua Nova Guiné</option>
                    <option value="Paraguai">Paraguai</option>
                    <option value="Peru">Peru</option>
                    <option value="Filipinas">Filipinas</option>
                    <option value="Polônia">Polônia</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Catar">Catar</option>
                    <option value="Coreia do Sul">Coreia do Sul</option>
                    <option value="Romênia">Romênia</option>
                    <option value="Rússia">Rússia</option>
                    <option value="Ruanda">Ruanda</option>
                    <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
                    <option value="Santa Lúcia">Santa Lúcia</option>
                    <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                    <option value="Arábia Saudita">Arábia Saudita</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Sérvia">Sérvia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Serra Leoa">Serra Leoa</option>
                    <option value="Singapura">Singapura</option>
                    <option value="Eslováquia">Eslováquia</option>
                    <option value="Eslovênia">Eslovênia</option>
                    <option value="Ilhas Salomão">Ilhas Salomão</option>
                    <option value="Somália">Somália</option>
                    <option value="África do Sul">África do Sul</option>
                    <option value="Sudão do Sul">Sudão do Sul</option>
                    <option value="Espanha">Espanha</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudão">Sudão</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Eswatini">Eswatini</option>
                    <option value="Suécia">Suécia</option>
                    <option value="Suíça">Suíça</option>
                    <option value="Síria">Síria</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajiquistão">Tajiquistão</option>
                    <option value="Tanzânia">Tanzânia</option>
                    <option value="Tailândia">Tailândia</option>
                    <option value="Timor-Leste">Timor-Leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad e Tobago">Trinidad e Tobago</option>
                    <option value="Tunísia">Tunísia</option>
                    <option value="Turquia">Turquia</option>
                    <option value="Turcomenistão">Turcomenistão</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ucrânia">Ucrânia</option>
                    <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                    <option value="Reino Unido">Reino Unido</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                    <option value="Uruguai">Uruguai</option>
                    <option value="Uzbequistão">Uzbequistão</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vaticano">Vaticano</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnã">Vietnã</option>
                    <option value="Iêmen">Iêmen</option>
                    <option value="Zâmbia">Zâmbia</option>
                    <option value="Zimbábue">Zimbábue</option>
                </select>

    </div>



 <div class="col-md-3 py-2">
        <label for="parish">Nome da Paróquia</label>
        <input class="form-control" type="text" name="parish" id="name" placeholder="Nome da Paróquia"
            required value="{{ isset($student->parish) ? $student->parish : old('parish') }}">
    </div>
    <div class="col-md-3 py-2">
        <label for="responsible">Responsável dos Vocacionados</label>
        <input class="form-control" type="text" name="responsible" id="responsible" placeholder="Responsável dos Vocacionados"
            required value="{{ isset($student->responsible) ? $student->responsible : old('responsible') }}">
    </div>

    <div class="col-md-3 py-2">
        <label for="mother">Nome da Mâe</label>
        <input class="form-control" type="text" name="mother" id="mother" placeholder="Digite o Nome da mãe"
            required value="{{ isset($student->mother) ? $student->mother : old('mother') }}">
    </div>

    <div class="col-md-3 py-2">
        <label for="nBi">Nº do BI</label>
        <input class="form-control" type="text" name="nBi" id="nBi"
            placeholder="Digite o nº do Bilhete de Identidade" required
            value="{{ isset($student->nBi) ? $student->nBi : old('nBi') }}">
    </div>

























    <div class="col-md-6 py-2">
        <label for="schoolyear">Escolha o Ano lectivo</label>
        <select class="form-control" name="schoolyear" id="schoolyear" required>
            <option {{ isset($student) ? '' : 'selected' }}></option>
            @foreach ($schoolyear as $item)
                <option value="{{ $item->name }}"
                    {{ isset($student) && $student->schoolyear == $item->name ? 'selected' : (old('schoolyear') == $item->name ? 'selected' : '') }}>
                    {{ $item->name }}</option>
            @endforeach
        </select>
    </div>









    <div class="col-md-6 py-2"></div>

    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($student) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
