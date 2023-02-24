<x-admin-basic>
    <!-- MAIN CONTENT-->
    <div class="section__content section__content--p10">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-3 m-b-5">
                                <i class="zmdi zmdi-account-calendar"></i>user data
                            </h3>
                        </div>
                        <div class="card-body card-block row">
                            <div class="filters m-b-5 col-md-6">
                                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">All Users</option>
                                        <option value="">Activer</option>
                                        <option value="">Desactiver</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                            <div class="filters m-b-45 col-md-6">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="i-btn">
                                            <button class="btn btn-primary">
                                                <i class="fa fa-search"></i> Search
                                            </button>
                                        </div>
                                        <input type="text" id="input1-group2" name="input1-group2" placeholder="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section__content section__content--p10">
        <div class="container-fluid">
            <div class="row m-t-5">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Téléphone</th>
                                    <th>email</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td> {{ $user->prenom }} </td>
                                        <td> {{ $user->telephone }} </td>
                                        <td> {{ $user->email }} </td>
                                        <td> {{ $user->status }} </td>
                                        <td>
                                    
                                                
                                                <div class="card-body">
                                                    <label class="switch switch-text switch-success switch-pill">
                                                        <input type="checkbox" class="switch-input"
                                                            @if ($user->status == 1) checked="true" @endif>
                                                        <span data-on="On" data-off="Off"
                                                            class="switch-label"></span>
                                                        <span class="switch-handle"></span>
                                                    </label>
                                                </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</x-admin-basic>

<script>
    //$('.card-body').hide();
</script>