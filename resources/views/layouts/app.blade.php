<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Enviroakualita')</title>

    <!-- Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#2B9048',
                            dark: '#146032',
                            light: '#4DB451'
                        },
                        'yellow-main': '#FFB900',
                        'yellow-light': '#FFF664'
                    }
                }
            }
        }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-main: #2B9048;
            --primary-dark: #146032;
            --primary-light: #4DB451;
            --green-main: var(--primary-main);
            --green-dark: var(--primary-dark);
            --green-light: var(--primary-light);
            --yellow-main: #FFB900;
            --yellow-light: #FFF664;
        }
        * {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
            background: #ffffff;
            color: #1f2937;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        button,
        a {
            transition: all 0.3s ease;
        }

        /* Global Container */
        .container-custom {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        @media (min-width: 640px) {
            .container-custom {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            .container-custom {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        @media (min-width: 1024px) {
            .container-custom {
                padding-left: 2.5rem;
                padding-right: 2.5rem;
            }
        }

        /* Section spacing */
        .section-padding {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        @media (min-width: 768px) {
            .section-padding {
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-dark);
            border-radius: 20px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <main class="flex-1 w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
        });
    </script>

</body>
</html>
