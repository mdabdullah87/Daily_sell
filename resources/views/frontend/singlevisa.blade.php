@extends('layouts.frontend')

@section('content')

<div>
<section>
        <div class="d-flex justify-content-center align-items-center">
            <div>
                <div class="fs-3 fw-bolder">Our Visa Partner</div>
                <div class="fs-5 fw-bolder ms-5">NEED VISA...??</div>
                <div>
        @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
        </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="container border rounded shadow p-2 mt-4 mb-5 bg-light">
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 p-4 m-3 mt-2 mb-2">
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-3">
                                <label class="form-label" for="citizenOf">I am a Citizen of-</label>
                                <select id="citizen" class="form-select" id="specificSizeSelect"
                                    name="selectCountry"value="{{ old('selectCountry') }}">
                                    <option value="">Select One...</option>
                                   
                                   
                                </select>
                                <!-- Create Post Form -->
                            </div>

                            <div class="col-sm-3">
                                <label class="form-label" for="TravellingTo">Travelling to</label>
                                <select class="form-select" id="specificSizeSelect"
                                    name="selectwhereTo"value="{{ old('selectwhereTo') }}">
                                    <option value="">Select One...</option>
                                  
                                </select>
                              

                            </div>

                            <div class="col-sm-3">
                                <label class="form-label" for="specificSizeSelect">Visa Category</label>
                                <select class="form-select" id="visaType" name="visaType"value="{{ old('visaType') }}">
                                    <option value="">Select One...</option>
                                </select>
                              
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-primary btn-lg mt-4">check
                                    Requirement</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    {{-- apply form after searching  --}}
    <section>
        <div>
            <div class="container border rounded shadow mt-4 bg-light">
                <div class="row">
                    <div class="col-12 p-1 m-1 mb-2">
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-3">
                                @if (isset($visainfo))
                                    <div class="d-flex">
                                        <p class="btn btn-primary badge">{{ $visainfo->country_name }}</p>&nbsp;To
                                        &nbsp; <p class="btn btn-primary badge">{{ $visainfo->where_to_go_name }}</p>
                                    </div>
                                @endif
                            </div>

                            <div class="col-sm-3">
                                @if (isset($visainfo))
                                    <p class="btn btn-primary badge"><span
                                            class="fw-bold">Price:</span>{{ $visainfo->price }}</p>
                                @endif
                            </div>
                            <div class="col-sm-3">
                                @if (isset($visainfo))
                                    <p class="btn btn-primary badge"><span
                                            class="fw-bold">Info:</span>{{ $visainfo->title }}</p>
                                @endif
                            </div>


                            @include('frontend/modal')


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- apply form after searching  end --}}
    <section>
        <div class="container my-5 border rounded shadow p-2">
            {{-- other info button section  --}}
            <div class="d-flex justify-content-center"><span>Available services for Bangladesh</span></div>
            <div class="d-flex justify-content-center align-item-center gap-2">
                <div class="btn btn-outline-primary border rounded shadow">Visa Processing</div>
                <div class="btn btn-outline-primary border rounded shadow">Visa Processing</div>
                <div class="btn btn-outline-primary border rounded shadow">Visa Processing</div>
                <div class="btn btn-outline-primary border rounded shadow">Visa Processing</div>
                <div class="btn btn-outline-primary border rounded shadow">Visa Processing</div>
                <div class="btn btn-outline-primary border rounded shadow">Visa Processing</div>
            </div>
            <hr class="mt-5">
            <hr>
            {{-- other info button section  end --}}


            {{-- button to section here  --}}

            <div class="d-flex justify-content-center align-item-center gap-2">
                <div class="btn btn-outline-primary border rounded shadow"><a href="#bacisInfo">Basic info</a></div>
                <div class="btn btn-outline-primary border rounded shadow"><a href="#cheklist">Check List</a></div>
                <div class="btn btn-outline-primary border rounded shadow"><a href="#visafee">Visa free Processing Time</a>
                </div>
                <div class="btn btn-outline-primary border rounded shadow"><a href="#visadownload">Form and Download</a></div>
                <div class="btn btn-outline-primary border rounded shadow"><a href="#accordiansection">FAQ</a></div>
            </div>
            <hr>

            {{-- visa info and faq section  --}}
            <div class="border rounded shadow mm-1 p-1 container mt-2" id="bacisInfo">
                <div class="bg-light fs-5 border-bottom-dark d-flex justify-content-center">Basic information</div>
                <hr>
                <div>
                    <h6>For Bangladesh, VISAThing provides</h6>
                    <div>✔ Visa Processing </div>
                    <div>Effortless Application Process for Obtaining a Bangladeshi Visa
                        In today’s interconnected world, international travel has become an essential part of our lives. For
                        Indian citizens planning a visit to Bangladesh, securing a visa has been made easier and more
                        convenient
                        through the Bangladesh Online Visa Application Portal. In this comprehensive guide, we will walk you
                        through the seamless process of obtaining a Bangladeshi visa.
                    </div>
                </div>
            </div>
            {{-- bacis bisa chacklist section info  --}}
            <div class="border rounded shadow mm-1 p-1 container mt-2" id="cheklist">
                <div class="bg-light fs-5 border-bottom-dark d-flex justify-content-center">Basic Visa:</div>
                <hr>
                <div>
                    <h6>For Bangladesh, VISAThing provides</h6>
                    <div>✔ Visa Processing </div>
                    <div>Effortless Application Process for Obtaining a Bangladeshi Visa
                        In today’s interconnected world, international travel has become an essential part of our lives. For
                        Indian citizens planning a visit to Bangladesh, securing a visa has been made easier and more
                        convenient
                        through the Bangladesh Online Visa Application Portal. In this comprehensive guide, we will walk you
                        through the seamless process of obtaining a Bangladeshi visa.
                    </div>
                </div>
            </div>

            {{-- visa free section section  --}}
            <div class="border rounded shadow mm-1 p-1 container mt-2" id="visafee">
                <div class="bg-light fs-5 border-bottom-dark d-flex justify-content-center">Visa Fee and Service Charge:
                </div>
                <hr>
                <div>
                    <h6>For Bangladesh, VISAThing provides</h6>
                    A business visa is a travel authorization that allows an entrepreneur or company employee to visit a
                    foreign
                    country temporarily for business purposes.
                </div>
            </div>
            {{-- Visa from and Download section --}}
            <div class="border rounded shadow mm-1 p-1 container mt-2" id="visadownload">
                <div class="bg-light fs-5 border-bottom-dark d-flex justify-content-center">Visa from and Download section:
                </div>
                <hr>
                <div>
                    <h6>For Bangladesh, VISAThing provides</h6>
                    A business visa is a travel authorization that allows an entrepreneur or company employee to visit a
                    foreign
                    country temporarily for business purposes.
                </div>
            </div>
            {{-- faq section start here  --}}
            <div id="accordiansection">
                <div class="accordion accordion-flush" id="accordioncontent">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordioncontent">
                            <div class="accordion-body">A business visa is a travel authorization that allows an
                                entrepreneur or
                                company employee to visit a
                                foreign
                                country temporarily for business purposes
                                <code>business visa</code>country temporarily for business purposes
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordioncontent">
                            <div class="accordion-body">A business visa is a travel authorization that allows an
                                entrepreneur or
                                company employee to visit a
                                foreign
                                country temporarily for business purposes
                                <code>business visa</code>country temporarily for business purposes
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordioncontent">
                            <div class="accordion-body">A business visa is a travel authorization that allows an
                                entrepreneur
                                or company employee to visit a
                                foreign
                                country temporarily for business purposes
                                <code>business visa</code>country temporarily for business purposes
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    $(document).ready(function() {
        $('a[href^="#"]').on('click', function(event) {
            var target = $($(this).attr('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    });
</script>

</div>



@endsection


<script>
    window.addEventListener('closeModal', event => {
     $("#staticBackdrop").modal('hide');                
})
</script>
