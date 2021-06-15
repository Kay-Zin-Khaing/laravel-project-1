@extends('admin.category.category')

@section('EditId', $CategoryEdit->id)
@section('EditName', $CategoryEdit->name)
@section('EditSlug', $CategoryEdit->slug)

@section('EditMethod')
    {{method_field('PUT')}}
@endsection