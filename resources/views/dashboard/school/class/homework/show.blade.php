@extends('layouts.dashboard')

@section('content')
    <div class="section-info d-flex align-items-center my-5">
        <div class="container-fluid">
            <x-alert-component></x-alert-component>
            <div class="container">
                <h5> Tema: {{ $homework->name }}</h5>
                <p class="text-muted">De aici poți edita detaliile temei.</p>

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <form method="POST" action="{{ route('homework.update', ['school' => $school->id, 'classroom' => $classroom->id, 'subject' => $subject->id, 'homework' => $homework->id]) }}">
                                    @csrf
                                    @method('PATCH')
                                    <x-homework-form :homework="$homework"></x-homework-form>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-gray">Editează</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

