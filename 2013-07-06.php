<?php require 'helpers.php' ?>
<?php ob_start() ?>

<h2>Өнөөдрийн хөтөлбөр</h2>

Өглөө 10:00-с эхэлж 16:00-д дуусна.<br/>
Энэ удаад бид <a href="http://www.spoj.com/ABRAMOV/problems/main/" target="_blank">spoj.com</a> 
сайт дээрх бодлогуудыг үргэлжлүүлэн бодохоос гадна судалгаа хийж уралдаан явуулна.

<dl>
    <?php/*
    <dt><?php echo to_time(30, 10) ?></dt>
    <dd>
        <?php echo url2spoj('Бодлого 1', 'ABR0038', 'Тасралттай функц') ?><br/>
        <?php echo url2spoj('Бодлого 2', 'ABR0004', 'Дундаж') ?>
    </dd>

    <dt><?php echo to_time(30) ?></dt>
    <dd>
        <?php echo url2spoj('Бодлого 3', 'ABR0067B', 'Цифрүүдийн нийлбэр') ?>
        Бодлого 4
    </dd>

    <dt><?php echo to_time(30) ?></dt>
    <dd>
        Бодлого 5<br/>
        Бодлого 6
    </dd>

    <dt><?php echo to_time(30) ?></dt>
    <dd>
        Бодлого 7<br/>
        Бодлого 8
    </dd>

     */?>

    <dt><?php echo to_time(60, 10.5) ?></dt>
    <dd>Үдийн завсарлага</dd>

    <dt><?php echo to_time(30) ?></dt>
    <dd>
        WEP нууцлалтай wireless сүлжээний цоорхой
    </dd>

    <dt><?php echo to_time(30) ?></dt>
    <dd>
        Ubuntu Live disk-ийг бэлдэхийг судлана
    </dd>

    <dt><?php echo to_time(30) ?></dt>
    <dd>
        <a href="http://app.typrx.com/#RacePlace:race">Хурдан бичих тэмцээн</a>
    </dd>

    <dt><?php echo to_time(30) ?></dt>
    <dd>
        <a href="http://vimgolf.com/">Vim ашиглан цөөн үйлдлээр текстийг засах</a>
    </dd>

    <dt><?php echo to_time(60) ?></dt>
    <dd>
        ...
    </dd>
</dl>

<hr>

<h2>Оролцогчид</h2>
<div class='participant'>
    <!--
    <a href='http://gravatar.com/ariunbayarb'><img title="Ariunbayar" src='http://www.gravatar.com/avatar/f4b936729a896840c4b04752bcff4348'></a>
    <a href='http://gravatar.com/unagaldai'><img title="Bulgaa" src='http://www.gravatar.com/avatar/d490b1fb90409853ec836dc02fb27961'></a>
    <a href='http://gravatar.com/delger07'><img title="Deegii" src='http://www.gravatar.com/avatar/e808ee64a1e30ef9c6cf1254c6d6279b'></a>
    <a href='http://gravatar.com/mndh'><img title="Mandahaa" src='http://www.gravatar.com/avatar/7880499318000ff637a3d0ada9374df4'></a>
    <a href='http://gravatar.com/nyamgaa'><img title="Nyamba" src='http://www.gravatar.com/avatar/8c7b310317f080195db45b503e357755'></a>
    <a href='http://gravatar.com/hocoo'><img title="Khosoo" src='http://www.gravatar.com/avatar/d8ec2c91cac28b462b3e220639a394be'></a>
    <a href='http://gravatar.com/soyol0616'><img title="Soyoloo" src='http://www.gravatar.com/avatar/6abcba0c95963c8130284ea1df8ae2a4'></a>
    <a href='http://gravatar.com/batzaya0101'><img title="Zaya" src='http://www.gravatar.com/avatar/6bf840e6775759468089f46d055c603f'></a>
    -->
</ul>
<?php $content = ob_get_clean() ?>
<?php require 'base.php' ?>
