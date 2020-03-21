@extends('layouts.products')

@section('content')
    <div class="dashboard_container">


        <div class="left-side-ctn"> {{--      TODO: transform to a sidebar      --}}
            <div class="bck_ctgs_ctn">
                <h1>Catégorie</h1>
                @foreach($categories as $category)
                    <a href="{{route('prod.show', $category->category_id)}}">
                        <div class="bck_ctg_ctn">
                            <h2>{{ $category->category_name }}</h2>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="crt-prod-container">
                <a href="{{route('prod.create')}}">
                    <h1>Ajouter un nouveau produit</h1>
                </a>
            </div>
        </div>

        <div class="right-side-ctn">
            <div class="bck-emails-ctn">
                <h1>Messages</h1>
            @foreach ($contacts as $contact)
                    <div class="main-container">
                        <!-- heading -->
                        <div class="container-fluid">
                            <div class="row">
                                    <h1 class="text-primary mr-auto">Objet :  {{ $contact->contact_object}}</h1>
                            </div>
                        </div>
                        <!-- /heading -->
                        <!-- table -->
                        <table class="table table-striped table-bordered" id="myTable" cellspacing="0">
                            <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="data-row">
                                <td class="align-middle name">  {{ $contact->contact_firstname}} {{ $contact->contact_name}}</td>
                                <td class="align-middle word-break description">{{ $contact->contact_message}}</td>
                                <td class="align-middle">
                                    <a href="{{ url('/email/' . $contact->contact_id . '/reply') }}" type="button" class="btn btn-success" id="edit-item" data-item-id="1">répondre</a>
                                    <a href="{{ url('/email/' . $contact->contact_id . '/delete') }}" type="button" class="btn btn-danger" id="delete-item" data-item-id="2">supprimer</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
