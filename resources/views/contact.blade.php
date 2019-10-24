@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <!-- Jumbotron -->
                <div class="jumbotron p-0">
                    <!-- Card image -->
                    <div class="view overlay rounded-top">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(134).jpg"
                            class="img-fluid"
                            alt="Sample image"
                        />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body text-center mb-3">
                        <!-- Title -->
                        <h3 class="card-title h3 my-4"><strong>Bizga murojaat</strong></h3>
                        <!-- Text -->
                        <p class="card-text py-2">
                            Bizga murojaat yuborish orqali siz tizimimizning yanada mukammallashishi uchun katta yordam bergan bolasiz
                        </p>
                        <!-- Button -->

                        <div
                            class="modal fade"
                            id="modalContactForm"
                            tabindex="-1"
                            role="dialog"
                            aria-labelledby="myModalLabel"
                            aria-hidden="true"
                        >
                            <div class="modal-dialog cascading-modal" role="document">
                                <!--Content-->
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header light-blue darken-3 white-text">
                                        <h4 class="title">
                                            <i class="fas fa-pencil-alt"></i>
                                            Contact form
                                        </h4>
                                        <button
                                            type="button"
                                            class="close waves-effect waves-light"
                                            data-dismiss="modal"
                                            aria-label="Close"
                                        >
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body mb-0">
                                        <div class="md-form form-sm">
                                            <i class="fas fa-envelope prefix active"></i>
                                            <input type="text" id="form8" class="form-control" />
                                            <label for="form8" class="active">Ismingiz</label>
                                        </div>

                                        <div class="md-form form-sm">
                                            <i class="fas fa-lock prefix active"></i>
                                            <input type="email" id="form9" class="form-control" />
                                            <label for="form9" class="active">Email</label>
                                        </div>

                                        <div class="md-form form-sm">
                                            <i class="fas fa-pencil-alt prefix"></i>
                                            <textarea type="text" id="form67" class="md-textarea mb-0"></textarea>
                                            <label for="form67">Murojaat</label>
                                        </div>

                                        <div class="text-center mt-1-half">
                                            <button class="btn btn-info mb-2 waves-effect waves-light">
                                                Yuborish
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Content-->
                            </div>
                        </div>

                        <div class="text-center">
                            <a
                                href=""
                                class="btn purple-gradient btn-rounded mb-4"
                                data-toggle="modal"
                                data-target="#modalContactForm">
                                Murojaat yuborish
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Jumbotron -->
            </div>
        </div>
    </div>
</div>
@endsection