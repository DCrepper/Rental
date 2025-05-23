<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nyilatkozat</title>
        <style>
            body {
                font-family: DejaVu Sans;
                margin: 20px;
            }

            h1,
            h2 {
                color: #2c3e50;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            li {
                background: #ecf0f1;
                margin: 5px 0;
                padding: 10px;
                border-radius: 5px;
            }

            .label {
                font-weight: bold;
                color: #2980b9;
            }
        </style>
    </head>

    <body>
        <header>
            <h1 style="text-align: center; font-size: 18px; font-weight: bold;">NYILATKOZAT</h1>
        </header>

        <section>
            <p style="font-size: 12px;">
                Alulírott <span style="text-decoration: underline;">{{ $order->customer->full_name }}</span>, <br>
                Saját rendszám: <span style="text-decoration: underline;">{{ $order->own_license_plate }}</span>
            </p>
            <p style="font-size: 12px;">
                születési hely: <span style="text-decoration: underline;">{{ $order->customer->born_place }}</span>,
                születési idő:
                <span style="text-decoration: underline;">{{ $order->customer->born_year }}</span> (év),
                <span style="text-decoration: underline;">{{ $order->customer->born_month }}</span> (hónap),
                <span style="text-decoration: underline;">{{ $order->customer->born_day }}</span> (nap)
            </p>
            <p style="font-size: 12px;">
                lakcím: <span style="text-decoration: underline;">{{ $order->customer->postal_code }}</span>
                (irányítószám)
                <span style="text-decoration: underline;">{{ $order->customer->city }}</span>
                (város)
                <span style="text-decoration: underline;">{{ $order->customer->address }}</span>
                (utca)
                <span style="text-decoration: underline;">{{ $order->customer->address_number }}</span>
                (házszám)
                <span style="text-decoration: underline;">{{ $order->customer->address_extra }}</span>
                (emelet/ajtó)
            </p>
            <p style="font-size: 12px;">
                telefonszám: <span style="text-decoration: underline;">{{ $order->customer->phone }}</span>,<br>
                jogosítványszám:
                <span style="text-decoration: underline;">{{ $order->customer->license_number }}</span>,<br>
                jogosítvány érvényesség:
                <span style="text-decoration: underline;">{{ $order->customer->license_issue_date }}</span>
                (-tól),
                <span style="text-decoration: underline;">{{ $order->customer->license_expiry_date }}</span> (-ig),<br>
                személyigazolvány szám:
                <span style="text-decoration: underline;">{{ $order->customer->id_card_number }}</span>, <br>
                e-mail cím:
                <span style="text-decoration: underline;">{{ $order->customer->email }}</span> ezennel <br>
            </p>
        </section>

        <section>
            <h2 style="text-align: center; font-size: 16px; font-weight: bold;">NYILATKOZOM</h2>
            <p style="font-size: 12px; text-align: justify;">
                hogy a Fem-Cars Hungary Kft. tulajdonában / üzemeltetésében lévő
                <span style="text-decoration: underline;">{{ $order->car->license_plate }}</span>
                forgalmi
                rendszámú gépjárművet
            </p>
            <p style="font-size: 12px;">
                <span style="text-decoration: underline;">{{ $order->start_date->format('Y') }}</span> év,
                <span style="text-decoration: underline;">{{ $order->start_date->format('m') }}</span> hónap,
                <span style="text-decoration: underline;">{{ $order->start_date->format('d') }}</span> nap,
                <span style="text-decoration: underline;">.............</span> óra,
                <span style="text-decoration: underline;">................</span> perctől <br>
                <span style="text-decoration: underline;">{{ $order->start_date->format('Y') }}</span> év,
                <span style="text-decoration: underline;">{{ $order->start_date->format('m') }}</span> hónap,
                <span style="text-decoration: underline;">{{ $order->start_date->format('d') }}</span> nap,
                <span style="text-decoration: underline;">.............</span> óra,
                <span style="text-decoration: underline;">................</span> percig

            </p>
            <p style="font-size: 12px; text-align: justify;">
                Tudomásul veszem, hogy jelen autóbérléssel kapcsolatosan utólagos költségek keletkezhetnek (pl. sérülés,
                kártérítés, tankolási költség, közlekedési szabálysértés miatti büntetés, közigazgatási bírság,
                parkolási pótdíj),
                melyeket felelősségemet tudomásul veszem, és egyúttal engedélyezem, hogy ezen felmerülő költségeket a
                Fem-Cars Hungary Kft. az Általános bérleti szerződési feltételeknek megfelelően bankkártyámra
                terhelje.
            </p>
            <p style="font-size: 12px; text-align: justify;">
                Egyúttal kötelezettséget vállalok arra nézve, hogy amennyiben erre nincs mód (eltérő fizetőeszköz,
                időközben lejárt bankkártya, limitengedély hiánya miatt), úgy ezeket a költségeket a Fem-Cars Hungary
                Kft. részére maradéktalanul megtérítem.
            </p>
            <p style="font-size: 12px; text-align: justify;">
                Továbbá hozzájárulok ahhoz, hogy hatósági (szabálysértési, büntető) valamint parkolási, biztosítási és
                kárendezési ügyben nevemet és személyi adataimat a Fem-Cars Hungary Kft. adatszolgáltatás céljából
                megkerdezésem nélkül kiadhassa.
            </p>
            <p style="font-size: 12px;">
                A nyilatkozat tartalmát a tanúk egyike a bérlőnek (nyilatkozattevőnek) megmagyarázta.
            </p>
        </section>

        <section>
            <table style="width: 100%; font-size: 12px; margin-top: 20px;">
                <tr>
                    <td style="width: 50%; text-align: center;">.....................................</td>
                    <td style="width: 50%; text-align: center;">.....................................</td>
                </tr>
                <tr>
                    <td style="width: 50%; text-align: center;">Bérleti szerződés száma</td>
                    <td style="width: 50%; text-align: center;">Kártyaszám</td>
                </tr>

            </table>
            <table style="width: 100%; font-size: 12px; margin-top: 20px;">

                <tr>
                    <td style="width: 50%; text-align: center;">.......................................</td>
                    <td style="width: 50%; text-align: center;">.......................................</td>
                </tr>
                <tr>
                    <td style="width: 50%; text-align: center;">Dátum</td>
                    <td style="width: 50%; text-align: center;">Bérlő / kártyabirtokos aláírása</td>
                </tr>
            </table>
            <table style="width: 100%; font-size: 12px; margin-top: 20px;">
                <tr>
                    <td style="width: 60%;">Tanú:</td>
                    <td style="width: 40%;">Tanú:</td>
                </tr>
                <tr>
                    <td style="width: 60%;">Név: ..........................................</td>
                    <td style="width: 40%;">Név: ..........................................</td>
                </tr>
                <tr>
                    <td style="width: 60%;">Aláírás: ......................................</td>
                    <td style="width: 40%;">Aláírás: ......................................</td>
                </tr>
                <tr>
                    <td style="width: 60%;">Lakcím: .......................................</td>
                    <td style="width: 40%;">Lakcím: .......................................</td>
                </tr>
            </table>
        </section>
    </body>

</html>
