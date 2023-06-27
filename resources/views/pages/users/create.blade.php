@extends('layouts.app')

@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="card">
                        <div class="card-header">Create user</div>

                        <div class="card-body">
                            <form action="http://127.0.0.1:8001/users">
                                <input type="hidden" name="_token" value="18bc0nfKzgRoX3yB7qpU2TSqi4CKuHSOP0t2BVyP">
                                <div class="form-group">
                                    <label class="required" for="name">Name</label>
                                    <input class="form-control " type="text" name="name" id="name" value=""
                                        required="">
                                    <span class="help-block"> </span>
                                </div>

                                <div class="form-group">
                                    <label class="required" for="email">Email</label>
                                    <input class="form-control " type="text" name="email" id="email" value=""
                                        required="">
                                    <span class="help-block"> </span>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input class="form-control " type="text" name="address" id="address"
                                        value="">
                                    <span class="help-block"> </span>
                                </div>

                                <div class="form-group">
                                    <label for="phone_number">Phone number</label>
                                    <input class="form-control " type="text" name="phone_number" id="phone_number"
                                        value="">
                                    <span class="help-block"> </span>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <form id="logoutform" action="http://127.0.0.1:8001/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="18bc0nfKzgRoX3yB7qpU2TSqi4CKuHSOP0t2BVyP">
            </form>
        </main>
        <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
    </div>
@endsection
