@extends('layouts.layout')

@section('content')
    <div class="container" style="margin: 20px 0 0; color: green;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-secondary text-black">
                        <h3 class="mb-0">Plus de détails sur la chambre : {{ $room->room_name }} </h3>
                    </div>
                    <div class="card-body bg-primary text-black">
                    <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Nom de l'hôtel:</strong><h3> {{ $room->hotel_name }}</h3>
                            </div>
                            <div class="col-md-6">
                                <strong>Description de l'hôtel:</strong> <h3>{{ $room->description }}</h3>
                            </div>
                            <hr>
                            <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Nom de la chambre:</strong><h3> {{ $room->room_name }}</h3>
                            </div>
                            <div class="col-md-6">
                                <strong>Prix de la chambre en FCFA:</strong><h3> {{ $room->price }}</h3>
                            </div>
                            <hr>                    
                            <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Nombres de lits de la chambre:</strong> <h3>{{ $room->beds }}</h3>
                            </div>                
                            <div class="col-md-6">
                                <strong>Nombres max d'adultes :</strong> <h3>{{ $room->max_adults }}</h3>
                            </div>
                            <hr>                   
                             <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Nombres max d'enfants:</strong><h3> {{ $room->max_children }}</h3>
                            </div>
                            <div class="col-md-6">
                                <strong>Attribut de la chambre:</strong> <h3>{{ $room->attributes }}</h3>
                            </div>
                            <hr>                   
                            <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Statut de la chambre:</strong><h3> {{ $room->status }}</h3>
                            </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
