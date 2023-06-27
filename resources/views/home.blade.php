@extends('layouts.app')

@section('content')
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
        <form id="logoutform" action="http://127.0.0.1:8001/logout" method="POST" style="display: none;">
            <input type="hidden" name="_token" value="R9vPO3aKA5YRHJyv1NPyjNzjIV6nfmTvGM9VoeUb">
        </form>
    </main>
    <footer class="c-footer">
        <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
        <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
    </footer>
</div>
@endsection
