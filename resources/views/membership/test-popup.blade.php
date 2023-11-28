<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
    <script type="text/javascript" src="https://es10.premiummod.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <style>
        .sdk {
            display: block;
            position: absolute;
            background-position: center;
            text-align: center;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

</head>
<body>
    </head>
    <body>
        <div id="sdk" style="visibility: hidden">
            <h2>Prix:</h2>
            <p id="price" value="5000">{{ $price }}</p>
            <p id="announce">{{ $announcement }}</p>
            <p id="membership">{{ $membership }}</p>
        </div>
    </body>
    <script>
        const price=document.querySelector('#price').innerHTML;
        const membership=document.querySelector('#membership').innerHTML;
        const announce=document.querySelector('#announce').innerHTML;
        console.log(price)
        document.getElementById('sdk').value=
            CinetPay.setConfig({
                apikey: '108089145655d2b949d7a99.42080516',//   YOUR APIKEY
                site_id: '5866009',//YOUR_SITE_ID
                notify_url: 'http://mondomaine.com/notify/',
                mode: 'PRODUCTION'
            });
            CinetPay.getCheckout({
                transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
                amount: price,
                currency: 'XAF',
                channels: 'ALL',
                description: 'Paiement Abonnement',
                 //Fournir ces variables pour le paiements par carte bancaire
                customer_name:"Joe",//Le nom du client
                customer_surname:"Down",//Le prenom du client
                customer_email: "down@test.com",//l'email du client
                customer_phone_number: "088767611",//l'email du client
                customer_address : "BP 0024",//addresse du client
                customer_city: "Antananarivo",// La ville du client
                customer_country : "CM",// le code ISO du pays
                customer_state : "CM",// le code ISO l'état
                customer_zip_code : "06510", // code postal

            });
            CinetPay.waitResponse(function(data) {
                if (data.status == "REFUSED") {
                    window.location.assign(`http://127.0.0.1:8000/payment/fail`);


                } else if (data.status == "ACCEPTED") {
                    window.location.assign(`http://127.0.0.1:8000/congratulation/${membership}/${announce}`);
                }
            });
            CinetPay.onError(function(data) {
                console.log(data);
            });
            console.log('e')


    </script>
</html>
