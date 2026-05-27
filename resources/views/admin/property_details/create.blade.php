@extends('layouts.admin')

@section('content')
<div class="mb-8 flex justify-between items-end">
    <div>
        <h1 class="text-3xl font-heading font-bold text-primary mb-2">Add Property Details</h1>
        <p class="text-teal-800/60 text-sm">Create detailed information for a property.</p>
    </div>
    <a href="{{ route('admin.property-details.index') }}" class="text-teal-600 hover:text-teal-800 font-bold transition-colors">
        &larr; Back to List
    </a>
</div>

<form action="{{ route('admin.property-details.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-3xl shadow-sm border border-teal-50">
    @csrf

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
                    <option value="{{ $property->id }}" {{ old('property_id') == $property->id ? 'selected' : '' }}>{{ $property->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Property Type *</label>
            <select name="property_type_id" id="property_type_id" required class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                <option value="">Select Property First</option>
            </select>
        </div>
        
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Project Name</label>
            <input type="text" name="project_name" value="{{ old('project_name') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div id="bhk_type_wrapper">
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">BHK Type</label>
            <select name="bhk_type" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                <option value="">Select BHK</option>
                <option value="1 BHK">1 BHK</option>
                <option value="2 BHK">2 BHK</option>
                <option value="3 BHK">3 BHK</option>
                <option value="4 BHK">4 BHK</option>
                <option value="5 BHK">5 BHK</option>
                <option value="5+ BHK">5+ BHK</option>
            </select>
        </div>
        
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Property Status</label>
            <select name="property_status" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                <option value="">Select Status</option>
                <option value="Ready to Move">Ready to Move</option>
                <option value="Under Construction">Under Construction</option>
            </select>
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Pricing</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Total Price</label>
            <input type="number" step="0.01" name="total_price" value="{{ old('total_price') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Price Per Sq Ft</label>
            <input type="number" step="0.01" name="price_per_sq_ft" value="{{ old('price_per_sq_ft') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Area Details</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Carpet Area</label>
            <input type="text" name="carpet_area" value="{{ old('carpet_area') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. 1200 Sq Ft">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Built-up Area</label>
            <input type="text" name="builtup_area" value="{{ old('builtup_area') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. 1500 Sq Ft">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Location</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">City</label>
            <input type="text" name="city" value="{{ old('city') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Area/Locality</label>
            <input type="text" name="locality" value="{{ old('locality') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Property Details</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Floor Number</label>
            <input type="text" name="floor_number" value="{{ old('floor_number') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Total Floors</label>
            <input type="text" name="total_floors" value="{{ old('total_floors') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Facing</label>
            <input type="text" name="facing" value="{{ old('facing') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. East, North-East">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Furnishing Status</label>
            <select name="furnishing_status" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                <option value="">Select Status</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi Furnished">Semi Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
            </select>
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Bathrooms</label>
            <input type="number" name="bathrooms" value="{{ old('bathrooms') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Balconies</label>
            <input type="number" name="balconies" value="{{ old('balconies') }}" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Media</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Cover Image</label>
            <input type="file" name="cover_image" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm p-2 border">
        </div>
        <div>
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Property Images (Multiple)</label>
            <input type="file" name="property_images[]" multiple class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm p-2 border">
        </div>
        <div class="md:col-span-2">
            <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Videos (URL)</label>
            <input type="text" name="videos" value="{{ old('videos') }}" placeholder="e.g. YouTube URL" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
        </div>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Description</h3>
    <div class="mb-6">
        <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Short Description</label>
        <textarea name="short_description" rows="3" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">{{ old('short_description') }}</textarea>
    </div>
    <div class="mb-6">
        <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Full Description</label>
        <textarea name="full_description" id="full_description" rows="5" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">{{ old('full_description') }}</textarea>
    </div>

    <hr class="border-teal-50 my-8">
    <h3 class="text-xl font-heading font-bold text-primary mb-6">Amenities</h3>
    <div id="amenities-container" class="space-y-3 mb-4">
        <div class="flex gap-2 amenity-row">
            <input type="text" name="amenities[]" class="flex-1 border-teal-100 rounded-xl focus:ring-primary text-sm" placeholder="e.g. Swimming Pool">
            <button type="button" class="px-4 py-2 bg-red-50 text-red-500 rounded-xl hover:bg-red-100 transition-colors remove-amenity">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>
    </div>
    <button type="button" id="add-amenity" class="text-sm font-bold text-secondary hover:text-primary transition-colors flex items-center gap-1">
        <i data-lucide="plus" class="w-4 h-4"></i> Add More Amenity
    </button>

    <div class="mt-8 flex justify-end">
        <button type="submit" class="bg-primary text-white px-8 py-3 rounded-xl font-bold hover:bg-primary/90 transition-colors">
            Save Property Details
        </button>
    </div>
</form>

<!-- Include Summernote CSS/JS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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
</script>
@endsection
