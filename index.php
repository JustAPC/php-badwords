<?php 
    $paragrafoDefault = 'I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks.';
    $parolaDaCensurare = ( isset( $_GET['parolaDaCensurare'] ) ) ? $_GET['parolaDaCensurare'] : '';
    $paragrafoCensurato = str_ireplace($parolaDaCensurare, '***', $paragrafoDefault)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <p>Il paragrafo di default è: </p>
    <?php echo $paragrafoDefault?>

    <p>La lunghezza del paragrafo è di: <?php echo strlen($paragrafoDefault) ?> caratteri</p>

    <div>
        Scegli una parola da censurare: 
        <form method="GET" style="margin-top: 10px">
            <input type="text" name="parolaDaCensurare">
            <button type="submit">Invia</button>
        </form>
    </div>

    <div id="censored-p">
        <p>Paragrafo censurato:</p>
        <?php echo $paragrafoCensurato ?>
    
        <p>La lunghezza del paragrafo censurato è di: <?php echo strlen ($paragrafoCensurato) ?> caratteri</p>
    </div>
    
</body>
</html>