@extends('layouts.admin')

@section('content')
<div class="mb-8 flex justify-between items-end">
    <div>
        <h1 class="text-3xl font-heading font-bold text-primary mb-2">Edit Property Details</h1>
        <p class="text-teal-800/60 text-sm">Update detailed information for the property.</p>
    </div>
    <a href="{{ route('admin.property-details.index') }}" class="text-teal-600 hover:text-teal-800 font-bold transition-colors">
        &larr; Back to List
    </a>
</div>

<form action="{{ route('admin.property-details.update', $propertyDetail->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-3xl shadow-sm border border-teal-50">
    @csrf
    @method('PUT')

    @if ($errors->any())
        <div class="bg-red-50 text-red-600 p-4 rounded-xl mb-6">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Property *</label>
            <select name="property_id" id="property_id" required class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                <option value="">Select Property</option>
                @foreach($properties as $property)
                    <option value="{{ $property->id }}" {{ old('property_id', $propertyDetail->property_id) == $property->id ? 'selected' : '' }}>{{ $property->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Property Type *</label>
            <select name="property_type_id" id="property_type_id" required class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                <option value="">Select Property First</option>
                @foreach($propertyTypes as $type)
                    <option value="{{ $type->id }}" {{ old('property_type_id', $propertyDetail->property_type_id) == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Project Name</label>
            <input type="text" name="project_name" value="{{ old('project_name', $propertyDetail->project_name) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div id="bhk_type_wrapper">
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">BHK Type</label>
            <select name="bhk_type" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                <option value="">Select BHK</option>
                @foreach(['1 BHK', '2 BHK', '3 BHK', '4 BHK', '5 BHK', '5+ BHK'] as $bhk)
                <option value="{{ $bhk }}" {{ old('bhk_type', $propertyDetail->bhk_type) == $bhk ? 'selected' : '' }}>{{ $bhk }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Property Status</label>
            <select name="property_status" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                <option value="">Select Status</option>
                <option value="Ready to Move" {{ old('property_status', $propertyDetail->property_status) == 'Ready to Move' ? 'selected' : '' }}>Ready to Move</option>
                <option value="Under Construction" {{ old('property_status', $propertyDetail->property_status) == 'Under Construction' ? 'selected' : '' }}>Under Construction</option>
            </select>
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Pricing</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Total Price</label>
            <input type="number" step="0.01" name="total_price" value="{{ old('total_price', $propertyDetail->total_price) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Price Per Sq Ft</label>
            <input type="number" step="0.01" name="price_per_sq_ft" value="{{ old('price_per_sq_ft', $propertyDetail->price_per_sq_ft) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Area Details</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Carpet Area</label>
            <input type="text" name="carpet_area" value="{{ old('carpet_area', $propertyDetail->carpet_area) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. 1200 Sq Ft">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Built-up Area</label>
            <input type="text" name="builtup_area" value="{{ old('builtup_area', $propertyDetail->builtup_area) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. 1500 Sq Ft">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Location</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">City</label>
            <input type="text" name="city" value="{{ old('city', $propertyDetail->city) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Area/Locality</label>
            <input type="text" name="locality" value="{{ old('locality', $propertyDetail->locality) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Property Details</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Floor Number</label>
            <input type="text" name="floor_number" value="{{ old('floor_number', $propertyDetail->floor_number) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Total Floors</label>
            <input type="text" name="total_floors" value="{{ old('total_floors', $propertyDetail->total_floors) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Facing</label>
            <input type="text" name="facing" value="{{ old('facing', $propertyDetail->facing) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. East, North-East">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Furnishing Status</label>
            <select name="furnishing_status" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                <option value="">Select Status</option>
                <option value="Furnished" {{ old('furnishing_status', $propertyDetail->furnishing_status) == 'Furnished' ? 'selected' : '' }}>Furnished</option>
                <option value="Semi Furnished" {{ old('furnishing_status', $propertyDetail->furnishing_status) == 'Semi Furnished' ? 'selected' : '' }}>Semi Furnished</option>
                <option value="Unfurnished" {{ old('furnishing_status', $propertyDetail->furnishing_status) == 'Unfurnished' ? 'selected' : '' }}>Unfurnished</option>
            </select>
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Bathrooms</label>
            <input type="number" name="bathrooms" value="{{ old('bathrooms', $propertyDetail->bathrooms) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Balconies</label>
            <input type="number" name="balconies" value="{{ old('balconies', $propertyDetail->balconies) }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Media</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Cover Image</label>
            @if($propertyDetail->cover_image)
            <img src="{{ asset($propertyDetail->cover_image) }}" alt="Cover" class="h-20 w-32 object-cover rounded-xl mb-2">
            @endif
            <input type="file" name="cover_image" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm p-2 border">
            <span class="text-xs text-gray-500">Leave blank to keep existing cover</span>
        </div>
        <div class="md:col-span-2">
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Property Images (Multiple)</label>
            
            @if($propertyDetail->property_images && count($propertyDetail->property_images) > 0)
            <p class="text-xs text-teal-600 mb-3 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4M17 8v12m0 0l4-4m-4 4l-4-4"/></svg>
                Drag to reorder &bull; Click <span class="text-red-500 font-semibold">✕</span> to delete an image
            </p>
            <div id="sortable-images" class="flex flex-wrap gap-3 mb-4 p-3 bg-teal-50/50 rounded-2xl border border-dashed border-teal-200 min-h-[90px]">
                @foreach($propertyDetail->property_images as $img)
                <div class="relative group image-item" data-path="{{ $img }}" style="cursor:grab;">
                    <img src="{{ asset($img) }}" alt="Property" class="h-24 w-24 object-cover rounded-xl border-2 border-white shadow-md group-hover:border-primary/40 transition-all">
                    <button type="button" onclick="removeExistingImage(this)" title="Delete image"
                        class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full text-xs font-bold shadow-lg hover:bg-red-600 transition-colors flex items-center justify-center leading-none opacity-0 group-hover:opacity-100">
                        &times;
                    </button>
                    <div class="absolute bottom-1 left-1 right-1 bg-black/40 text-white text-[9px] text-center rounded-md py-0.5 opacity-0 group-hover:opacity-100 transition-opacity select-none">
                        &#9776; Drag
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            {{-- Hidden inputs for existing image order and deletions --}}
            <div id="existing-images-inputs"></div>
            <input type="hidden" name="deleted_images" id="deleted_images_input" value="">

            <div class="mt-3">
                <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-1.5 block">Add New Images</label>
                <input type="file" name="property_images[]" multiple id="new_property_images"
                    class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm p-2 border">
                <span class="text-xs text-gray-500">New uploads will be appended after existing images</span>
            </div>
        </div>
        <div class="md:col-span-2">
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Videos (URL)</label>
            <input type="text" name="videos" value="{{ old('videos', $propertyDetail->videos) }}" placeholder="e.g. YouTube URL" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Description</h3>
    <div class="mb-6">
        <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Short Description</label>
        <textarea name="short_description" rows="3" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">{{ old('short_description', $propertyDetail->short_description) }}</textarea>
    </div>
    <div class="mb-6">
        <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Full Description</label>
        <textarea name="full_description" id="full_description" rows="5" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">{{ old('full_description', $propertyDetail->full_description) }}</textarea>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Amenities</h3>
    <div id="amenities-container" class="space-y-3 mb-4">
        @if(is_array(old('amenities', $propertyDetail->amenities)) && count(old('amenities', $propertyDetail->amenities)) > 0)
            @foreach(old('amenities', $propertyDetail->amenities) as $index => $amenity)
            <div class="flex gap-2 amenity-row">
                <input type="text" name="amenities[]" value="{{ $amenity }}" class="flex-1 border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. Swimming Pool">
                <button type="button" class="px-4 py-2 bg-red-50 text-red-500 rounded-xl hover:bg-red-100 transition-colors remove-amenity">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>
            @endforeach
        @else
            <div class="flex gap-2 amenity-row">
                <input type="text" name="amenities[]" class="flex-1 border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. Swimming Pool">
                <button type="button" class="px-4 py-2 bg-red-50 text-red-500 rounded-xl hover:bg-red-100 transition-colors remove-amenity">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>
        @endif
    </div>
    <button type="button" id="add-amenity" class="text-sm font-bold text-secondary hover:text-primary transition-colors flex items-center gap-1">
        <i data-lucide="plus" class="w-4 h-4"></i> Add More Amenity
    </button>

    <div class="mt-8 flex justify-end">
        <button type="submit" class="bg-primary text-white px-8 py-3 rounded-xl font-bold hover:bg-primary/90 transition-colors">
            Update Property Details
        </button>
    </div>
</form>

<!-- Include Summernote CSS/JS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<!-- SortableJS for drag-to-reorder -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Summernote
        $('#full_description').summernote({
            placeholder: 'Enter full description here...',
            tabsize: 2,
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        // Dynamic Property Type loading
        function toggleBHK() {
            var selectedPropertyText = $('#property_id option:selected').text().toLowerCase();
            if (selectedPropertyText.includes('commercial')) {
                $('#bhk_type_wrapper').hide();
                $('select[name="bhk_type"]').val('');
            } else {
                $('#bhk_type_wrapper').show();
            }
        }
        
        toggleBHK();

        $('#property_id').change(function() {
            toggleBHK();
            var propertyId = $(this).val();
            if(propertyId) {
                $.ajax({
                    url: '/admin/property-details/get-property-types/'+propertyId,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('#property_type_id').empty();
                        $('#property_type_id').append('<option value="">Select Property Type</option>');
                        $.each(data, function(key, value) {
                            $('#property_type_id').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });
                    }
                });
            } else {
                $('#property_type_id').empty();
                $('#property_type_id').append('<option value="">Select Property First</option>');
            }
        });

        // Dynamic Amenities
        $('#add-amenity').click(function() {
            var row = `
                <div class="flex gap-2 amenity-row">
                    <input type="text" name="amenities[]" class="flex-1 border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. Gym">
                    <button type="button" class="px-4 py-2 bg-red-50 text-red-500 rounded-xl hover:bg-red-100 transition-colors remove-amenity">
                        <i data-lucide="x" class="w-4 h-4"></i>
                    </button>
                </div>
            `;
            $('#amenities-container').append(row);
            lucide.createIcons();
        });

        $(document).on('click', '.remove-amenity', function() {
            $(this).closest('.amenity-row').remove();
        });
    });

    // ── Image Manager ──────────────────────────────────────────────────────────
    var deletedImages = [];

    // Initialise SortableJS on the image grid
    var sortableEl = document.getElementById('sortable-images');
    if (sortableEl) {
        Sortable.create(sortableEl, {
            animation: 150,
            ghostClass: 'opacity-40',
            onEnd: syncImageOrder
        });
    }

    // Sync the hidden inputs that represent the kept images in their current order
    function syncImageOrder() {
        var container = document.getElementById('existing-images-inputs');
        if (!container) return;
        container.innerHTML = '';
        var items = document.querySelectorAll('#sortable-images .image-item');
        items.forEach(function(item) {
            var input = document.createElement('input');
            input.type  = 'hidden';
            input.name  = 'existing_images[]';
            input.value = item.getAttribute('data-path');
            container.appendChild(input);
        });
    }

    // Mark an image for deletion and remove its card
    function removeExistingImage(btn) {
        var card = btn.closest('.image-item');
        var path = card.getAttribute('data-path');
        deletedImages.push(path);
        document.getElementById('deleted_images_input').value = JSON.stringify(deletedImages);
        card.style.transition = 'opacity 0.2s, transform 0.2s';
        card.style.opacity = '0';
        card.style.transform = 'scale(0.8)';
        setTimeout(function() {
            card.remove();
            syncImageOrder();
        }, 200);
    }

    // Sync on page load so the initial order is captured
    syncImageOrder();
</script>
@endsection
