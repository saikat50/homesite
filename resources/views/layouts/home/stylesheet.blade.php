<!DOCTYPE html>
<html lang="en-GB">
<head>
    <style>.hidden-overlay { display: none }</style>
    <meta charset="iso-8859-1">
    <meta name="language" content="en-GB">
    <meta name="author" content="SpareRoom">
    <meta name="robots" content="all,index,follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">


    <link href="{{asset('assets/fonts/css/all.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/abc-noname.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/abc-noname2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/abc-noname3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/abc-noname4.css')}}">


    @yield('page-css')


    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">


    <style>
        .statusMessage {
            box-sizing: border-box;
            border-bottom: 1px solid #FFDF00;
            background-color: #FCFCE2;
            height: auto;
            width: 100%;

        }
        .statusMessage__container {
            box-sizing: border-box;
            display: flex;
            max-width: 966px;
            padding: 10px 15px;
            margin: auto;
        }
        .statusMessage__message {
            margin: 0;

        }
        .statusMessage__icon {
            margin-right: 10px;
            font-size: 20px;
            line-height: 1.2;
            color: #14c8f6;;
        }
        @media (min-width: 675px) {
            .statusMessage__container {
                padding: 10px 20px;
            }
        }
        @media (min-width: 966px) {
            .statusMessage__container {
                padding: 10px 25px;
            }
        }
    </style>


    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>




