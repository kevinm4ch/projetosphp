<?php 
defined('CONTROL') or die('Acesso negado');

// get all countrie data
$api = new ApiConsumer();

$countries = $api->get_all_countries();

?>

<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h1>Países do Mundo</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-4">
                <p>Lista de Países</p>
                <select id="select_country" class="form-select">
                    <option value="">Selecione um país</option>
                    <?php foreach($countries as $country): ?>
                        <option value="<?=$country?>"><?=$country?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // country select
        const select_country = document.querySelector("#select_country");
        console.log('cheguei aqui');
        select_country.addEventListener('change', () => {
            const country = select_country.value;
            console.log('cheguei');
            window.location.href = `?route=country&country_name=${country}`;
        });
    });

</script>

