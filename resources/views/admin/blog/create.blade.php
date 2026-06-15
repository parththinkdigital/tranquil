@extends('layouts.admin')

@section('page-title', 'Create Blog Post')
@push('styles')

<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

<style>
    /* Main Editor */
    .note-editor.note-frame {
        border: 1px solid #ccfbf1 !important;
        border-radius: 20px !important;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
    }

    /* Toolbar */
    .note-toolbar {
        background: #f0fdfa !important;
        border-bottom: 1px solid #ccfbf1 !important;
        padding: 10px !important;
    }

    /* Toolbar Buttons */
    .note-btn {
        border-radius: 10px !important;
        border: 1px solid #d1fae5 !important;
        background: white !important;
        color: #0f172a !important;
        transition: all 0.2s ease;
    }

    .note-btn:hover {
        background: #14b8a6 !important;
        color: white !important;
        border-color: #14b8a6 !important;
    }

    /* Dropdown */
    .note-dropdown-menu {
        border-radius: 14px !important;
        border: 1px solid #ccfbf1 !important;
        overflow: hidden;
    }

    /* Editable Area */
    .note-editing-area .note-editable {
        background: #ffffff !important;
        color: #0f172a !important;
        padding: 20px !important;
        min-height: 300px;
        font-size: 15px;
        line-height: 1.8;
    }

    /* Placeholder */
    .note-placeholder {
        color: #94a3b8 !important;
    }

    /* Status Bar */
    .note-statusbar {
        background: #f0fdfa !important;
        border-top: 1px solid #ccfbf1 !important;
    }

    /* Focus */
    .note-editor.note-frame:focus-within {
        border-color: #14b8a6 !important;
        box-shadow: 0 0 0 4px rgba(20, 184, 166, 0.12);
    }
</style>

@endpush
@section('content')
<div class="max-w-6xl mx-auto space-y-8">

    {{-- Page Header --}}
    <div class="flex justify-between items-center">
        <div>
            <h3 class="text-2xl font-heading font-bold text-primary italic">Create <span class="text-secondary">Blog Post</span></h3>
            <p class="text-xs text-primary/40 font-bold uppercase tracking-widest mt-1">Fill in all the details below</p>
        </div>
        <a href="{{ route('admin.blogs.index') }}"
            class="text-xs font-bold uppercase tracking-widest text-primary/40 hover:text-primary transition-colors flex items-center gap-2">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Posts
        </a>
    </div>

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        {{-- Section 1: Basic Info --}}
        <div class="bg-white rounded-[32px] p-8 shadow-sm border border-teal-50">
            <div class="flex items-center gap-3 mb-6 pb-4 border-b border-teal-50">
                <div class="w-8 h-8 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <i data-lucide="file-text" class="w-4 h-4 text-secondary"></i>
                </div>
                <h4 class="text-sm font-bold uppercase tracking-widest text-primary">Basic Information</h4>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Title --}}
                <div class="md:col-span-2">
                    <label for="title" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Post Title <span class="text-red-400">*</span>
                    </label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                        placeholder="Enter a compelling blog title..."
                        class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary placeholder-primary/30 @error('title') border-red-300 ring-2 ring-red-100 @enderror">
                    @error('title')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                </div>

                {{-- Category --}}
                <div>
                    <label for="category_id" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Category <span class="text-red-400">*</span>
                    </label>
                    <select name="category_id" id="category_id" required
                        class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary @error('category_id') border-red-300 ring-2 ring-red-100 @enderror">
                        <option value="" disabled selected>Select Category</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->title }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                </div>

                {{-- Event Date --}}
                <div>
                    <label for="event_date" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Event Date <span class="text-primary/30 font-normal normal-case">(optional)</span>
                    </label>
                    <input type="date" name="event_date" id="event_date" value="{{ old('event_date') }}"
                        class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary @error('event_date') border-red-300 ring-2 ring-red-100 @enderror">
                    @error('event_date')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        {{-- Section 2: Images --}}
        <div class="bg-white rounded-[32px] p-8 shadow-sm border border-teal-50">
            <div class="flex items-center gap-3 mb-6 pb-4 border-b border-teal-50">
                <div class="w-8 h-8 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <i data-lucide="image" class="w-4 h-4 text-secondary"></i>
                </div>
                <h4 class="text-sm font-bold uppercase tracking-widest text-primary">Images</h4>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Thumbnail Image --}}
                <div>
                    <label for="image" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Thumbnail Image <span class="text-red-400">*</span>
                    </label>
                    <div class="relative border-2 border-dashed border-teal-200 rounded-xl p-6 text-center hover:border-secondary transition-colors cursor-pointer @error('image') border-red-300 @enderror"
                        onclick="document.getElementById('image').click()">
                        <input type="file" name="image" id="image" accept="image/*" class="hidden" onchange="previewImage(this, 'image-preview')">
                        <div id="image-preview-wrap" class="space-y-2">
                            <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center mx-auto">
                                <i data-lucide="upload-cloud" class="w-5 h-5 text-secondary"></i>
                            </div>
                            <p class="text-xs font-bold text-primary/40 uppercase tracking-widest">Click to upload</p>
                            <p class="text-[10px] text-primary/30">JPEG, PNG, WEBP — max 2MB</p>
                        </div>
                        <img id="image-preview" src="#" alt="Preview" class="hidden w-full h-32 object-cover rounded-lg mt-3">
                    </div>
                    @error('image')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                </div>

                {{-- Banner Image --}}
                <div>
                    <label for="banner_img" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Banner Image <span class="text-red-400">*</span>
                    </label>
                    <div class="relative border-2 border-dashed border-teal-200 rounded-xl p-6 text-center hover:border-secondary transition-colors cursor-pointer @error('banner_img') border-red-300 @enderror"
                        onclick="document.getElementById('banner_img').click()">
                        <input type="file" name="banner_img" id="banner_img" accept="image/*" class="hidden" onchange="previewImage(this, 'banner-preview')">
                        <div id="banner-preview-wrap" class="space-y-2">
                            <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center mx-auto">
                                <i data-lucide="upload-cloud" class="w-5 h-5 text-secondary"></i>
                            </div>
                            <p class="text-xs font-bold text-primary/40 uppercase tracking-widest">Click to upload</p>
                            <p class="text-[10px] text-primary/30">JPEG, PNG, WEBP — max 4MB</p>
                        </div>
                        <img id="banner-preview" src="#" alt="Preview" class="hidden w-full h-32 object-cover rounded-lg mt-3">
                    </div>
                    @error('banner_img')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        {{-- Section 3: Content --}}
        <div class="bg-white rounded-[32px] p-8 shadow-sm border border-teal-50">
            <div class="flex items-center gap-3 mb-6 pb-4 border-b border-teal-50">
                <div class="w-8 h-8 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <i data-lucide="align-left" class="w-4 h-4 text-secondary"></i>
                </div>
                <h4 class="text-sm font-bold uppercase tracking-widest text-primary">Content</h4>
            </div>

            <div class="space-y-6">

                {{-- Short Description --}}
                <div>
                    <label for="short_desc" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Short Description <span class="text-red-400">*</span>
                        <span class="text-primary/30 font-normal normal-case ml-1">(Displayed as intro/subtitle)</span>
                    </label>
                    <textarea name="short_desc" id="short_desc" rows="3" required
                        placeholder="A brief, punchy description of this post..."
                        class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary placeholder-primary/30 resize-none @error('short_desc') border-red-300 ring-2 ring-red-100 @enderror">{{ old('short_desc') }}</textarea>
                    @error('short_desc')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                </div>

                {{-- Short Paragraph --}}
                <div>
                    <label for="short_para" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Short Paragraph <span class="text-red-400">*</span>
                        <span class="text-primary/30 font-normal normal-case ml-1">(Intro body paragraph)</span>
                    </label>
                    <textarea name="short_para" id="short_para" rows="4" required
                        placeholder="Opening paragraph of the blog post..."
                        class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary placeholder-primary/30 resize-y @error('short_para') border-red-300 ring-2 ring-red-100 @enderror">{{ old('short_para') }}</textarea>
                    @error('short_para')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                </div>

                {{-- Long Description 1 --}}
                <div>
                    <label for="long_desc1" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Long Description 1 <span class="text-red-400">*</span>
                        <span class="text-primary/30 font-normal normal-case ml-1">(Main body — first section)</span>
                    </label>
                    <textarea name="long_desc1" id="long_desc1" rows="6" required
                        placeholder="First section of the full article content..."
                        class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary placeholder-primary/30 resize-y @error('long_desc1') border-red-300 ring-2 ring-red-100 @enderror">{{ old('long_desc1') }}</textarea>
                    @error('long_desc1')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                </div>

                {{-- Long Description 2 --}}
                <div>
                    <label for="long_desc2" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Long Description 2 <span class="text-red-400">*</span>
                        <span class="text-primary/30 font-normal normal-case ml-1">(Main body — second section, after banner)</span>
                    </label>
                    <textarea name="long_desc2" id="long_desc2" rows="6" required
                        placeholder="Continuation of the article, shown after the banner image..."
                        class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary placeholder-primary/30 resize-y @error('long_desc2') border-red-300 ring-2 ring-red-100 @enderror">{{ old('long_desc2') }}</textarea>
                    @error('long_desc2')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                </div>

            </div>

            {{-- Tag --}}
            <div class="mt-6">
                <label for="tag" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                    Tags <span class="text-red-400">*</span>
                    <span class="text-primary/30 font-normal normal-case ml-1">(Comma separated tags)</span>
                </label>
                <input type="text" name="tag" id="tag" value="{{ old('tag') }}" required
                    placeholder="e.g. Real Estate, Tips, News..."
                    class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary placeholder-primary/30 @error('tag') border-red-300 ring-2 ring-red-100 @enderror">
                @error('tag')
                <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- Submit --}}
        <div class="flex justify-end gap-4 pb-4">
            <a href="{{ route('admin.blogs.index') }}"
                class="px-6 py-3 rounded-xl border border-teal-100 text-primary/60 text-xs font-bold uppercase tracking-widest hover:border-primary/30 hover:text-primary transition-all">
                Cancel
            </a>
            <button type="submit"
                class="bg-primary hover:bg-secondary text-white text-xs font-bold uppercase tracking-widest px-8 py-3 rounded-xl transition-all shadow-md hover:shadow-lg flex items-center gap-2 group">
                Publish Post <i data-lucide="check" class="w-4 h-4 group-hover:scale-110 transition-transform"></i>
            </button>
        </div>

    </form>
</div>

@push('scripts')

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {

        $('#long_desc1, #long_desc2').summernote({

            height: 350,

            placeholder: 'Write your blog content here...',

            toolbar: [

                ['style', ['style']],

                ['font', [
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    'clear'
                ]],

                ['fontname', ['fontname']],

                ['fontsize', ['fontsize']],

                ['color', ['color']],

                ['para', [
                    'ul',
                    'ol',
                    'paragraph',
                    'height'
                ]],

                ['table', ['table']],

                ['insert', [
                    'link',
                    'picture',
                    'video'
                ]],

                ['view', [
                    'fullscreen',
                    'codeview',
                    'help'
                ]]

            ],

            fontNames: [
                'Arial',
                'Arial Black',
                'Comic Sans MS',
                'Courier New',
                'Helvetica',
                'Impact',
                'Tahoma',
                'Times New Roman',
                'Verdana',
                'Poppins',
                'Inter'
            ],

            fontSizes: [
                '8',
                '9',
                '10',
                '11',
                '12',
                '14',
                '16',
                '18',
                '20',
                '24',
                '28',
                '32',
                '36',
                '48'
            ]

        });

    });
</script>
@endpush
@endsection