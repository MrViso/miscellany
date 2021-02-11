<?php

return [
    '403'       => [
        'body'  => 'Najwyraźniej nie masz uprawnień do przeglądania tej strony!',
        'title' => 'Brak Dostępu',
    ],
    '403-form'  => [
        'help'  => 'Powodem może być zakończenie twojej sesji. Przed zapisaniem spróbuj zalogować się ponownie w nowym oknie.',
    ],
    '404'       => [
        'body'  => 'Niestety nie możemy znaleźć strony której szukasz.',
        'title' => 'Strony Nie Znaleziono',
    ],
    '500'       => [
        'body'  => [
            '1' => 'Ups, chyba coś poszło nie tak.',
            '2' => 'Otrzymaliśmy raport o napotkanym błędzie, ale czasem warto przekazać nam dokładniejszą informację, jakie działanie go spowodowało.',
        ],
        'title' => 'Błąd',
    ],
    '503'       => [
        'body'  => [
            '1' => 'Trwa konserwacja Kanki, co zwykle oznacza, że instalujemy aktualizację!',
            '2' => 'Przepraszamy za niedogodność. Za kilka minut wszystko wróci do normy.',
        ],
        'title' => 'Konserwacja',
    ],
    '503-form'  => [
        'body'  => 'Nie udało nam się poprawnie zapisać danych, co zwykle zdarza się w dwóch przypadkach. Otwórz Kankę z pomocą :link. Jeżeli trwa konserwacja, zapisz swoje dane gdzie indziej dopóki nie skończymy, a potem spróbuj ponownie. Jeżeli powitał cię napis "Sprawdzanie przeglądarki", możesz ponowić próbę zapisu.',
        'link'  => 'nowe okno',
        'title' => 'Niespodziewany wyjątek',
    ],
    'footer'    => 'Jeżeli potrzebujesz pomocy, skontaktuj się z nami przez hello@kanka.io albo na serwerze :discord',
];
