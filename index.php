<?php
// choose css-file;
$types = array('official', 'less', 'sass', 'compass');
$type = (isset($_GET['t']) && in_array($_GET['t'], $types) && $_GET['t'] !== $types[0]) ? $_GET['t'] : '';
if ($type === '') {
    $type = $types[0];
}
//build cssFile Infos
    clearstatcache();
$cssFiles = array();
foreach ($types as $_type) {
    $fileName = 'css/style-' . $_type . '.css';
    if(file_exists($fileName)){
        $fileSize = filesize($fileName);
        $cssFiles[$_type] = array(
            'name' => $fileName,
            'filesize' => $fileSize,
        );
    }
}
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js .ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js .ie7 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js .ie8 lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
 More info: h5bp.com/i/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Less vs. Sass</title>
    <meta name="description" content="">

    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

    <link rel="stylesheet" href="<?php echo $cssFiles[$type]['name'] ?>">

    <script src="js/vendor/modernizr-2.5.3.min.js"></script>
</head>
<body>
<header>
    <img class="logo" src="/images/logo.png" alt="myLogo"/>
</header>
<nav>
    <ul>
        <?php foreach ($cssFiles as $key => $item): ?>
        <?php $name = $key . ' (' . $item['filesize'] . ' B)' ?>
        <li>
            <?php if ($key === $item): ?>
            <span><?php echo $name ?></span>
            <?php else: ?>
            <a href="/?t=<?php echo $key ?>"><?php echo $name ?></a>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>
<article>
    <h1>Cupcake ipsum dolor</h1>

    <p>Cupcake ipsum dolor sit amet icing oat cake marshmallow. Muffin pastry apple pie dessert fruitcake dragée halvah. Halvah gingerbread dessert jelly beans wafer. Pudding cookie muffin. Danish dragée macaroon faworki. Pastry muffin cheesecake. Applicake cake wafer pudding jelly-o cotton candy cotton candy fruitcake.</p>

    <p>Sweet dragée macaroon lollipop wafer halvah jelly beans liquorice dessert. Cotton candy apple pie macaroon. Toffee chocolate bar apple pie halvah. Marshmallow carrot cake cotton candy cookie sesame snaps caramels icing tart. Brownie wypas tart marzipan fruitcake pie toffee chocolate bar wypas. Pudding ice cream tiramisu candy canes ice cream bonbon. Bear claw lemon drops soufflé icing topping carrot cake cheesecake tootsie roll. Topping wafer muffin macaroon dessert donut oat cake ice cream icing.</p>

    <p>Tart applicake biscuit gingerbread. Caramels icing powder cheesecake liquorice marzipan. Biscuit tiramisu marshmallow carrot cake chocolate cookie. Cookie powder donut jelly beans gummi bears sugar plum sweet. Chupa chups chocolate bar cotton candy candy canes gummies cheesecake jelly icing jelly. Muffin gummi bears cotton candy biscuit jelly-o jujubes. Pastry dessert dragée. Ice cream cotton candy toffee wypas brownie topping cheesecake. Chocolate bar chocolate cake jelly-o pudding.</p> Tiramisu bear claw brownie. Fruitcake gummi bears croissant macaroon. Gummies ice cream fruitcake croissant cake caramels muffin cotton candy faworki. Faworki cake danish jujubes oat cake jelly toffee cupcake. Dessert brownie cookie pudding. Cheesecake pastry jelly bear claw cupcake jelly bonbon sugar plum. Ice cream marzipan bear claw topping candy. Chocolate cake jelly-o caramels wafer wafer.
    <p>Cupcake jelly beans sweet. Liquorice macaroon dragée. Icing marzipan bonbon. Halvah marzipan danish jelly-o candy jujubes. Caramels gummi bears tiramisu sweet roll candy canes. Chocolate cake jelly chupa chups gingerbread pie chocolate cake cupcake applicake wypas. Tootsie roll chocolate bar wafer ice cream liquorice. Sweet bear claw gingerbread. Powder gummi bears cupcake.</p>
</article>
<footer>
    &copy; FooBar 1900
</footer>
</body>
</html>