@extends('admin.tag.tag')

@section('EditId', $TagEdit->id)
@section('EditName', $TagEdit->name)
@section('EditSlug', $TagEdit->slug)

@section('EditMethod')
    {{method_field('PUT')}}
@endsection