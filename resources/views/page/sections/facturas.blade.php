@extends('page.layouts.main')

@section('content')


<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/backgroundProd.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div>
                        <h2>Mis Facturas</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Facturas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="sectionAboutUs" class="shotcode-1 about-home-2 text-center-xs text-center-sm" style="background-color: white;">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-4">
					<div class="heading-right">
						<p class="mb-0">Verificar Facturas</p>
						<h2>Mis Facturas</h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>

            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="product-content">
                    <div class="product-tabs mb-50">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#details" aria-controls="details" role="tab" data-toggle="tab">
                                    Facturas
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <table class="table table-striped table-respon">
                                    <tbody>
                                        <thead>
                                            <th>Código de Factura</th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>a</td>
                                                <td>b</td>
                                                <td>c</td>
                                                <td>d</td>
                                                <td>e</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>α</td>
                                                <td>β</td>
                                                <td>γ</td>
                                                <td>δ</td>
                                                <td>ε</td>
                                            </tr>
                                        </tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="widget widget-download">
                <div class="widget-content">
                    <div class="download download-pdf btn-dowload" style="float: right;">
                        <a href="#">
                            <div class="download-desc">
                                <div class="download-desc-icon">
                                    <img src="assets/images/sidebar/1.png" alt="icon"/>
                                </div>
                                <h4>Download.pdf</h4>
                            </div>
                            <div class="download-icon">
                                <i class="fa fa-download"></i>
                            </div>
                        </a>
                    </div>
                    <!-- .download-pdf end -->

                    <div class="download download-doc btn-dowload">
                        <a href="#">
                            <div class="download-desc">
                                <div class="download-desc-icon">
                                    <img src="assets/images/sidebar/2.png" alt="icon"/>
                                </div>
                                <h4>Download.doc</h4>
                            </div>
                            <div class="download-icon">
                                <i class="fa fa-download"></i>
                            </div>
                        </a>
                    </div>
                    <!-- .download-doc end -->
                </div>
            </div> --}}
        </div>
    </div>
</section>




@endsection
