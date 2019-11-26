<?php
if ($data->subCategory){
    include 'media/pdp/includes/product-info--' . $data->subCategory . '.php';
    } else {
        switch ($data->category) {
            case 'wood':
                include 'media/pdp/includes/product-info--wood.php';
                break;
            case 'laminate':
                include 'media/pdp/includes/product-info--laminate.php';
                break;
            case 'solid-laminate':
                include 'media/pdp/includes/product-info--solid-laminate.php';
                break;
        }
    }
?>

<?php
echo '<p class="p-3 m-0">';
if ($data->subCategory){
    echo 'Compact Arbeitsplatten sind extrem pflegeleicht, da sie sowohl hitzebest&auml;ndig als auch wasserfest sind. Um Ihre Arbeitsplatte langfristig im bestm&ouml;glichen Zustand zu behalten, empfehlen wir ein paar einfache Punkte zu beachten, die Ihnen in unserer <a href="/compact-arbeitsplatten-installationsanleitung">Compact Arbeitsplatten Pflegeanleitung</a> erkl&auml;rt werden.';
} else {
    switch ($data->category) {
        case "wood":
            echo 'Sorgen Sie daf&uuml;r, dass Ihre Holzarbeitsplatten durch regelm&auml;&szlig;iges &Ouml;len langanhaltend optimal aussehen. Stellen Sie sicher, dass die Oberfl&auml;chen sauber und trocken sind, und vermeiden Sie das Schneiden oder Abstellen hei&szlig;er Pfannen direkt auf der Arbeitsplatte. Lesen Sie unseren umfassenden <a href="/holzarbeitsplatten-installation-und-nachsorge.html">Leitfaden zur Pflege von Holzplatten</a>, um mehr zu erfahren.';
            break;
        case "laminate":
            echo 'Laminat-Arbeitsplatten sind besonders pflegeleicht. Stellen Sie einfach sicher, dass sie sauber und trocken sind und vermeiden Sie das Schneiden oder Abstellen hei&szlig;er Pfannen direkt auf der Oberfl&auml;che. Weitere Informationen finden Sie in unserer umfassenden <a href="/resopal-arbeitsplatte-pflege">Anleitung zur Pflege von Laminat-Arbeitsplatten</a>.';
            break;
        case "solid-laminate":
            echo 'Compact Arbeitsplatten sind extrem pflegeleicht, da sie sowohl hitzebest&auml;ndig als auch wasserfest sind. Um Ihre Arbeitsplatte langfristig im bestm&ouml;glichen Zustand zu behalten, empfehlen wir ein paar einfache Punkte zu beachten, die Ihnen in unserer <a href="/compact-arbeitsplatten-installationsanleitung">Compact Arbeitsplatten Pflegeanleitung</a> erkl&auml;rt werden.';
            break;
    }
}
echo '</p>';
?>

<?php
if ($data->subCategory){
    $image = '/media/gallery/compact-arbeitsplatten-muster.jpg';
    $content = 'tischplattentischplatten tischplatten tischplattentischplattentischplatten.';
    $link = empty($data->samples) ? 'kuechenarbeitsplatte-muster/compact-arbeitsplatten-muster' : $data->samples;
    $bespokeLink = 'compact-arbeitsplatten-massanfertigung';
} else {
    switch ($data->category) {
        case 'wood':
            $image = '/media/gallery/massivholz-arbeitsplatten-muster.jpg';
            $content = 'Mit unserem Musterservice erhalten Sie einen 20 x 15 cm gro&szlig;en Massivholzblock, mit dem Sie sich ein Bild von der Farbe machen und die Textur sowie die hervorragende Qualit&auml;t unserer Arbeitsplatten f&uuml;hlen k&ouml;nnen.';
            $link = empty($data->samples) ? 'kuechenarbeitsplatte-muster/massivholz-arbeitsplatten-muster' : $data->samples;
            $bespokeLink = 'fabrikationsservice-holzarbeitsplatten-nach-mass';
            break;
        case 'laminate':
            $image = '/media/gallery/arbeitsplatten-aus-laminat.jpg';
            $content = 'Bestellen Sie ein Laminat-Musterpaket, um eine genaue Vorstellung von Farbe, Textur und Qualität unserer Laminatoberflächen zu erhalten.';
            $link = empty($data->samples) ? 'resopal-arbeitsplatten/resopal-arbeitsplatten-musterpaket' : $data->samples;
            $bespokeLink = 'laminat-arbeitsplatten-auf-mass';
            break;
        case 'solid-laminate':
            $image = '/media/gallery/compact-arbeitsplatten-muster.jpg';
            $content = 'Nutzen Sie unseren Musterservice, um sich ein Bild von der Farbe und Textur unserer hochwertigen Compact Arbeitsplatten zu machen.';
            $link = empty($data->samples) ? 'kuechenarbeitsplatte-muster/compact-arbeitsplatten-muster' : $data->samples;
            $bespokeLink = 'compact-arbeitsplatten-massanfertigung';
            break;    
    }
}
?>