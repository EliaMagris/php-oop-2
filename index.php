<?php
include_once __DIR__ . '/assets/accessori.php';
include_once __DIR__ . '/assets/category.php';
include_once __DIR__ . '/assets/cibo.php';
include_once __DIR__ . '/assets/giocattoli.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Title</title>
    <!-- BOOSTRAP CSS LINK-->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <!-- FONTAWESOME LINK-->
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css%27integrity=%27sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer'>

</head>

<body>
    <?php
    $category = [
        'cane' => new Generi('cane', '<i class="fa-solid fa-dog"></i>'),
        'uccello' => new Generi('uccello', '<i class="fa-solid fa-dove"></i>'),
        'gatto' => new Generi('gatto', '<i class="fa-solid fa-cat"></i>')
    ];

    var_dump($category);

    $prodotti = [
        new Cibo('https://cdn.royalcanin-weshare-online.io/v2k6a2QBG95Xk-RBN9oV/v196/packshot-mini-ad-shn17', 'Royal Canin', 43.99, $category['cane'], 545, 'prosciutto, riso'),
        new Cibo('https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/800/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg', 'Almo Nature', 44.99, $category['cane'], 600, 'manzo, cereali'),
        new Accessori('https://static.bighunter.net/foto/1_Def_per_web_zoom/14089/14089.jpg', 'Voliera Ferplast Bella Casa', 184.99, $category['uccello'], 'legno', 'M: L83 x P67 x H153 cm '),
        new Giocattoli('https://i.ebayimg.com/images/g/03kAAOSwA4BbK4Gm/s-l500.jpg', 'Topini di Peluche Trixie', 4.99, $category['gatto'], 'Morbido con codina in corda', '8.5 cm x 10 cm')
    ];
    ?>
    <div class="container">
        <div class="row">

            <?php foreach ($prodotti as $data) { ?>
            <div class="col-3">
                <div class="card  ">
                    <img src="<?php echo $data->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h4 class="card-title text-uppercase">
                            <?php echo $data->nome ?>
                        </h4>
                        <h5 class="card-title opacity-50">
                            <?php echo $data->prezzo ?>
                        </h5>
                        <p class="card-text opacity-50">
                            <?php foreach ($category as $type) {
                    echo $type->nome;
                } ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>


        </div>

        <!-- BOOTSTRAP JAVASCRIPT LINK-->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
            integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3'
            crossorigin='anonymous'></script>

</body>

</html>