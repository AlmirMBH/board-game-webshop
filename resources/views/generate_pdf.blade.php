<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Board Game</title>
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
            margin-bottom: 50px;
            margin-top: 50px;
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

        #signature{
            text-align: right;
            margin-right: 30px;
            margin-top: 100px;
        }

        #signature-line{
            text-align: right;
            margin-top: 30px;
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

    <div id="project" style="margin-top: 50px; margin-left: 100px;">
{{--        <div><span>PRODUKT</span>{{$name}}</div>--}}
        <div><span>KUNDE / KUNDIN</span>{{$first_name}} {{$last_name}}</div>
        <div><span>UNTERNEHMEN</span>{{$company}}</div>
        <div><span>KANTON</span>{{$state}}</div>
        <div><span>ADRESSE 1</span>{{$address}}</div>
        @if($address2)
            <div><span>ADRESSE 2</span>{{$address2}}</div>
        @endif
        <div><span>POSTLEITZAHL</span>{{$post_code}}</div>
    </div>
    <div id="project" style="margin-top: 50px; margin-left: 100px;">
        <div><span>STADT</span>{{$city}}</div>
        <div><span>TELEFON</span>{{$phone}}</div>
        <div><span>EMAIL</span><a href="mailto:{{$email}}">{{$email}}</a></div>
        <div><span>DATE</span>{{$date}}</div>
        <div><span>DUE DATE</span>{{$created_at}}</div>
    </div>
</header>
<main>
    <table>
        <thead>
        <tr>
            <th class="service">PRODUKT</th>
            <th class="desc">BESCHREIBUNG</th>
            <th>PREIS</th>
            <th>STK</th>
            <th>VERSAND</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orderProducts as $orderProduct)
        <tr>
            <td class="service">{{$orderProduct['product_name']}}</td>
            <td class="desc">{{$orderProduct->product->short_description}}</td>
            <td class="unit">{{App\Order::$currency}} {{$orderProduct['price']}}</td>
            <td class="qty">{{$orderProduct['quantity']}}</td>
            <td class="shipping">{{App\Order::getCurrency($orderProduct['quantity'])}} {{App\Order::getShippingCost($orderProduct['quantity'])}}</td>
{{--            <td class="total">{{App\Order::$currency}} {{$sub_total}}</td>--}}
        </tr>
        @endforeach
        </tbody>
    </table>
    <table style="margin-top: -20px; border-top: 1px solid #C1CED9">
        <tbody>
            <tr>
                <td style="text-align: right;" colspan="5"></td>
                <td style="text-align: right;" class="total"><span style="margin-right: 40px;"><span style="margin-right: 20px">MWST 00%</span> {{App\Order::$currency}} 00.0</span></td>
            </tr>
            <tr>
                <td colspan="5" class="grand total">GRAND TOTAL</td>
                <td style="text-align: right;" class="grand total"><span style="margin-right: 40px;">{{App\Order::$currency}} {{$sub_total}}</span></td>
            </tr>
        </tbody>
    </table>

    <div>
        <div id="signature">Geschäftsführer</div>
        <div id = "signature-line"> _______________________</div>
    </div>
</main>
<footer>
    {{--Invoice was created on a computer and is valid without the signature and seal.--}}
</footer>
</body>
</html>
