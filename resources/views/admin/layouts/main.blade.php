<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content={{ csrf_token() }}>
    <link rel="icon" href="{{ asset('icon/bk.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style type="text/css">
        .line-4 hr {
            height: 4px;
            border: 0;
            background: black;
        }
        .preloader {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }
        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font: 14px arial;
        }
        .active{
            background-color: #ffffff;
            width: 320px;
            color: #4A797C;
        }
        .input{
            resize: none;
        }
        
    </style>
    @vite('resources/css/app.css')
    <title>{{$title}} - BK SMKN 6 Bandung</title>
</head>
<body>
    @yield('profile')
    <div class="my-10 ml-34 px-10">
        @yield('container')
        @yield('content-detail')
    </div>
    <div class="preloader fixed">
        <div class="text-center loading">
            <img src="../../../../DRing.svg" width="100">
            <p>Loading...</p>
        </div>
    </div>
    <!-- Script jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Toastr Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Preloader Script -->
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <!-- Preloader JS-->
    <script>
        $(document).ready(function(){
        $(".preloader").fadeOut(1000);
        })
    </script>
    <!-- Dropdown -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Date Picker -->
    <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>
    <!-- Selectize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <!-- Jquery Script -->
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Pilih siswa",
                allowClear: true,
            });
        });

        $('.modal-close').on('click', function() {
            $('.modal-close').hide();
            $('.modal').hide();
            window.location.reload()
        });
        
        const options = {
            placement: 'bottom-right',
            backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
            onHide: () => {
                console.log('modal is hidden');
            },
            onShow: () => {
                console.log('modal is shown');
            },
            onToggle: () => {
                console.log('modal has been toggled');
            }
        };

        // Jquery  Siswa
        window.forEditSiswa = (input, evt) => {
            evt.preventDefault();
            console.log("masuk")
            const targetEl = document.getElementById('edit-modal');
            axios.get('/admin/features/siswa-edit/' + $(input).val()).then(response => {
                $("#detail-siswa").html(response.data.html.content)
                const modal = new Modal(targetEl, options);
                modal.show();
            })
            .catch(error => {
                console.log(error)
            })
        }

        window.forShowSiswa = (input, evt) => {
            evt.preventDefault();
            const targetEl = document.getElementById('detail-modal-siswa');
            axios.get('/admin/features/siswa-detail/' + $(input).val()).then(response => {
                $("#show-siswa").html(response.data.html.content)
                const modal = new Modal(targetEl, options);
                modal.show();
            })
            .catch(error => {
                console.log(error)
            })
        }

        window.forDestroySiswa = (input, evt) => {
            evt.preventDefault();
            axios.delete('/siswa-destroy/' + $(input).val()).then(response => {
                window.location.reload()
            })
            .catch(error => {
                console.log(error)
            })
        }

        // Jquery Jurnal
        window.forEditJurnal = (input, evt) => {
            evt.preventDefault();
            const targetEl = document.getElementById('edit-modal');
            axios.get('/admin/features/jurnal-edit/' + $(input).val()).then(response => {
                $("#detail-jurnal").html(response.data.html.content)
                const modal = new Modal(targetEl, options);
                modal.show();
            })
            .catch(error => {
                console.log(error)
            })
        }

        window.forDestroyJurnal = (input, evt) => {
            evt.preventDefault();
            axios.delete('/jurnal-destroy/' + $(input).val()).then(response => {
                window.location.reload()
            })
            .catch(error =>{
                console.log(error)
            })
        }

        // Jquery Visit

        window.forEditVisit = (input, evt) => {
            evt.preventDefault();
            const targetEl = document.getElementById('edit-modal');
            axios.get('/admin/features/visit-edit/' + $(input).val()).then(response => {
                $("#detail-visit").html(response.data.html.content)
                const modal = new Modal(targetEl, options);
                modal.show();
            })
            .catch(error=>{
                console.log(error)
            })
        }

        window.forDetailVisit = (input, evt) => {
            evt.preventDefault();
            const targetEl = document.getElementById('detail-modal');
            axios.get('/admin/features/visit-detail/' + $(input).val()).then(response => {
                $("#show-visit").html(response.data.html.content)
                const modal = new Modal(targetEl, options);
                modal.show();
            })
            .catch(error=>{
                console.log(error)
            })
        }

        window.forDestroyVisit = (input, evt) => {
            evt.preventDefault();
            axios.delete('/visit-destroy/' + $(input).val()).then(response => {
                window.location.reload() 
            })
            .catch(error =>{
                console.log(error)
            })
        }

        // Jquery Individu

        window.forEditIndividual = (input, evt) => {
            evt.preventDefault();
            const targetEl = document.getElementById('edit-modal');
            axios.get('/admin/features/individu-edit/' + $(input).val()).then(response => {
                $("#detail-individu").html(response.data.html.content)
                const modal = new Modal(targetEl, options);
                modal.show();
            })
            .catch(error=>{
                console.log(error)
            })
        }

        window.forDetailIndividual = (input, evt) => {
            evt.preventDefault();
            const targetEl = document.getElementById('detail-modal');
            axios.get('/admin/features/individu-detail/' + $(input).val()).then(response => {
                $("#show-individu").html(response.data.html.content)
                const modal = new Modal(targetEl, options);
                modal.show();
            })
            .catch(error=>{
                console.log(error)
            })
        }

        window.forDestroyIndividual = (input, evt) => {
            evt.preventDefault();
            axios.delete('/individual-destroy/' + $(input).val()).then(response => {
                window.location.reload() 
            })
            .catch(error =>{
                console.log(error)
            })
        }
        
        // Jquery Cases

        window.forEditCases = (input, evt) => {
            evt.preventDefault();
            const targetEl = document.getElementById('edit-modal');
            axios.get('/admin/features/cases-edit/' + $(input).val()).then(response => {
                $("#detail-cases").html(response.data.html.content)
                const modal = new Modal(targetEl, options);
                modal.show();
            })
            .catch(error=>{
                console.log(error)
            })
        }

        window.forDestroyCases = (input, evt) => {
            evt.preventDefault();
            axios.delete('/cases-destroy/' + $(input).val()).then(response => {
                window.location.reload() 
            })
            .catch(error =>{
                console.log(error)
            })
        }

    </script>
    <!-- Live Date -->
    <script>
        const zeroFill = n => {
            return ('0' + n).slice(-2);
        }
            const interval = setInterval(() => {
            const now = new Date();
            const dateTime = zeroFill(now.getUTCDate()) + '-' + zeroFill((now.getMonth() + 1)) + '-' + now.getFullYear();
            document.getElementById('date-time').innerHTML = dateTime;
        }, 1000);
    </script>
    <!-- Toastr Script -->
    <script>
        @if (Session::has('success'))
            toastr.success('{{ Session::get('success') }}')
        @endif
        @if (Session::has('warning'))
            toastr.warning('{{ Session::get('warning') }}')
        @endif
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}')
        @endif
    </script>
    
</body>
</html>