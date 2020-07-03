<div class="container-discover" id="targetPage">
    <h1>ESCOLHA O PÚBLICO ALVO</h1>
    <h5>Para um resultado mais preciso escolha apenas um público alvo</h5>
    <form action='{{route("targetController")}}' class='form' name="targetForm">
        <div class='field'>
            <ul class='checkboxes'>
                <li class='checkbox'>
                    <input class='checkbox-input' id='target0' name='target[]' type='radio' value='Infantil'>
                    <label class='checkbox-label' for='target0'>Infantil</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='target1' name='target[]' type='radio' value='Jovem'>
                    <label class='checkbox-label' for='target1'>Jovem</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='target2' name='target[]' type='radio' value='Adulto'>
                    <label class='checkbox-label' for='target2'>Adulto</label>
                </li>
            </ul>
            <button type="submit" class="btn-discover btn btn-light btn-continue">Prosseguir</button>
        </div>
    </form>
</div>
