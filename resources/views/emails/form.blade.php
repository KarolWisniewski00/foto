<!DOCTYPE html>
<html>

<head>
    <title>Example Mail</title>
</head>

<body>
    <h4>Szanowni Państwo,</h4>
    <p>
        Dziękujemy za złożenie zamówienia numer {{$order->id}}!<br>
        Z radością informujemy, że jest ono w trakcie realizacji.
    </p>
    <h4>Szczegóły zamówienia</h4>
    <p>
        Cena: {{$order->total_price}} zł<br>
        Ilość odbitek: {{$order->total_count}}
    </p>
    <p>
        W razie pytań jesteśmy do Państwa dyspozycji pod adresem studio@fotorabsztyn.com<br>
        Z pozdrowieniami,<br>
        Foto Rabsztyn
    </p>
</body>

</html>