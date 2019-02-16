@extends('layout.default')

@section('title')
    <title>Polls - {{ config('other.title') }}</title>
@endsection

@section('breadcrumb')
    <li>
        <a href="{{ route('staff.polls.index') }}" itemprop="url" class="l-breadcrumb-item-link">
            <span itemprop="title" class="l-breadcrumb-item-link-title">Polls</span>
        </a>
    </li>
@endsection

@section('content')
    <div class="container box">
        <h2>Manage Polls</h2>
        <a href="{{ route('staff.polls.create') }}" class="btn btn-primary">Add New Poll</a>
        <div class="table-responsive">
            <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($polls as $poll)
                <tr>
                    <td><a href="{{ route('staff.polls.show', ['id' => $poll->id]) }}">{{ $poll->title }}</a></td>
                    <td>{{ date('d M Y', $poll->created_at->getTimestamp()) }}</td>
                    <td>
                        <a href="#" class="btn btn-warning" disabled="">Edit</a>
                        <a href="#" class="btn btn-danger" disabled="">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection