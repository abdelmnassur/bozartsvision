<x-admin-basic>
    <!-- MAIN CONTENT-->
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-30">
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
                                    @foreach ($artistes as $artiste)
                                    <tr>
                                        <td> {{ $artiste }} </td>
                                        <td> {{ $artiste }} </td>
                                        <td> {{ $artiste }} </td>
                                        <td> {{ $artiste }} </td>
                                        <td>
                                            @if ($artiste->status)
                                                <div class="card-body">
                                                    <label class="switch switch-text switch-success switch-pill">
                                                        <input type="checkbox" class="switch-input" checked="">
                                                        <span data-on="On" data-off="Off" class="switch-label"></span>
                                                        <span class="switch-handle"></span>
                                                    </label>
                                                </div>
                                                @else
                                                <div class="card-body">
                                                    <label class="switch switch-text switch-success switch-pill">
                                                        <input type="checkbox" class="switch-input" checked="true">
                                                        <span data-on="On" data-off="Off" class="switch-label"></span>
                                                        <span class="switch-handle"></span>
                                                    </label>
                                                </div>
                                            @endif
                                            
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