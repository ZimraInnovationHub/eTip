@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <div class="container mt-3">
        <h4>Available Services</h4>
        <div class="btnCards">
            <div class="col-md-12 options">
                <div class="card" style="width: 18rem">
                    <a href="#" class="textDecor" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                        <div class="svgIcons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-person-add svgColor" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                <path
                                    d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                            </svg>
                        </div>
                        <div class="card-body cardText">
                            <p class="card-text textColor">New TIP Application</p>
                        </div>
                    </a>
                </div>

                <div class="card" style="width: 18rem">
                    <a href="#" class="textDecor" data-bs-toggle="modal" data-bs-target="#searchTip">
                        <div class="svgIcons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-pencil-square svgColor" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </div>
                        <div class="card-body cardText">
                            <p class="card-text textColor">Edit My TIP Application</p>
                        </div>
                    </a>
                </div>

                <div class="card" style="width: 18rem">
                    <a href="#" class="textDecor">
                        <div class="svgIcons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-arrow-repeat svgColor" viewBox="0 0 16 16">
                                <path
                                    d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                                <path fill-rule="evenodd"
                                    d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                            </svg>
                        </div>
                        <div class="card-body cardText">
                            <p class="card-text textColor">
                                Reactivate Expired TIP Application
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="tableStyle">
        <h4>Declarations History</h4>
        <br />
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Motor Vehicle (Toyota Hilux)</td>
                    <td>Holidays</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Trailer</td>
                    <td>Holidays</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Laptop</td>
                    <td>Holiday</td>
                    <td>2021</td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('modals.personal_details')
    @include('modals.vehicle')
    @include('modals.trailer')
    @include('modals.owner')
    @include('modals.goods')
@endsection
