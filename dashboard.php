<?php 



?>

<style>
.card {
    width: 25%;
    height: 200px;
    box-shadow: 0 0 6px 1px #c5c5c5;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.content-card {
    display: flex;
    align-items: center;
}

.valor_card {
    font-size: 50px;
    text-align: center;
}

.desc_card {
    text-align: center;
    font-size: 20px;
}

.cards_relatorio {
    display: flex;
    gap: 20px;
}
</style>

<div class="cards_relatorio">

<div class="card">
        <h2 class="valor_card text-success">
            R$ 1.000
        </h2>
        <span class="desc_card">Recebido</span>
        <a href="pagina1.html" class="btn-primary">Visualizar</a>
</div>

<div class="card">
        <h2 class="valor_card text-info">
            R$ 1.000
        </h2>
        <span class="desc_card">Em aberto</span>
        <a href="pagina1.html" class="btn-primary">Visualizar</a>
</div>

<div class="card">
        <h2 class="valor_card text-danger">
            R$ 1.000
        </h2>
        <span class="desc_card">Em atraso</span>
        <a href="pagina1.html" class="btn-primary">Visualizar</a>
</div>

<div class="card">
        <h2 class="valor_card text-secondary">
            R$ 1.000
        </h2>
        <span class="desc_card">Cancelado</span>
        <a href="pagina1.html" class="btn-primary">Visualizar</a>
</div>

</div>