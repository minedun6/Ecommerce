<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8"/>
    {{-- BEGIN STYLES IMPORTS --}}
    {{ HTML::style('http://bootswatch.com/flatly/bootstrap.min.css',['media' => 'screen']) }}
    {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', ['rel'=> 'stylesheet']) }}
    {{ HTML::style('Css/custom.css') }}
    {{-- END STYLES IMPORTS --}}
</head>
<body>
@include('layouts.navigation')
<div class="container">
