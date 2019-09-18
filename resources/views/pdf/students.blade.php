<html>
<head>
    <title>LISTA BOLMUN 2019</title>
    <style>
        @page {
            margin-top: 6.5em;
            margin-left: 3em;
            margin-right: 3em;
            margin-bottom: 3em;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            text-align: right;
            font-size: 7;
            font-family: arial;
        }

        footer .page:after {
            content: counter(page);
        }

        header {
            position: fixed;
            bottom: 955px;
            left: 0px;
            right: 0px;
            height: 40px;
        }
    </style>
</head>
<body lang=ES-BO>
<header>
</header>

<footer>
    <span class="page">Página </span></span>
</footer>

<main>
    <p align=center style='text-align:center'>

    <table width="100%"
           border="1"
           cellpadding="2"
           cellspacing="2">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>QR</th>
        </tr>
        </thead>
        <tbody>
        @forelse($students as $item)
            <tr>
                <td class="align-top text-center" style="width: 30px">
                <span lang=ES-BO style='font-size:8.0pt;font-family:"Arial",sans-serif'>
                    {{ $item->id }}
                </span>
                </td>
                <td class="align-top text-center" style="width: 240px">
                <span lang=ES-BO style='font-size:8.0pt;font-family:"Arial",sans-serif'>
                    {{ strtoupper($item->name) }}
                </span>
                </td>
                <td class="align-top text-center">
                    <img src="data:image/png;base64,
                        {!! base64_encode(QrCode::format('png')
                        ->size(120)
                        ->generate(''.$item->id.','.strtoupper($item->name).'')) !!} ">
                </td>
            </tr>
        @empty
           <tr>
               <td colspan="3">SIN REGISTROS</td>
           </tr>
        @endforelse
        </tbody>
    </table>
    </p>
</main>
</body>