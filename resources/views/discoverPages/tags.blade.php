<div class="container-discover" id="tagsPage">
    <h1>ESCOLHA AS TAGS</h1>
    <h5>Para um resultado mais preciso escolha no mínimo uma tag e no máximo duas tags</h5>
    <form action='{{route("tagsController")}}' class='form' name="tagsForm">
        <div class='field'>
            <ul class='checkboxes'>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags1' name='tags[]' type='checkbox' value='Nacional'>
                    <label class='checkbox-label' for='tags1'>Nacional</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags2' name='tags[]' type='checkbox' value='Parte corações'>
                    <label class='checkbox-label' for='tags2'>Parte corações</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags3' name='tags[]' type='checkbox' value='Divertido'>
                    <label class='checkbox-label' for='tags3'>Divertido</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags4' name='tags[]' type='checkbox' value='Diversidade'>
                    <label class='checkbox-label' for='tags4'>Diversidade</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags5' name='tags[]' type='checkbox' value='Empolgante'>
                    <label class='checkbox-label' for='tags5'>Empolgante</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags6' name='tags[]' type='checkbox' value='Violência'>
                    <label class='checkbox-label' for='tags6'>Violência</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags7' name='tags[]' type='checkbox' value='Crime'>
                    <label class='checkbox-label' for='tags7'>Crime</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags8' name='tags[]' type='checkbox' value='Para shippar'>
                    <label class='checkbox-label' for='tags8'>Para shippar</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags9' name='tags[]' type='checkbox' value='Saga'>
                    <label class='checkbox-label' for='tags9'>Saga</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags10' name='tags[]' type='checkbox' value='Para viajar'>
                    <label class='checkbox-label' for='tags10'>Para viajar</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags11' name='tags[]' type='checkbox' value='Leitura rápida'>
                    <label class='checkbox-label' for='tags11'>Leitura rápida</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags12' name='tags[]' type='checkbox' value='Picante'>
                    <label class='checkbox-label' for='tags12'>Picante</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags13' name='tags[]' type='checkbox' value='Fatos reais'>
                    <label class='checkbox-label' for='tags13'>Fatos reais</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags14' name='tags[]' type='checkbox' value='Popular'>
                    <label class='checkbox-label' for='tags14'>Popular</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags15' name='tags[]' type='checkbox' value='Para refletir'>
                    <label class='checkbox-label' for='tags15'>Para refletir</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags16' name='tags[]' type='checkbox' value='Premiado'>
                    <label class='checkbox-label' for='tags16'>Premiado</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags17' name='tags[]' type='checkbox' value='Capa bonita'>
                    <label class='checkbox-label' for='tags17'>Capa bonita</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='tags18' name='tags[]' type='checkbox' value='?'>
                    <label class='checkbox-label' for='tags18'>?</label>
                </li>

            </ul>
            <button type="submit" class="btn-discover btn btn-light btn-continue">Prosseguir</button>
        </div>
    </form>
</div>
