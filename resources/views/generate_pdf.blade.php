<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Boaqrd Game</title>
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            width: 17cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-family: Arial;
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        h1 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #F5F5F5;
        }

        table th,
        table td {
            text-align: left;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 20px;
            text-align: left;
        }

        table .tax {
            text-align: right!important;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }
    </style>
</head>
<body>
<header class="clearfix">
    <h1>INVOICE #{{$order_id}}</h1>
    <div id="company" class="clearfix">
    </div>
    <div id="project">
        <div><span>PROJECT</span> Board Game</div>
        <div><span>CLIENT</span> {{$first_name}} {{$last_name}}</div>
        <div><span>ADDRESS</span> {{$address}}</div>
        <div><span>EMAIL</span> <a href="mailto:{{$email}}">{{$email}}</a></div>
        <div><span>DATE</span> {{$date}}</div>
        <div><span>DUE DATE</span> {{$created_at}}</div>
    </div>
</header>
<main>
    <table>
        <thead>
        <tr>
            <th class="service">PRODUCT</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="service">Board Game</td>
            <td class="desc">Das Gewerbe-Spiel.ch ist zur Zeit für nachfolgende Gemeinde/ Dörfer der Schweiz erhältlich...</td>
            <td class="unit">{{$price}} CHF</td>
            <td class="qty">{{$quantity}}</td>
            <td class="total">{{$sub_total}} CHF</td>
        </tr>
{{--        <tr>--}}
{{--            <td colspan="4">SUBTOTAL</td>--}}
{{--            <td class="total">$5,200.00</td>--}}
{{--        </tr>--}}
        <tr>
            <td class="tax" colspan="4">TAX 00%</td>
            <td class="total">00.0 CHF</td>
        </tr>
        <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">{{$sub_total}} CHF</td>
        </tr>
        </tbody>
    </table>
    <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
    </div>
</main>
<footer>
    Invoice was created on a computer and is valid without the signature and seal.
</footer>
</body>
</html>
