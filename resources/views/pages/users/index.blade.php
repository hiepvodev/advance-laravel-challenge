@extends('layouts.app')

@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div style="margin-bottom: 10px;" class="row">
                        <div class="col-lg-12">
                            <a class="btn btn-success" href="{{ route('users.create') }}">
                                Create user
                            </a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">Users list</div>

                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <form action="http://127.0.0.1:8001/users" method="GET">
                                    <div class="form-group">
                                        <label for="deleted" class="col-form-label">Show deleted:</label>
                                        <select class="form-control" name="deleted" id="deleted"
                                            onchange="this.form.submit()">
                                            <option value="false">No</option>
                                            <option value="true">Yes</option>
                                        </select>
                                    </div>
                                </form>
                            </div>

                            <table class="table table-responsive-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>admin</td>
                                        <td>i am</td>
                                        <td>admin@admin.com</td>
                                        <td>
                                            admin
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/1/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/1" method="POST"
                                                onsubmit="return confirm('Are your sure?');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>user</td>
                                        <td>will be</td>
                                        <td>user@user.com</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/2/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/2" method="POST"
                                                onsubmit="return confirm('Are your sure?');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Demond</td>
                                        <td>Kiehn</td>
                                        <td>bogisich.garnet@example.com</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/3/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/3" method="POST"
                                                onsubmit="return confirm('Are your sure?');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Vicente</td>
                                        <td>Schowalter</td>
                                        <td>steuber.alisha@example.net</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/4/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/4" method="POST"
                                                onsubmit="return confirm('Are your sure?');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Arnulfo</td>
                                        <td>Kertzmann</td>
                                        <td>ebert.kristopher@example.org</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/5/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/5" method="POST"
                                                onsubmit="return confirm('Are your sure?');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Rhianna</td>
                                        <td>Ankunding</td>
                                        <td>leonardo00@example.net</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/6/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/6" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Hal</td>
                                        <td>Lehner</td>
                                        <td>bailey.katarina@example.org</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/7/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/7" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Afton</td>
                                        <td>Huel</td>
                                        <td>hills.marcelle@example.net</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/8/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/8" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Arlo</td>
                                        <td>D'Amore</td>
                                        <td>alexys.bruen@example.com</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/9/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/9" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Audreanne</td>
                                        <td>Bernhard</td>
                                        <td>jared20@example.com</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/10/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/10" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Braeden</td>
                                        <td>Wilkinson</td>
                                        <td>mueller.kiera@example.com</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/11/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/11" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Vernice</td>
                                        <td>Parisian</td>
                                        <td>cara.volkman@example.org</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/12/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/12" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Lulu</td>
                                        <td>Berge</td>
                                        <td>enid34@example.net</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/13/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/13" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Christa</td>
                                        <td>Bahringer</td>
                                        <td>betsy40@example.com</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/14/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/14" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Edgardo</td>
                                        <td>Huels</td>
                                        <td>yparker@example.net</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/15/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/15" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Jailyn</td>
                                        <td>Bogan</td>
                                        <td>jwisozk@example.com</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/16/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/16" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Nathanael</td>
                                        <td>Huel</td>
                                        <td>winston34@example.org</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/17/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/17" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Kristopher</td>
                                        <td>Lemke</td>
                                        <td>wreichel@example.org</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/18/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/18" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Jazmyn</td>
                                        <td>Morar</td>
                                        <td>rdietrich@example.org</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/19/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/19" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Ebba</td>
                                        <td>Williamson</td>
                                        <td>kihn.rachelle@example.net</td>
                                        <td>
                                            user
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="http://127.0.0.1:8001/users/20/edit">
                                                Edit
                                            </a>
                                            <form action="http://127.0.0.1:8001/users/20" method="POST"
                                                onsubmit="return confirm('Are your sure?');"
                                                style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token"
                                                    value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <nav>
                                <ul class="pagination">

                                    <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                        <span class="page-link" aria-hidden="true">‹</span>
                                    </li>





                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="http://127.0.0.1:8001/users?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="http://127.0.0.1:8001/users?page=3">3</a></li>


                                    <li class="page-item">
                                        <a class="page-link" href="http://127.0.0.1:8001/users?page=2" rel="next"
                                            aria-label="Next »">›</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>

                </div>
            </div>
            <form id="logoutform" action="http://127.0.0.1:8001/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="DtjRs73KzfbDakAFJBvSeVaalEfoMbKcYRVPC7bi">
            </form>
        </main>
        <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
    </div>
@endsection
