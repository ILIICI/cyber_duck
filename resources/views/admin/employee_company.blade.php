@extends('layouts.app')

@section('content')
    <x-employee_company_list :list="$list" :companies="$companies"/>
@endsection
