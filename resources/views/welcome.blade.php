<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emilio Vargas Millán</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark:bg-black">
    <!-- header -->
    <header class="h-screen w-screen grid grid-cols-2 dark:text-gray-300 ">
        <section class="md:flex col-span-2 md:col-span-1 justify-center items-center p-10">
            <div id="hello-container" class="space-y-5">
                <p class="text-3xl lg:text-5xl font-bold text-hello">
                    ¡Hola!, ¿que tal?
                </p>
                <p class="text-3xl lg:text-5xl font-bold text-hello">
                    Soy Emilio Vargas Millán
                </p>
                <p class="text-3xl md:block lg:text-5xl font-bold text-hello">
                    y, como puede apreciarse, Full Stack developer
                </p>
                <p class="text-3xl bg-gradient-to-r from-pink-500 to-yellow-500 bg-clip-text text-transparent md:block lg:text-5xl font-bold text-hello">
                    ¡BIENVENID@!
                </p>
            </div>
        </section>
        <section class="col-span-2 md:col-span-1 relative">
            <div class="absolute bottom-0 text-hello">
                <img src="{{ asset('img/profile_picture.png') }}" alt="">
            </div>
        </section>
    </header>
    <!-- info -->
    <section id="info" class="p-10 space-y-5 ">
        <div class="p-5 bg-gray-50 rounded-md shadow-md space-y-10 dark:bg-gray-900 dark:text-gray-400 ">
            <h4 class="mb-3 text-3xl text-info font-bold bg-gradient-to-bl from-slate-900 via-slate-400 to-zinc-700 bg-clip-text text-transparent dark:text-gray-300"> Información básica</h4>
            <p class="text-xl text-info"> Ví el mundo por primera vez un <strong>19 de Julio de 1995</strong>, por lo
                que <span style="color: rgb(0, 170, 255);">según los mágicos cálculos del paquete Carbon para php <span class="text-sm">(en antiguo portafolio momentjs de js)</span> tengo actualmente
                    <span style="color: rgb(0, 170, 255)" class="age">{{ Carbon\Carbon::parse('1995-07-19 00:00:00')->diff(Carbon\Carbon::now())->year }}</span> años.</span> Nací en <span
                    style="color: orange;">Valencia,</span> España, donde resido. </p>
            <p class="text-xl text-info"> Terminé el bachillerato en 2015, y durante mis años de estudiante me quedé
                enamorado por
                un tema
                que solo tocamos por encima, <strong>el desarrollo web.</strong> Tras ver por primera vez HTML, supe
                que ahí estaba mi futuro.</p>
            <p class="text-xl text-info"> Desde entonces he estado moviendome de aquí para allí realizando trabajos
                en el ámbito
                de la web y
                adquiriendo experiencia, hasta que finalmente <span style="color: #c33c54">decidí formarme realmente
                    para la profesión que me apasiona, </span>el Desarrollo Web. ❤️</p>
            <p class="text-xl text-info"> Para cumplir mi propósito busqué la mejor manera de aprender, y en parte lo
                conseguí
                realizando
                estudios de manera autodidacta, pero necesitaba algo más. Fué entonces cuando me apunté al <span
                    style="color: red">bootcamp de desarrollo web Full Stack Hackademy de Aulab,</span> gracias
                al cual he adquirido todas las bases y conocimientos necesarios para poder desarrollarme con
                competencia en el sector 🤓</p>
            <p class="text-xl text-info"> Ahora solo queda camino por recorrer, experiencia que adquirir y metas por
                cumplir.
                Espero que
                podamos recorrer ese camino juntos.</p>
        </div>
    </section>
    <!-- skills -->
    <section id="technologies" class="p-10 space-y-5">
        <div class="p-5 bg-gray-50 rounded-md shadow-md space-y-10 dark:bg-gray-900 dark:text-gray-400 ">
            <h4 class="text-3xl text-info font-bold bg-gradient-to-bl from-slate-900 via-slate-400 to-zinc-700 bg-clip-text text-transparent dark:text-gray-300">Habilidades</h4>
            <div id="technologies-container" class="grid grid-cols-2 md:grid-cols-4 md:grid-rows-2 content-center">
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img width="80px" class="my-3 mb-3" src="{{ asset('img/technologies/laravel.png') }}">
                    <p class="mb-0">Laravel</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img width="80px" class="my-3 mb-3" src="{{ asset('img/technologies/html-5.png') }}">
                    <p class="mb-0">HTML5</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img width="80px" class="my-3 mb-3" src="{{ asset('img/technologies/css-3.png') }}">
                    <p class="mb-0">CSS3</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img width="80px" class="my-3 mb-3" src="{{ asset('img/technologies/js.png') }}">
                    <p class="mb-0">Javascript</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img width="80px" class="my-3 mb-3" src="{{ asset('img/technologies/bootstrap.png') }}">
                    <p class="mb-0">Bootstrap</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img width="80px" class="my-3 mb-3" src="{{ asset('img/technologies/tailwind.png') }}">
                    <p class="mb-0">Tailwind</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img width="80px" class="my-3 mb-3" src="{{ asset('img/technologies/php.png') }}">
                    <p class="mb-0">PHP</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img width="80px" class="my-3 mb-3" src="{{ asset('img/technologies/bash.png') }}">
                    <p class="mb-0">Bash</p>
                </div>
            </div>
        </div>
    </section>
    <script type="module">

gsap.to(".technology-icon", {
  duration: 1,
  scale: 1,
  y: 0,
  ease: "power1.inOut",
  stagger: {
    grid: [2,4],
    from: "edges",
    amount: .5
  }
}); 
        function animateParagraphs() {
            gsap.fromTo('.text-hello', {
                    opacity: 0,
                    x: -20
                }, // Estado inicial
                {
                    opacity: 1,
                    x: 0,
                    duration: 1,
                    stagger: 1, // Tiempo entre animaciones
                    onComplete: () => {
                        const duration = 2 * 1000,
                            animationEnd = Date.now() + duration,
                            defaults = {
                                startVelocity: 30,
                                spread: 360,
                                ticks: 60,
                                zIndex: 0
                            };

                        function randomInRange(min, max) {
                            return Math.random() * (max - min) + min;
                        }

                        const interval = setInterval(function() {
                            const timeLeft = animationEnd - Date.now();

                            if (timeLeft <= 0) {
                                return clearInterval(interval);
                            }

                            const particleCount = 50 * (timeLeft / duration);

                            // since particles fall down, start a bit higher than random
                            confetti(
                                Object.assign({}, defaults, {
                                    particleCount,
                                    origin: {
                                        x: randomInRange(0.1, 0.3),
                                        y: Math.random() - 0.2
                                    },
                                })
                            );
                            confetti(
                                Object.assign({}, defaults, {
                                    particleCount,
                                    origin: {
                                        x: randomInRange(0.7, 0.9),
                                        y: Math.random() - 0.2
                                    },
                                })
                            );
                        }, 250);
                    }
                });
        }

        animateParagraphs();

        let options = {
            rootMargin: "0px",
            threshold: 0.25,
        };

        var callback = function(entries, observer) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    gsap.fromTo('.text-info', {
                            opacity: 0,
                            y: 20
                        }, // Estado inicial
                        {
                            opacity: 1,
                            y: 0,
                            duration: 1,
                            stagger: .3, // Tiempo entre animaciones
                        }
                    );
                } else {
                    gsap.fromTo('.text-info', {
                            opacity: 1,
                            y: 0
                        }, // Estado inicial
                        {
                            opacity: 0,
                            y: 20,
                            duration: 1,
                            stagger: .3, // Tiempo entre animaciones
                        }
                    );
                }
            });
        };


        let observer = new IntersectionObserver(callback, options);

        var target = document.querySelector("#info");
        observer.observe(target);
    </script>
</body>

</html>
