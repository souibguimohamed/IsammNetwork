<!DOCTYPE html>
<html>
    <head>
            <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <!-- Favicons -->
            <link rel="apple-touch-icon" href="#">
            <link rel="icon" href="#">
            <title>Isamm Network</title>
            <!-- Extra details for Live View on GitHub Pages -->
            <!-- Canonical SEO -->
            <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
            <!--  Social tags      -->
            <meta name="keywords" content="creative tim, html kit, html css template, web template, bootstrap, css3 template, frontend, responsive bootstrap template, bootstrap 4 ui kit, premium bootstrap kit, responsive ui kit">
            <meta name="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.">
            <!-- Schema.org markup for Google+ -->
            <meta itemprop="name" content="Material Kit PRO by Creative Tim">
            <meta itemprop="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.">
            <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
            <!-- Twitter Card data -->
            <meta name="twitter:card" content="product">
            <meta name="twitter:site" content="@creativetim">
            <meta name="twitter:title" content="Material Kit PRO by Creative Tim">
            <meta name="twitter:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.">
            <meta name="twitter:creator" content="@creativetim">
            <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
            <meta name="twitter:data1" content="Material Kit PRO by Creative Tim">
            <meta name="twitter:label1" content="Product Type">
            <meta name="twitter:data2" content="$79">
            <meta name="twitter:label2" content="Price">
            <!-- Open Graph data -->
            <meta property="fb:app_id" content="655968634437471">

            <meta property="og:type" content="article" />
            <meta property="og:url" content="https://demos.creative-tim.com/material-kit-pro/presentation.html" />



        <meta charset="utf-8">
        <meta name="description" content="Isamm Network is a website for Isamm Student">
        <link rel="shortcut icon" href="#">
        <meta property="og:site_name" content="Isamm Network">
        <meta property="og:title" content="Isamm Network">
        <meta property="og:description" content="Isamm Network is a website for Isamm Student">
        <meta property="og:image" content="#">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/myhome.css')}}" type="text/css">
        
    </head>
    <body>
        @include('includes.navbar')
        @yield('content')
        @include('includes.jscripts')
    </body>
</html>