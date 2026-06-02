@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
        <h2 class="text-xl font-bold text-slate-800 mb-6">Tambah Tarif Ongkir Baru</h2>

        <form action="{{ route('admin.shipping-rates.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Wilayah Tujuan</label>
                    <select name="region_id" class="w-full rounded-lg border-slate-300" required>
                        <option value="">-- Pilih Wilayah --</option>
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Jenis Layanan</label>
                    <select name="service_type" id="service_type" class="w-full rounded-lg border-slate-300" onchange="toggleFields()" required>
                        <option value="darat_laut">Darat & Laut</option>
                        <option value="udara">Udara</option>
                        <option value="motor">Pengiriman Motor</option>
                        <option value="mobil">Pengiriman Mobil</option>
                        <option value="alat_berat">Alat Berat</option>
                        <option value="charter">Charter Armada</option>
                    </select>
                </div>

                <div id="vehicle_field" style="display:none;">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Jenis Kendaraan / CC</label>
                    <input type="text" name="vehicle_type" class="w-full rounded-lg border-slate-300" placeholder="Contoh: Vario 150cc">
                </div>

                <div id="fleet_field" style="display:none;">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Jenis Armada</label>
                    <input type="text" name="fleet_type" class="w-full rounded-lg border-slate-300" placeholder="Contoh: Truk Fuso">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Tujuan Detail (Kota/Kab)</label>
                    <input type="text" name="destination" class="w-full rounded-lg border-slate-300" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Harga (Rp)</label>
                    <input type="number" name="base_price" class="w-full rounded-lg border-slate-300" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Estimasi Waktu</label>
                    <input type="text" name="estimation" class="w-full rounded-lg border-slate-300" placeholder="Contoh: 3 - 5 Hari" required>
                </div>
            </div>

           <div class="actions" style="margin-top: 1rem; display: flex; gap: 0.5rem; justify-content: flex-end;">
    <a href="{{ route('admin.shipping-rates.index') }}" class="btn ghost">Batal</a>
    <button type="submit" class="btn">Simpan Tarif</button>
</div>
        </form>
    </div>
</div>

<script>
function toggleFields() {
    const type = document.getElementById('service_type').value;
    const vehicleField = document.getElementById('vehicle_field');
    const fleetField = document.getElementById('fleet_field');
    
    if(type === 'motor' || type === 'mobil') {
        vehicleField.style.display = 'block';
        fleetField.style.display = 'none';
    } else if(type === 'charter') {
        vehicleField.style.display = 'none';
        fleetField.style.display = 'block';
    } else {
        vehicleField.style.display = 'none';
        fleetField.style.display = 'none';
    }
}
document.addEventListener('DOMContentLoaded', toggleFields);
</script>
@endsection