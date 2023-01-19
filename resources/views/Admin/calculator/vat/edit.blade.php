@extends(backpack_view('blank'))
@include('Admin.includes.cdn')

@section('content')
    <main class="main pt-2">
        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/vat">VAT</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">edit</li>
            </ol>
        </nav>

        <section class="container-fluid">
            <h2 class="ml-1">
                <span class="text-capitalize">VAT</span>
                <small>Edit VAT Information.</small>

                <small><a href="/admin/vat" class="d-print-none font-sm"><i class="la la-angle-double-left"></i> Back to VAT
                        <span>Information</span></a></small>
            </h2>
        </section>
        <div class="container-fluid animated fadeIn">
            <div class="row">
                <form action="{{ url('/admin/vat/' . $details[0]->id) }}" method="post">
                    {!! csrf_field() !!}
                    {!! method_field('PUT') !!}

                    <div class="col-md-12 bold-labels">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body row">

                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Amount Field Label</label>


                                            <input type="text" name="amount_label"
                                                value="{{ $details[0]->amount_label }}" class="form-control" required>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Amount Tooltip</label>


                                            <textarea name="amount_tooltip" id="amount_tooltip">{{ $details[0]->amount_tooltip }}</textarea>



                                        </div>

                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Convert Field Label</label>


                                            <input type="text" name="convert_label"
                                                value="{{ $details[0]->convert_label }}" class="form-control" required>



                                        </div>

                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Convert Tooltip</label>


                                            <textarea name="convert_tooltip" id="convert_tooltip">{{ $details[0]->convert_tooltip }}</textarea>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Rate Field Label</label>


                                            <input type="text" name="rate_label" value="{{ $details[0]->rate_label }}"
                                                class="form-control" required>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Rate Tooltip</label>


                                            <textarea name="rate_tooltip" id="rate_tooltip">{{ $details[0]->rate_tooltip }}</textarea>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Button Text</label>


                                            <input type="text" name="button_text" value="{{ $details[0]->button_text }}"
                                                class="form-control" required>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Content</label>


                                            <textarea name="content" id="description">{{ $details[0]->content }}</textarea>



                                        </div>

                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Result Content</label>


                                            <textarea name="result_details" id="result_content">{{ $details[0]->result_content }}</textarea>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Seo Title</label>


                                            <input type="text" name="seo_title" value="{{ $details[0]->seo_title }}"
                                                class="form-control" required>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Seo Meta</label>


                                            <textarea name="seo_meta" class="form-control">{{ $details[0]->seo_meta }}</textarea>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Seo Keywords</label>


                                            <textarea name="seo_keywords" class="form-control">{{ $details[0]->seo_meta }}</textarea>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="saveActions" class="form-group ml-3 ">

                        <input type="hidden" name="_save_action" value="save_and_back">
                        <div class="btn-group" role="group">

                            <button type="submit" class="btn btn-success">
                                <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                <span data-value="save_and_back">Update Information</span>
                            </button>



                        </div>

                        <a href="/admin/bmi" class="btn btn-default"><span class="la la-ban"></span> &nbsp;Cancel</a>

                    </div>

                </form>
                <div class="row ">
                    <div class="col-md-5 mt-5 ">
                        <h4>All Calculators</h4>

                        <input type="hidden" value="2" id="main_calculator">


                        <div class="mb-5" id="calculator_list">


                        </div>
                    </div>

                    <div class="col-md-5 mt-5">
                        <h4>Featured Calculator List</h4>

                        <input type="hidden" value="1" id="main_calculator">


                        <div id="sortable" class="mb-5">


                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function calculatorList() {
            $.get(`/api/checkBoxCalculator/2 `, function(response) {
                $("#calculator_list").html(response);
            })
        }

        calculatorList();

        function listSubmit(val) {
            const featured_calculator = val;
            const main_id = document.getElementById('main_calculator').value
            let data = {
                featured_id: val,
                main_id: main_id
            }

            axios.post('/api/featured', data)
                .then((response) => {
                    featuredCalculator()
                    calculatorList()
                })
        }

        function deleteFeatured(value) {
            $.get(`/api/deleteFeatured/${value}`, function(response) {
                calculatorList();
                featuredCalculator();
            })
        }

        function featuredCalculator() {
            $.get("/api/getFeatured/2", function(response) {
                $("#sortable").html(response);

            })
        }
        let sortIndex = 0

        featuredCalculator()
        $(function() {
            $("#sortable").sortable({
                update: function(event, ui) {

                    $.map($(this).find('label'), function(el) {

                        var sorting = $(el).index();
                        let id = el.id
                        let data = {
                            id: id,
                            sorting: sortIndex++
                        }
                        axios.post('/api/updateOrder', data)
                            .then((response) => {
                                console.log(response.data)
                            })


                    });

                }
            });


        });
    </script>

    <script>
        CKEDITOR.replace('amount_tooltip', {
            extraAllowedContent: '*(*)',
        });
        CKEDITOR.replace('convert_tooltip', {
            extraAllowedContent: '*(*)',
        });
        CKEDITOR.replace('rate_tooltip', {
            extraAllowedContent: '*(*)',
        });
        CKEDITOR.replace('content', {
            extraAllowedContent: '*(*)',
        });
        CKEDITOR.replace('result_content', {
            extraAllowedContent: '*(*)',
        });
    </script>
@endsection
