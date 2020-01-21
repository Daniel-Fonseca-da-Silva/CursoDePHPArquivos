<div class="titulo">Integração CSS</div>

<h1>
    <?php
       echo 'Olá '; 
       echo '<small>';
       echo 'Mundo';
       echo '<small/>'; 
    ?>

</h1>

<?= "<div>Outra forma de me 'expressar'!</div>"?>

<br>
<div center>
    <button dobro>
        <?= "legal"?>
    </button>
</div>

<style>
    button{
        padding: 5px <?= 2 * 10?>px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #eee;
    }
    [dobro]{
        font-size: <?= 10 -5 ?>rem;
    }
</style>