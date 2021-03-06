@section('custom-css')
  <link rel="stylesheet" href="/css/cart.css" />
@endsection

<div
    class="modal fade"
    id="pinfo-modal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="pinfo-modal-label"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-centered modal-lg"
        role="document"
        id="my-pinfo-modal"
        tabindex="-1"
    >
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="pi-title" id="pi-med-name">
                            Dolex 500mg 20 tabletas
                        </h3>
                        <p id="pi-med-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                        </p>

                        <!-- Hidden inputs for special data -->
                        <input type="hidden" id="hidden_selling_price" value="">
                        <input type="hidden" id="hidden_medicine_id" value="">
                        <input type="hidden" id="hidden_item_code" value="">
                        <input type="hidden" id="hidden_item_pres_required" value="">
                        <input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">

                        <div class="row mt-5">
                            <div class="col">
                                <label class="pi-label" for=""
                                    >Comercializado por:</label
                                >
                                <input
                                    type="text"
                                    id="pi-med-comby"
                                    class="pi-input"
                                    value="GLAXOSMITHKLINE CONSUMER"
                                    readonly
                                />
                            </div>
                            <div class="col">
                                <label class="pi-label" for=""
                                    >Formula Médica:</label
                                >
                                <input
                                    type="text"
                                    id="pi-med-form"
                                    class="pi-input"
                                    value="Optional"
                                    readonly
                                />
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label class="pi-label" for=""
                                    >Composición:</label
                                >
                                <input
                                    type="text"
                                    id="pi-med-composition"
                                    class="pi-input"
                                    value=""
                                    readonly
                                />
                            </div>
                            <div class="col">
                                <label class="pi-label" for=""
                                    >Tipo Medicamento:</label
                                >
                                <input
                                    type="text"
                                    id="pi-med-typm"
                                    class="pi-input"
                                    value="ANALGESICOS"
                                    readonly
                                />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <img
                            class="pi-img"
                            id="pi-med-img"
                            width=240px
                            src="/images/products/default.png"
                            alt=""
                        />
                    </div>

                    <div class="pi-shop-box">
                        <div class="row align-items-end">
                            <div class="col">
                                <h4 class="pi-title">Cantidad</h4>
                                <input
                                    id="pi-med-quantity"
                                    class="pi-input-border"
                                    min="1"
                                    value="1"
                                    type="number"
                                />
                            </div>
                            <div class="col" hidden>
                                <h4 class="pi-title">Precio Unit</h4>
                                <input
                                    readonly
                                    id="pi-med-price-unit"
                                    class="pi-input-border"
                                    type="number"
                                />
                            </div>
                            <div class="col">
                                <h4 class="pi-title">Precio Total</h4>
                                <input
                                    readonly
                                    id="pi-med-price"
                                    class="pi-input-border"
                                    type="text"
                                />
                            </div>
                            <div class="col">
                                <button class="dra-button add_to_cart">
                                    Añadir al Carrito
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- <h2 class="pi-title">Alternativas</h2>
                    <div class="dra-divider mb-4"></div>
                    <div class="row">
                        <div class="col-6">
                            <div class="med-box">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img
                                            class="med-box-img"
                                            src="/assets/images/dolex.png"
                                            alt=""
                                        />
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="pi-title">
                                            DOLEX 500 MG 100 TABLETAS
                                        </h4>
                                        <p>Lorem impsum, lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="med-box">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img
                                            class="med-box-img"
                                            src="/assets/images/dolex.png"
                                            alt=""
                                        />
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="pi-title">
                                            DOLEX 500 MG 100 TABLETAS
                                        </h4>
                                        <p>Lorem impsum, lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
