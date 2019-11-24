@extends('base')

@section('title', 'Contatos - Lista')

@section('content')
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

                <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Home
                    </a>

                    <a class="navbar-item" href="{{ route('contacts.create') }}">
                        Criar usuário
                    </a>

                </div>

{{--                <div class="navbar-end">--}}
{{--                    <div class="navbar-item">--}}
{{--                        <div class="buttons">--}}
{{--                            <a class="button is-primary">--}}
{{--                                <strong>Cadastrar</strong>--}}
{{--                            </a>--}}
{{--                            <a class="button is-light">--}}
{{--                                Acessar--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </nav>


        <form method="GET" action="{{ route('contacts.index') }}">
            <div class="columns">
                <div class="column is-10">
                <div class="field">
                    <div class="control">
                        <p class="control has-icons-left has-icons-right">
                            <input
                                class="input"
                                type="text"
                                placeholder="Digite sua pesquisa..."
                                name="search"
                            />
                            <span class="icon is-small is-left">
                                <i class="fas fa-search"></i>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
                <div class="column is-2">
                    <input
                        class="button is-primary"
                        type="submit"
                        value="Procurar"
                    />
                </div>
            </div>
        </form>

        <div class="columns">
            <div class="column">
                @if(!$contacts->isEmpty())
                    <div class="table-container">
                        <table class="table is-hoverable is-fullwidth">
                            <thead>
                                <th>Nome</th>
                                <th>Apelido</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->full_name }}</td>
                                        <td>{{ $contact->exhibition_name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->telephone_number }}</td>
                                        <td>{{ $contact->cell_phone_number }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{
                        $contacts->appends([
                            'search' => $search
                        ])
                        ->links()
                    }}
                @endif

                @if($contacts->isEmpty())
                    <h3 class="title is-3 has-text-centered">
                        Nenhum resultado foi encontrado :(
                    </h3>
                @endif
            </div>
        </div>
    </div>
@endsection
