@extends('layouts.main')

@section('content')
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Edit Contact</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                @method('PUT')
                @csrf
                @include('contacts.form')
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('title', 'Contact App | Add a new Contact')
