@extends('layouts.landing')

@section('isi_aku_mas')
    <div role="main" class="main" style="position: relative">
        <section id="nutritional-properties" class="section section-primary border-0 mb-0 appear-animation"
            data-appear-animation="fadeIn" style="margin: 0px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row text-center">
                            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center"
                                style="min-height: 100px">
                                <div class="">
                                    <h1 class="title-nutritional-properties appear-animation mb-3"
                                        data-appear-animation="maskUp">
                                        NUTRITIONAL PROPERTIES
                                    </h1>
                                    <h2 class="subtitle-nutritional-properties mb-0 mt-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="500">
                                        <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-WHITE-LOGO.png') }}"
                                            class="img-text" />
                                        is a revolutionary food product for a healthy life
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="nutritional-table">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-body appear-animation" data-appear-animation="fadeIn"
                                data-appear-animation-delay="500" data-appear-animation-duration="1s">
                                <table id="table" class="table table-bordered w-100 table-custom">
                                    <caption class="text-white text-center">
                                        values per 1 kg of
                                        <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-WHITE-LOGO.png') }}"
                                            class="img-text" />
                                    </caption>
                                    <thead class="thead-custom">
                                        <tr>
                                            <th>DESCRIPTION</th>
                                            <th>VALUE</th>
                                            <th>REMARKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Moisture Content</td>
                                            <td>187 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Total Calories</td>
                                            <td>3175 kcal</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Total Sugar</td>
                                            <td>736 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Sucrose</td>
                                            <td>639 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Glucose</td>
                                            <td>57 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Fructose</td>
                                            <td>40 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Dietery Fiber</td>
                                            <td>27 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Protein</td>
                                            <td>16 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Fat</td>
                                            <td>0 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Carbohydrates</td>
                                            <td>778 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Ash Content</td>
                                            <td>20 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Amino Acids</td>
                                            <td>4,7 g</td>
                                            <td>free and bound</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">glutamic acid</td>
                                            <td>1,5 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">asparatic acid</td>
                                            <td>1,1 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">glycine</td>
                                            <td>1,0 g</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">serine</td>
                                            <td>466 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">alanine</td>
                                            <td>147 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">threonine</td>
                                            <td>60 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">proline</td>
                                            <td>57 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">arginine</td>
                                            <td>52 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">isoleucine</td>
                                            <td>50 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">lysine</td>
                                            <td>34 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">valine</td>
                                            <td>28 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">citrulline</td>
                                            <td>28 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">methionine</td>
                                            <td>26 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">histidine</td>
                                            <td>25 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">phenylalanine</td>
                                            <td>9,4 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">asparagine</td>
                                            <td>3,8 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">leucine</td>
                                            <td>2,8 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">tyrosine</td>
                                            <td>1,3 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td class="fst-italic">tryptophan</td>
                                            <td>44 μg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Sodium (Na)</td>
                                            <td>824 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Potassium (K)</td>
                                            <td>5176 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Magnesium (Mg)</td>
                                            <td>216 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Calcium (Ca)</td>
                                            <td>112 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Chloride (Cl)</td>
                                            <td>2629 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Phosphorous (P)</td>
                                            <td>2345 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Iron (Fe)</td>
                                            <td>5,8 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Zink (Zn)</td>
                                            <td>49 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Copper (Cu)</td>
                                            <td>19 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Manganese (Mn)</td>
                                            <td>0,8 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Selenium (Se)</td>
                                            <td>40 μg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B1 (Thiamine)</td>
                                            <td>19 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B2 (Riboflavin)</td>
                                            <td>4,3 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B3 (Niacin)</td>
                                            <td>425 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B4 (Adenine)</td>
                                            <td>2,3 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B5 (Pantothenic Acid)</td>
                                            <td>54 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B6 (Pyridoxine)</td>
                                            <td>60 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B7 (Biotin)</td>
                                            <td>1,8 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B9 (Folic Acid)</td>
                                            <td>1,4 μg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B10 (PABA)</td>
                                            <td>1,4 mg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin B12 (Cobalamin)</td>
                                            <td>2,3 μg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin E (Alpha-Tocopherol)</td>
                                            <td>129 μg</td>
                                            <td>typical value</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamin C (Ascorbic Acid)</td>
                                            <td>493 mg</td>
                                            <td>analysed</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <p class="text-info-2 appear-animation" data-appear-animation="fadeIn"
                            data-appear-animation-delay="0" data-appear-animation-duration="1s">
                            Values correspond to:
                        </p>
                        <ul class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"
                            data-appear-animation-duration="1">
                            <li class="li-info">
                                one kilogram (i.e. 1000 grams) of
                                <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                    class="img-text" />
                            </li>
                            <li class="li-info">
                                <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                    class="img-text" />
                                based on a density equivalent to 73.6°Brix
                                <br />
                                (density will follow the customer's request)
                            </li>
                        </ul>
                        <p class="text-info-2 appear-animation" data-appear-animation="fadeIn"
                            data-appear-animation-delay="0" data-appear-animation-duration="1s">
                            Values may vary from season to season.<br />
                            <small><i>Last Update: June 2023</i></small>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('gaya')
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/datatables.min.css" rel="stylesheet" />
@endsection

@section('skrip_jawa')
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/datatables.min.js"></script>
    <script>
        let tabel = new DataTable("#table", {
            fixedHeader: true,
            scrollX: true,
            ordering: false,
        });
    </script>
@endsection
