<?php
/**
 * Created by PhpStorm.
 * User: huck
 * Date: 18/02/2016
 * Time: 10:53
 */
?>
@extends('layout.master')

@section('title')
    <title>EVERYTHING CAN BE SOLD | LARAVEL 5</title>
@endsection
@section('header')
    @include('include.head')
@endsection

@section('main-content')
    <div class="row main-content">
        @include('include.show-room', ['list_name' => 'BEST SELLER'])
        @include('include.show-room', ['list_name' => 'SUGGESTED'])
        @include('include.show-room', ['list_name' => 'HOT TODAY'])
    </div>
@endsection

@section('footer')
    @include('include.footer')
@endsection