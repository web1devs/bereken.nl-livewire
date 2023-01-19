@extends(backpack_view('blank'))
@include('Admin.includes.cdn')

@section('content')
    <main class="main pt-2">
        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/bmi">Populator Calculator</a></li>

            </ol>
        </nav>

        <section class="container-fluid">
            <h2 class="ml-1">
                <span class="text-capitalize">Populer Calculator</span>
                <small>Edit Populer Calculator.</small>


            </h2>
        </section>

        <div class="container-fluid animated fadeIn">

            <div class="row">

                <div class="col-md-12 bold-labels">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">

                                
                                    <div class="card-body row">
                                        <div class="form-group col-md-5" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label style="font-size: 20px;">Calculator list</label>

                                            <div id="calculator_list">

                                            </div>



                                        </div>
                                        <div class="col-md-5 ">
                                            <h4>Populer Calculator List</h4>
                    
                                            <input type="hidden" value="1" id="main_calculator">
                    
                    
                                            <div id="sortable" class="mb-5">
                    
                    
                                            </div>
                    
                                        </div>
                                    </div>

                                

                                    

                               


                            </div>
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
            $.get(`/api/calculator-list`, function(response) {
                $("#calculator_list").html(response);
            })
        }

        calculatorList();

        function populerCalculator(val) {
            let data = {
                calculator_id: val
            }

            axios.post('/api/populerCalculator-submit', data)
                .then((response) => {
                    PopulerCalculator();
                    calculatorList()
                })
        }
        function PopulerCalculator() {
            $.get("/api/populer-list", function(response) {
                $("#sortable").html(response);
            })
        }
        let sortIndex = 0
        PopulerCalculator();
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
                        axios.post('/api/update-order', data)
                            .then((response) => {
                                console.log(response.data)
                            })


                    });

                }
            });


        });

        function deletePopuler(val){
            axios.get('/api/delete/populer-list/'+val)
            .then((response)=>{
                PopulerCalculator();
                calculatorList()
            })
        }
      
    </script>
@endsection
