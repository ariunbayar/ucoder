<?php require 'helpers.php' ?>
<?php ob_start() ?>

<h1>Өнөөдрийн хөтөлбөр</h1>

Өглөө 10:00-с эхэлж 16:00-д дуусна.<br/>
Энэ удаад бид <a href="http://www.spoj.com/ABRAMOV/problems/main/" target="_blank">spoj.com</a> 
сайт дээрх бодлогуудыг бодохоос гадна <a href="http://www.vim.org/">vim editor</a> дээрх
snippet-ийн plugin суулгаж судлах болно. Мөн бид Ubuntu Live Disk-ийг өөрсдийнхөөрөө хэрхэн хийж болохыг судлана.

<dl>
    <dt>10:00-10:30</dt>
    <dd>
        <?php echo url2spoj('Бодлого 1', 'ABR0254', 'Таслал ба хасах') ?><br/>
        <?php echo url2spoj('Бодлого 2', 'ABR0252A', 'Нэмэх ба үржих') ?>
    </dd>

    <dt>11:00-11:30</dt>
    <dd>
        <?php echo url2spoj('Бодлого 3', 'ABR201A', 'Максимум утга') ?><br/>
        <?php echo url2spoj('Бодлого 4', 'ABR0367', 'Бүхэл тоон хүснэгт') ?>
    </dd>

    <dt>11:30-12:00</dt>
    <dd>
        <?php echo url2spoj('Бодлого 5', 'ABR0003B', 'Кубын эзлэхүүн') ?><br/>
        <?php echo url2spoj('Бодлого 6', 'ABR0277', 'Урвуу дараалал') ?>
    </dd>

    <dt>12:00-12:30</dt>
    <dd>
        <?php echo url2spoj('Бодлого 7', 'ABR0061', 'Бүхэл ба бутархай') ?><br/>
        <?php echo url2spoj('Бодлого 8', 'ABR0068V', 'Ялгаатай цифрүүд') ?>
    </dd>

    <dt>12:30-14:00</dt>
    <dd> Үдийн завсарлага </dd>

    <dt>14:00-14:30</dt>
    <dd>
        <?php echo url2spoj('Бодлого 9', 'ABR0554', 'Пифагорын гурвал') ?>
    </dd>

    <dt>14:30-15:00</dt>
    <dd>
        <?php echo url2spoj('Бодлого 9', 'ABR0554', 'Пифагорын гурвал') ?>
        үргэлжилнэ
    </dd>

    <dt>15:00-15:30</dt>
    <dd>
        <img src="http://www.vim.org/images/vim_header.gif" height="30px" style="vertical-align: middle;"/>
        <a href="http://www.vim.org/scripts/script.php?script_id=2540">Vim snippet plugin</a>
    </dd>

    <dt>15:30-16:00</dt>
    <dd>
        <a href="http://www.vim.org/scripts/script.php?script_id=2540">Vim snippet plugin</a>
        Үргэлжлүүлэн судална
    </dd>
</dl>
<?php $content = ob_get_clean() ?>
<?php require 'base.php' ?>
