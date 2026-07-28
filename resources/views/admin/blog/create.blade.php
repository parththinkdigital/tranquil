@extends('layouts.admin')

@section('page-title', 'Create Blog Post')
@push('styles')

<style>
    .blog-editor-shell {
        border: 1px solid #ccfbf1;
        border-radius: 28px;
        overflow: hidden;
        background: linear-gradient(180deg, #ffffff 0%, #f8fffd 100%);
        box-shadow: 0 24px 70px rgba(15, 118, 110, 0.08);
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .blog-editor-shell:focus-within {
        border-color: #14b8a6;
        box-shadow: 0 24px 70px rgba(15, 118, 110, 0.12), 0 0 0 4px rgba(20, 184, 166, 0.12);
    }

    .blog-editor-header {
        background: radial-gradient(circle at top left, rgba(20, 184, 166, 0.18), transparent 34%), #082f2f;
    }

    .note-editor.note-frame {
        border: 0 !important;
        border-radius: 0 !important;
        overflow: hidden;
        background: transparent;
        box-shadow: none !important;
    }

    .note-toolbar {
        background: #f8fffd !important;
        border-bottom: 1px solid #ccfbf1 !important;
        padding: 12px !important;
    }

    .note-btn {
        border-radius: 11px !important;
        border: 1px solid transparent !important;
        background: white !important;
        color: #134e4a !important;
        transition: all 0.2s ease;
        box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
    }

    .note-btn:hover,
    .note-btn.active {
        background: #14b8a6 !important;
        color: white !important;
        border-color: #14b8a6 !important;
    }

    .note-dropdown-menu {
        border-radius: 14px !important;
        border: 1px solid #ccfbf1 !important;
        overflow: hidden;
    }

    .note-editing-area .note-editable {
        background: #ffffff !important;
        color: #134e4a !important;
        padding: 34px 42px 34px 78px !important;
        min-height: 480px;
        font-size: 16px;
        line-height: 1.85;
        font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    .note-placeholder {
        color: #94a3b8 !important;
        padding: 34px 42px 34px 78px !important;
        font-style: italic;
    }

    .note-statusbar {
        display: none !important;
    }

    .note-editable h1,
    .note-editable h2,
    .note-editable h3,
    .note-editable h4,
    .note-editable h5,
    .note-editable h6 {
        color: #042f2e;
        font-weight: 800;
        letter-spacing: -0.03em;
        margin-top: 1.45em;
        margin-bottom: 0.55em;
        position: relative;
    }

    .note-editable h1 { font-size: 34px; line-height: 1.08; }
    .note-editable h2 { font-size: 27px; line-height: 1.16; border-left: 4px solid #14b8a6; padding-left: 14px; }
    .note-editable h3 { font-size: 22px; line-height: 1.25; }
    .note-editable h4 { font-size: 18px; line-height: 1.35; }

    .note-editable h1:hover::before,
    .note-editable h2:hover::before,
    .note-editable h3:hover::before,
    .note-editable h4:hover::before,
    .note-editable h5:hover::before,
    .note-editable h6:hover::before {
        position: absolute;
        left: -54px;
        top: 50%;
        transform: translateY(-50%);
        background: #0f766e;
        color: white;
        font-size: 10px;
        letter-spacing: 0.08em;
        padding: 3px 7px;
        border-radius: 999px;
        font-family: ui-sans-serif, system-ui, sans-serif;
        font-weight: 900;
    }

    .note-editable h1:hover::before { content: "H1"; }
    .note-editable h2:hover::before { content: "H2"; }
    .note-editable h3:hover::before { content: "H3"; }
    .note-editable h4:hover::before { content: "H4"; }
    .note-editable h5:hover::before { content: "H5"; }
    .note-editable h6:hover::before { content: "H6"; }

    .note-editable blockquote {
        border-left: 4px solid #f59e0b;
        background: #fffbeb;
        color: #78350f;
        border-radius: 0 18px 18px 0;
        padding: 18px 22px;
        margin: 24px 0;
    }

    .note-editable img {
        max-width: 100%;
        border-radius: 20px;
        margin: 22px 0;
        box-shadow: 0 18px 50px rgba(15, 23, 42, 0.12);
    }

    .note-editable table {
        width: 100% !important;
        border-collapse: separate;
        border-spacing: 0;
        border-top: 1px solid #ccfbf1 !important;
        border-radius: 16px;
        overflow: hidden;
        margin: 22px 0;
    }

    .note-editable table th,
    .note-editable table td {
        border-color: #ccfbf1 !important;
        padding: 12px 14px !important;
    }

    .note-editable table th {
        background: #f0fdfa;
        color: #134e4a;
    }

    .highlight-text {
        background: #fef3c7;
        color: #78350f;
        padding: 2px 5px;
        border-radius: 7px;
        box-decoration-break: clone;
        -webkit-box-decoration-break: clone;
    }

    @media (max-width: 768px) {
        .note-editing-area .note-editable,
        .note-placeholder {
            padding: 24px !important;
            min-height: 380px;
        }
    }
</style>

@endpush
@section('content')
<div class="max-w-4xl mx-auto space-y-8">

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

                {{-- Tag --}}
                <div>
                    <label for="tag" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">
                        Tag / Category <span class="text-red-400">*</span>
                    </label>
                    <input type="text" name="tag" id="tag" value="{{ old('tag') }}" required
                        placeholder="e.g. Real Estate, Tips, News..."
                        class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary placeholder-primary/30 @error('tag') border-red-300 ring-2 ring-red-100 @enderror">
                    @error('tag')
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

                {{-- Full Article Editor --}}
                <div>
                    <div class="blog-editor-shell @error('long_desc1') border-red-300 ring-2 ring-red-100 @enderror">
                        <div class="blog-editor-header px-6 py-5 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div>
                                <label for="long_desc1" class="block text-[10px] uppercase tracking-[0.24em] font-bold text-teal-100/60 mb-1">
                                    Full Article <span class="text-amber-300">*</span>
                                </label>
                                <p class="text-white font-heading font-bold text-xl tracking-tight">Write the complete post in one focused editor</p>
                            </div>
                            <div id="active-block" class="self-start md:self-auto rounded-full border border-white/15 bg-white/10 px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-teal-50">
                                Block: p
                            </div>
                        </div>
                        <textarea name="long_desc1" id="long_desc1" required>{{ old('long_desc1') }}</textarea>
                    </div>
                    @error('long_desc1')
                    <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
                    @enderror
                    <p class="mt-3 text-[11px] text-primary/35 leading-relaxed">Use headings, quotes, tables, images, and the highlight control for editorial callouts. The content is saved as the main blog body.</p>
                </div>

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
    function previewImage(input, previewId) {
        const preview = document.getElementById(previewId);
        const emptyState = document.getElementById(previewId + '-wrap');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                if (emptyState) {
                    emptyState.classList.add('hidden');
                }
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).ready(function() {
        function wrapSelectionWithTag(tag, className) {
            const selection = window.getSelection();

            if (!selection.rangeCount || selection.isCollapsed) {
                return;
            }

            const range = selection.getRangeAt(0);
            const selectedContent = range.extractContents();
            const element = document.createElement(tag);

            if (className) {
                element.className = className;
            }

            element.appendChild(selectedContent);
            range.insertNode(element);
            range.setStartAfter(element);
            range.collapse(true);
            selection.removeAllRanges();
            selection.addRange(range);

            $('#long_desc1').summernote('triggerEvent', 'change', $('#long_desc1').summernote('code'));
        }

        function updateActiveBlock() {
            const selection = window.getSelection();

            if (!selection.rangeCount) {
                return;
            }

            const node = selection.anchorNode;
            const tag = $(node).closest('h1, h2, h3, h4, h5, h6, p, blockquote, li, td').prop('tagName') || 'p';
            $('#active-block').text('Block: ' + tag.toLowerCase());
        }

        const HighlightButton = function(context) {
            const ui = $.summernote.ui;

            return ui.button({
                contents: '<span class="font-bold">Highlight</span>',
                tooltip: 'Highlight selected text',
                click: function() {
                    wrapSelectionWithTag('span', 'highlight-text');
                }
            }).render();
        };

        $('#long_desc1').summernote({

            height: 480,

            placeholder: 'Start with the story, then shape it with headings, images, quotes, and highlights...',
            followingToolbar: true,
            tabsize: 2,
            disableDragAndDrop: false,
            shortcuts: true,
            buttons: {
                highlight: HighlightButton
            },

            toolbar: [
                ['undo', ['undo', 'redo']],
                ['style', ['style']],
                ['custom', ['highlight']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video', 'hr']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            fontNames: ['Inter', 'Poppins', 'Arial', 'Georgia', 'Helvetica', 'Times New Roman', 'Verdana'],
            fontSizes: ['12', '14', '16', '18', '20', '24', '28', '32', '36', '48'],
            callbacks: {
                onInit: updateActiveBlock,
                onKeyup: updateActiveBlock,
                onMouseup: updateActiveBlock,
                onChange: function(contents) {
                    $('#long_desc1').val(contents);
                },
                onImageUpload: function(files) {
                    Array.from(files).forEach(function(file) {
                        const reader = new FileReader();

                        reader.onload = function(event) {
                            $('#long_desc1').summernote('insertImage', event.target.result, function($image) {
                                $image.css('max-width', '100%');
                                $image.css('border-radius', '20px');
                            });
                        };

                        reader.readAsDataURL(file);
                    });
                }
            }
        });

    });
</script>
@endpush
@endsection
