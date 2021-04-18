<?php require DIR.'views/top.php'; ?>

<h6 style="color: green;"> Data from API can be refreshed every 10 s </h6>

<h1>Foreign exchange rates with currency conversion</h1>

<h4> CURRENCIES </h4>
<form action="<?= URL ?>refresh/new" method="">
    <button type="submit">Refresh exchange rates</button>
</form>
<!-- <?php 
    // print 'OHO';
    // _dc($data->data->base);

?> -->
<h4> BASE currency: <?= $data->data->base ?> </h4>


<form action="<?= URL ?>compare" method="post">
    EUR to <input list="currency" name="currency">
    <datalist id="currency">
        <?php foreach($data->data->rates as $key => $_) : ?>
            <option value="<?= $key ?>"></option>
        <?php endforeach ?>
    </datalist>
    <input type="submit">
</form>


<ul style="padding: 10px; color: brown">
    <?php if( !empty($_POST) && !empty($_POST['currency']) ) : ?>
        <span>EUR to <?= $_POST['currency']?> : <?= $data->data->rates->{$_POST['currency']} ?> </span>
        <?php unset($_POST); ?>
    <?php endif ?>
</ul>
    

<ul>
    <?php foreach($data->data->rates as $key => $value) : ?>
        <li style="padding: 5px">
            <span><?= $key ?>: <?= $value ?></span>
        </li>
    <?php endforeach ?>
</ul>


<?php require DIR.'views/bottom.php'; ?>