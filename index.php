<?php

$censura = "";

$paragrafo = 'Ei fu. Siccome immobile,
                dato il mortal sospiro,
                stette la spoglia immemore 
                orba di tanto spiro,
                così percossa, attonita
                la terra al nunzio sta,
                muta pensando all’ultima
                ora dell’uom fatale;
                né sa quando una simile
                orma di piè mortale
                la sua cruenta polvere 
                a calpestar verrà.
                Lui folgorante in solio 
                vide il mio genio  e tacque;
                quando, con vece assidua,
                cadde, risorse e giacque ,
                di mille voci al sonito
                mista la sua non ha:
                vergin  di servo encomio
                e di codardo oltraggio,
                sorge or commosso al subito
                sparir di tanto raggio:
                e scioglie all’urna  un cantico 
                che forse non morrà.
                Dall’Alpi alle Piramidi,
                dal Manzanarre al Reno ,
                di quel securo  il fulmine
                tenea dietro al baleno;
                scoppiò da Scilla  al Tanai ,
                dall’uno all’altro mar .
                Fu vera gloria? Ai posteri
                l’ardua sentenza : nui
                chiniam la fronte al Massimo
                Fattor , che volle in lui
                del creator suo spirito
                più vasta orma stampar.
                La procellosa e trepida 
                gioia d’un gran disegno,
                l’ansia d’un cor che indocile
                serve , pensando al regno;
                e il giunge, e tiene un premio
                ch’era follia  sperar;
                tutto ei provò : la gloria
                maggior dopo il periglio,
                la fuga  e la vittoria,
                la reggia e il tristo esiglio :
                due volte nella polvere,
                due volte sull’altar.
                Ei si nomò : due secoli,
                l’un contro l’altro armato ,
                sommessi a lui si volsero,
                come aspettando il fato;
                ei fe’ silenzio, ed arbitro
                s’assise in mezzo a lor.
                E sparve, e i dì nell’ozio
                chiuse in sì breve sponda ,
                segno d’immensa invidia
                e di pietà profonda,
                d’inestinguibil odio
                e d’indomato amor .
                Come sul capo al naufrago
                l’onda s’avvolve e pesa,
                l’onda su cui del misero,
                alta pur dianzi e tesa,
                scorrea la vista a scernere
                prode remote invan ;
                tal su quell’alma il cumulo
                delle memorie scese!
                Oh quante volte ai posteri
                narrar se stesso imprese,
                e sull’eterne  pagine
                cadde la stanca man!
                Oh quante volte, al tacito
                morir d’un giorno inerte,
                chinati i rai fulminei,
                le braccia al sen conserte,
                stette , e dei dì che furono
                l’assalse il sovvenir!
                E ripensò le mobili
                tende , e i percossi valli,
                e il lampo de’ manipoli,
                e l’onda dei cavalli,
                e il concitato imperio,
                e il celere ubbidir .
                Ahi! forse a tanto strazio
                cadde lo spirto anelo,
                e disperò: ma valida
                venne una man dal cielo,
                e in più spirabil  aere
                pietosa il trasportò ;
                e l’avviò, pei floridi
                sentier della speranza,
                ai campi eterni, al premio
                che i desideri avanza,
                dov’è silenzio e tenebre
                la gloria che passò.
                Bella Immortal ! benefica
                fede ai trionfi avvezza!
                scrivi ancor questo, allegrati;
                ché più superba altezza
                al disonor del Golgota
                giammai non si chinò .
                Tu dalle stanche ceneri
                sperdi ogni ria  parola:
                il Dio che atterra e suscita,
                che affanna e che consola,
                sulla deserta coltrice
                accanto a lui posò .'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="text-center w-75 m-auto mt-5">
        <h1 class="mb-5">Il cinque maggio</h1>
        <?php echo $paragrafo ?>
        <p class="mt-5"> La lunghezza del paragrafo è <?php echo strlen($paragrafo) ?> caratteri </p>
        <form action="" class="" method="GET">
            <label for="" class="text-primary fw-bold">Scrivi la parola da censurare</label>
            <input type="text" name="censuraparola" id="" class="mt-4" placeholders="inserisci qui...">
            <button type="button" class="btn btn-primary">Primary</button>

        </form>

        

        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>