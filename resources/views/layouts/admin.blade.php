<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('meta_title', 'Admin Dashboard - Tranquilstead')</title>
    <meta name="description" content="Tranquilstead Real Estate Administration">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        .admin-popup-backdrop {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease;
        }

        .admin-popup-backdrop.is-open {
            opacity: 1;
            pointer-events: auto;
        }

        .admin-popup-card {
            opacity: 0;
            transform: translateY(14px) scale(0.98);
            transition: opacity 0.2s ease, transform 0.2s ease;
        }

        .admin-popup-backdrop.is-open .admin-popup-card {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .admin-toast {
            animation: admin-toast-in 0.24s ease-out both;
        }

        .admin-toast.is-leaving {
            animation: admin-toast-out 0.2s ease-in both;
        }

        @keyframes admin-toast-in {
            from { opacity: 0; transform: translateY(-10px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        @keyframes admin-toast-out {
            from { opacity: 1; transform: translateY(0) scale(1); }
            to { opacity: 0; transform: translateY(-10px) scale(0.98); }
        }
    </style>
    @stack('styles')
</head>

<body class="bg-teal-50/30 flex h-screen overflow-hidden font-body">
    @include('components.admin.sidebar')
    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        @include('components.admin.header')
        <main class="flex-1 overflow-y-auto p-12 bg-teal-50/20">
            @yield('content')
        </main>
    </div>

    <div id="admin-toast-root" class="fixed top-6 right-6 z-[90] w-[min(420px,calc(100vw-32px))] space-y-3"></div>

    <div id="admin-confirm-modal" class="admin-popup-backdrop fixed inset-0 z-[100] flex items-center justify-center bg-primary/40 backdrop-blur-sm p-4" aria-hidden="true">
        <div class="admin-popup-card w-full max-w-md rounded-[32px] bg-white border border-teal-50 shadow-2xl shadow-primary/20 overflow-hidden" role="dialog" aria-modal="true" aria-labelledby="admin-confirm-title">
            <div class="p-7">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-red-500 flex items-center justify-center mb-5">
                    <i data-lucide="trash-2" class="w-5 h-5"></i>
                </div>
                <p class="text-[10px] uppercase tracking-[0.24em] font-bold text-red-400 mb-2">Confirm delete</p>
                <h2 id="admin-confirm-title" class="text-2xl font-heading font-bold text-primary tracking-tight">Are you sure?</h2>
                <p id="admin-confirm-message" class="text-sm leading-relaxed text-primary/55 mt-3">This action cannot be undone.</p>
            </div>
            <div class="bg-teal-50/50 px-7 py-5 flex flex-col-reverse sm:flex-row gap-3 sm:justify-end">
                <button type="button" id="admin-confirm-cancel" class="px-5 py-3 rounded-xl border border-teal-100 text-primary/60 hover:text-primary hover:border-primary/20 text-xs font-bold uppercase tracking-widest transition-all">
                    Cancel
                </button>
                <button type="button" id="admin-confirm-submit" class="px-5 py-3 rounded-xl bg-red-500 text-white hover:bg-red-600 text-xs font-bold uppercase tracking-widest transition-all shadow-lg shadow-red-500/20">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();

        window.adminFlashMessages = @json([
            'success' => session('success'),
            'error' => session('error'),
        ]);

        document.addEventListener('DOMContentLoaded', () => {
            const toastRoot = document.getElementById('admin-toast-root');
            const modal = document.getElementById('admin-confirm-modal');
            const message = document.getElementById('admin-confirm-message');
            const cancelButton = document.getElementById('admin-confirm-cancel');
            const submitButton = document.getElementById('admin-confirm-submit');
            let pendingForm = null;

            const toastStyles = {
                success: {
                    icon: 'check-circle-2',
                    label: 'Success',
                    card: 'border-emerald-100 bg-white text-emerald-700',
                    iconWrap: 'bg-emerald-50 text-emerald-500',
                },
                error: {
                    icon: 'alert-triangle',
                    label: 'Needs attention',
                    card: 'border-red-100 bg-white text-red-700',
                    iconWrap: 'bg-red-50 text-red-500',
                },
            };

            function showToast(type, text) {
                if (!text || !toastRoot) {
                    return;
                }

                const style = toastStyles[type] || toastStyles.success;
                const toast = document.createElement('div');
                const iconWrap = document.createElement('div');
                const icon = document.createElement('i');
                const content = document.createElement('div');
                const label = document.createElement('p');
                const body = document.createElement('p');
                const closeButton = document.createElement('button');
                const closeIcon = document.createElement('i');

                toast.className = `admin-toast flex items-start gap-3 rounded-2xl border ${style.card} p-4 shadow-xl shadow-primary/10`;
                iconWrap.className = `w-9 h-9 shrink-0 rounded-xl ${style.iconWrap} flex items-center justify-center`;
                icon.setAttribute('data-lucide', style.icon);
                icon.className = 'w-4 h-4';
                content.className = 'min-w-0 flex-1';
                label.className = 'text-[10px] uppercase tracking-[0.2em] font-bold opacity-60';
                label.textContent = style.label;
                body.className = 'text-sm font-semibold leading-snug mt-0.5';
                body.textContent = text;
                closeButton.type = 'button';
                closeButton.className = 'text-primary/25 hover:text-primary transition-colors';
                closeButton.setAttribute('aria-label', 'Dismiss notification');
                closeIcon.setAttribute('data-lucide', 'x');
                closeIcon.className = 'w-4 h-4';

                iconWrap.appendChild(icon);
                content.append(label, body);
                closeButton.appendChild(closeIcon);
                toast.append(iconWrap, content, closeButton);

                const close = () => {
                    toast.classList.add('is-leaving');
                    window.setTimeout(() => toast.remove(), 180);
                };

                closeButton.addEventListener('click', close);
                toastRoot.appendChild(toast);
                lucide.createIcons();
                window.setTimeout(close, 4200);
            }

            function openConfirm(form) {
                pendingForm = form;
                message.textContent = form.dataset.confirm || 'This action cannot be undone.';
                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
                submitButton.focus();
            }

            function closeConfirm() {
                pendingForm = null;
                modal.classList.remove('is-open');
                modal.setAttribute('aria-hidden', 'true');
            }

            document.querySelectorAll('form[data-confirm]').forEach((form) => {
                form.addEventListener('submit', (event) => {
                    if (form.dataset.confirmed === 'true') {
                        return;
                    }

                    event.preventDefault();
                    openConfirm(form);
                });
            });

            cancelButton.addEventListener('click', closeConfirm);
            modal.addEventListener('click', (event) => {
                if (event.target === modal) {
                    closeConfirm();
                }
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && modal.classList.contains('is-open')) {
                    closeConfirm();
                }
            });

            submitButton.addEventListener('click', () => {
                if (!pendingForm) {
                    return;
                }

                pendingForm.dataset.confirmed = 'true';
                pendingForm.submit();
            });

            showToast('success', window.adminFlashMessages.success);
            showToast('error', window.adminFlashMessages.error);
        });
    </script>
    @stack('scripts')
</body>

</html>
