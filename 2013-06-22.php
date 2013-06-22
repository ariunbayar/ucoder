<?php require 'helpers.php' ?>
<?php ob_start() ?>

<h2>Өнөөдрийн хөтөлбөр</h2>

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

<hr>

<h2>Оролцогчид</h2>
<div class='participant'>
    <a href='http://gravatar.com/ariunbayarb'><img title="Ariunbayar" src='http://www.gravatar.com/avatar/f4b936729a896840c4b04752bcff4348'></a>
    <a href='http://gravatar.com/erdenesukh'><img title="Eenee" src='http://www.gravatar.com/avatar/69693baf78a234b29db3337814a1b112'></a>
    <a href='http://gravatar.com/delger07'><img title="Deegii" src='http://www.gravatar.com/avatar/69693baf78a234b29db3337814a1b112'></a>
    <a href='http://gravatar.com/mndh'><img title="Mandahaa" src='http://www.gravatar.com/avatar/7880499318000ff637a3d0ada9374df4'></a>
    <a href='http://gravatar.com/nyamgaa'><img title="Nyamba" src='http://www.gravatar.com/avatar/8c7b310317f080195db45b503e357755'></a>
    <a href='http://gravatar.com/hocoo'><img title="Khosoo" src='http://www.gravatar.com/avatar/d8ec2c91cac28b462b3e220639a394be'></a>
    <a href='http://gravatar.com/soyol0616'><img title="Soyoloo" src='http://www.gravatar.com/avatar/6abcba0c95963c8130284ea1df8ae2a4'></a>
    <a href='http://gravatar.com/batzaya0101'><img title="Zaya" src='http://www.gravatar.com/avatar/6bf840e6775759468089f46d055c603f'></a>
</ul>
<?php $content = ob_get_clean() ?>
<?php require 'base.php' ?>
