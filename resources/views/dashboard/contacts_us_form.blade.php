@extends('dashboard.layouts.master')
@section('title', __('backend.contactUs'))
@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3>{{ __('backend.contactUs') }}</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ __('backend.home') }}</a> /
                    <a href="#">{{ __('backend.contactUsMessages') }}</a>
                </small>
            </div>

            @if($contacts->total() == 0)
                <div class="row p-a">
                    <div class="col-sm-12">
                        <div class="p-a text-center">
                            {{ __('backend.noData') }}
                        </div>
                    </div>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered m-a-0">
                        <thead class="dker">
                            <tr>
                                <th>#</th>
                                <th>{{ __('backend.name') }}</th>
                                <th>{{ __('backend.email') }}</th>
                                <th>{{ __('backend.phone') }}</th>
                                <th>{{ __('backend.city') }}</th>
                                <th>{{ __('backend.message') }}</th>
                                <th>{{ __('backend.date') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone ?? '-' }}</td>
                                    <td>{{ $contact->city ?? '-' }}</td>
                                    <td>{{ Str::limit($contact->message, 50) }}</td>
                                    <td>{{ $contact->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <footer class="dker p-a">
                    <div class="row">
                        <div class="col-sm-6">
                            <small class="text-muted inline m-t-sm m-b-sm">
                                {{ __('backend.showing') }} {{ $contacts->firstItem() }} - {{ $contacts->lastItem() }} 
                                {{ __('backend.of') }} <strong>{{ $contacts->total() }}</strong> {{ __('backend.records') }}
                            </small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $contacts->links() !!}
                        </div>
                    </div>
                </footer>
            @endif
        </div>
    </div>
@endsection
