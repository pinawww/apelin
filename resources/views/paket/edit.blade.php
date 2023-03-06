@extends('layouts.main',['title'=>'Paket'])
@section('content')
<x-content :title="['name'=>'Paket','icon'=>'fas fa-cubes']">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <form
            class="card card-info"
            method="POST"
            action="{{ route('paket.update',['paket'=>$paket->id]) }}">
            <div class="card-header">
                Edit Paket
            </div>
            <div class="card-body">
                @csrf 
                @method('put')
                <x-input
                label="Nama Paket"
                name="nama_paket"
                :value="$paket->nama_paket" />
                
                <x-input
                label="Harga"
                name="harga"
                :value="$paket->harga" />

                <x-select
                label="Jenis"
                name="jenis"
                :value="$paket->jenis"
                :data-option="[
                    ['option'=>'Kiloan','value'=>'kiloan'],
                    ['option'=>'T-Shirt/Kaos','value'=>'kaos'],
                    ['option'=>'Bed Cover','value'=>'bed_cover'],
                    ['option'=>'Selimut','value'=>'selimut'],
                    ['option'=>'Lainnya','value'=>'lain'],
                ]" />

                <x-select
                label="Outlet"
                name="outlet_id"
                :value="$paket->outlet_id"
                :data-option="$outlets" />

            </div>
            <div class="card-footer">
                <x-btn-update />
            </div>
        </form>
    </div>
</div>
</x-content>
@endsection