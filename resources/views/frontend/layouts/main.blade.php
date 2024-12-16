@include('frontend.layouts.header')

@yield('content')

@if(Session::has('success'))
<div class="custom-alert position-fixed alert-dismissible fade show" role="alert">
    {{ Session::get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">✕</button>
</div>
@endif

@include('frontend.layouts.footer')


<style>
    
    .custom-alert {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1050;
        background-color: #1f2937; 
        color: #f8f9fa; 
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); 
        font-size: 16px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 10px;
        max-width: 90%;
        min-width: 300px;
        text-align: center;
        border: 1px solid #e63946; 
    }

    /* Close Button Styling */
    .custom-alert .btn-close {
        background: none;
        border: none;
        color: #e63946; 
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        padding: 0;
        margin: 0;
        line-height: 1;
    }

    .custom-alert .btn-close:hover {
        color: #f8d7da; 
    }

    /* Slide-in Animation */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px) translateX(-50%);
        }
        to {
            opacity: 1;
            transform: translateY(0) translateX(-50%);
        }
    }

    .custom-alert {
        animation: slideIn 0.5s ease-out;
    }

    /* Responsive */
    @media (max-width: 576px) {
        .custom-alert {
            font-size: 14px;
            padding: 10px 15px;
        }
    }
</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        document.querySelectorAll('.btn-close').forEach(button => {
            button.addEventListener('click', function () {
                const alertBox = button.closest('.custom-alert');
                if (alertBox) {
                    alertBox.style.display = 'none'; // Hide the alert box
                }
            });
        });
    });
</script>
