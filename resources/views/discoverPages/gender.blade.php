<div class="container-discover" id="genrePage">
    <h1>ESCOLHA UM GÊNERO</h1>
    <form action='{{route("genreController")}}' class='form' name="genreForm">
        <div class='field'>
            <ul class='checkboxes'>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice0' name="genre[]" type='checkbox' value='Autoajuda'>
                    <label class='checkbox-label' for='choice0'>Autoajuda</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice1' name='genre[]' type='checkbox' value='Aventura'>
                    <label class='checkbox-label' for='choice1'>Aventura</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice2' name='genre[]' type='checkbox' value='Ação'>
                    <label class='checkbox-label' for='choice2'>Ação</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice3' name='genre[]' type='checkbox' value='Biografia'>
                    <label class='checkbox-label' for='choice3'>Biografia</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice4' name='genre[]' type='checkbox' value='Conto'>
                    <label class='checkbox-label' for='choice4'>Conto</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice5' name='genre[]' type='checkbox' value='Fantasia'>
                    <label class='checkbox-label' for='choice5'>Fantasia</label>
                </li>

                <li class='checkbox'>
                    <input class='checkbox-input' id='choice6' name='genre[]' type='checkbox' value='Sci-fi'>
                    <label class='checkbox-label' for='choice6'>Sci-fi</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice7' name='genre[]' type='checkbox' value='Humor'>
                    <label class='checkbox-label' for='choice7'>Humor</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice8' name='genre[]' type='checkbox' value='Mangás/HQs'>
                    <label class='checkbox-label' for='choice8'>Mangás/HQs</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice9' name='genre[]' type='checkbox' value='Suspense'>
                    <label class='checkbox-label' for='choice9'>Suspense</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice10' name='genre[]' type='checkbox' value='Mistério'>
                    <label class='checkbox-label' for='choice10'>Mistério</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice11' name='genre[]' type='checkbox' value='Religião'>
                    <label class='checkbox-label' for='choice11'>Religião</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice12' name='genre[]' type='checkbox' value='Romance'>
                    <label class='checkbox-label' for='choice12'>Romance</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice13' name='genre[]' type='checkbox' value='Terror'>
                    <label class='checkbox-label' for='choice13'>Terror</label>
                </li>
                <li class='checkbox'>
                    <input class='checkbox-input' id='choice14' name='genre[]' type='checkbox' value='?'>
                    <label class='checkbox-label' for='choice14'>?</label>
                </li>
            </ul>
            <button type="submit" class="btn-discover btn btn-light btn-continue">Prosseguir</button>
        </div>
    </form>
</div>
