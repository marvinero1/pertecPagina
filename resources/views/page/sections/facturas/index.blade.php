@extends('page.layouts.main')

@section('content')
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/backgroundProd.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
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
            @if (empty($buscardorEmpty))
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-4">
                        <div class="heading-right">
                            <p class="mb-0">Verificar Facturas</p>
                            <h2>Mis Facturas</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="float: right;">
                        <form
                        style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group" style="width: 545px;">
                                <input type="text" class="form-control font-frank-book" placeholder="Ingrese su C.I o NIT" name="buscarpor"
                                    style="border: 1px #093070 solid; height: 40px; padding-left: 12px; font-size: 1.3rem; color: #5a5a5ab8;">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" style="border: 1px #093070 solid; font-size: 1.3rem;width:100px">
                                        <i class="fa fa-search"></i> Buscar</button>
                                </span>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            @else
            <div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-4">
					<div class="heading-right">
						<p class="mb-0">Verificar Facturas</p>
						<h2>Mis Facturas</h2>
					</div>
				</div>
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
            @endif
            


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
