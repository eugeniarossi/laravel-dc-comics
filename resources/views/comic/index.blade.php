@extends('layout.app')

@section('page.title')
<div class="container">
    Comics
</div>
@endsection

@section('page.main')

<div class="container">
    <a href="{{ route('comics.create') }}" class="btn btn-success">Create new comic</a>
    <table class="table">
        <!-- table head -->
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Release Date</th>
                <th scope="col">Type</th>
                <th scope="col">Artists</th>
                <th scope="col">Writers</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <!-- /table head -->
        <!-- table body -->
        <tbody>
            <!-- element to repeat -->
            @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->artists }}</td>
                <td>{{ $comic->writers }}</td>
                <td>
                    <!-- link show -->
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Details</a>
                    <!-- link edit -->
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <!-- delete form -->
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="my-2">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
            @endforeach
            <!-- /element to repeat -->
        </tbody>
        <!-- /table body -->
    </table>
</div>

@endsection