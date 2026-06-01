<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::query()
            ->orderBy('name')
            ->paginate(12);

        return view('admin.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('admin.regions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'slug' => ['nullable', 'string', 'max:120', 'unique:regions,slug'],
        ]);

        $slug = $validated['slug'] ?: Str::slug($validated['name']);

        Region::create([
            'name' => $validated['name'],
            'slug' => $slug,
        ]);

        return redirect()->route('admin.regions.index')->with('status', 'Region berhasil ditambahkan.');
    }

    public function edit(Region $region)
    {
        return view('admin.regions.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'slug' => ['nullable', 'string', 'max:120', 'unique:regions,slug,' . $region->id],
        ]);

        $slug = $validated['slug'] ?: Str::slug($validated['name']);

        $region->update([
            'name' => $validated['name'],
            'slug' => $slug,
        ]);

        return redirect()->route('admin.regions.index')->with('status', 'Region berhasil diperbarui.');
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('admin.regions.index')->with('status', 'Region berhasil dihapus.');
    }
}
