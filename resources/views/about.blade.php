@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <section>
        <h3>Nama</h3>
        <p>{{ $name }}</p>
    </section>

    <section>
        <h3>Tempat</h3>
        <p>{{ $tempat }}</p>
    </section>

    <section>
        <h3>email</h3>
        <p>{{ $email }}</p>
    </section>

    <section>
        <h3>NO</h3>
        <p>{{ $no }}</p>
    </section>

    <section>
        <h2>Contact Information</h2>
        <p>If you have any questions or would like to get in touch, please visit our <a href="/contact">Contact</a>
            page.</p>
    </section>
@endsection
