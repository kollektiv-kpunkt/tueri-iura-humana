<!DOCTYPE html>
<html lang="de" style="--vh: 1vh; --vw: 1vw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Primary Meta Tags -->
    <title>Keine Kompromisse mit unseren Rechten: NEIN zu ACI & Gegenvorschlag!</title>
    <meta name="title" content="Keine Kompromisse mit unseren Rechten: NEIN zu ACI & Gegenvorschlag!" />
    <meta name="description" content="Wir als Bündnis gegen Repression sind der Meinung, dass wir gegen die diversen Entwicklungen der verstärkten staatlichen Repression gegen Aktivist*innen organisiert vorgehen müssen, statt tatenlos zuzusehen, wie (linker) Aktivismus kriminalisiert und das Grundrecht auf Versammlungsfreiheit im Kanton Zürich ausgehöhlt wird." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://buendnisgegenrepression.ch/" />
    <meta property="og:title" content="Keine Kompromisse mit unseren Rechten: NEIN zu ACI & Gegenvorschlag!" />
    <meta property="og:description" content="Wir als Bündnis gegen Repression sind der Meinung, dass wir gegen die diversen Entwicklungen der verstärkten staatlichen Repression gegen Aktivist*innen organisiert vorgehen müssen, statt tatenlos zuzusehen, wie (linker) Aktivismus kriminalisiert und das Grundrecht auf Versammlungsfreiheit im Kanton Zürich ausgehöhlt wird." />
    <meta property="og:image" content="{{asset("assets/img/og.png")}}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://buendnisgegenrepression.ch/" />
    <meta property="twitter:title" content="Keine Kompromisse mit unseren Rechten: NEIN zu ACI & Gegenvorschlag!" />
    <meta property="twitter:description" content="Wir als Bündnis gegen Repression sind der Meinung, dass wir gegen die diversen Entwicklungen der verstärkten staatlichen Repression gegen Aktivist*innen organisiert vorgehen müssen, statt tatenlos zuzusehen, wie (linker) Aktivismus kriminalisiert und das Grundrecht auf Versammlungsfreiheit im Kanton Zürich ausgehöhlt wird." />
    <meta property="twitter:image" content="{{asset("assets/img/og.png")}}" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    @vite("resources/css/app.scss")
</head>
<body>
    <div id="main-content">
        {{ $slot }}
    </div>

@vite("resources/js/app.js")
</body>
</html>
