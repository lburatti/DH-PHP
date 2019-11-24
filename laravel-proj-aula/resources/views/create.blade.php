@extends('base')

@section('title', 'Contatos - Criar')

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
                    <a class="navbar-item" href="{{ route('contacts.index') }}">
                        Home
                    </a>

                    <a class="navbar-item" href="{{ route('contacts.create') }}" >
                        Criar usuário
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Criar contato
                </h1>
            </div>
        </div>
    </section>

    <div class="container">
        <form method="POST" action="{{ route('contacts.store') }}">
            @csrf
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">Nome</label>
                        <div class="control has-icons-left has-icons-right">
                            <input
                                class="input"
                                type="text"
                                name="full_name"
                                placeholder="Digite o nome"
                                value="{{ old('full_name') }}"
                            />
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            @error('full_name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Apelido</label>
                        <div class="control has-icons-left has-icons-right">
                            <input
                                class="input"
                                type="text"
                                name="exhibition_name"
                                placeholder="Digite o apelido"
                                value="{{ old('exhibition_name') }}"
                            />
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            @error('exhibition_name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input
                                class="input"
                                type="text"
                                name="email"
                                placeholder="Digite o email"
                                value="{{ old('email') }}"
                            />
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">Telefone</label>
                        <div class="control has-icons-left has-icons-right">
                            <input
                                class="input"
                                type="text"
                                name="telephone_number"
                                placeholder="Digite o telefone"
                                value="{{ old('telephone_number') }}"
                            />
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            @error('telephone_number')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Celular</label>
                        <div class="control has-icons-left has-icons-right">
                            <input
                                class="input"
                                type="text"
                                name="cell_phone_number"
                                placeholder="Digite o celular"
                                value="{{ old('cell_phone_number') }}"
                            />
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            @error('cell_phone_number')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            <div class="columns">
                <div class="column">
                    <input
                        class="button is-primary"
                        type="submit"
                        value="Salvar"
                    />
                </div>
            </div>
        </form>
    </div>
@endsection
