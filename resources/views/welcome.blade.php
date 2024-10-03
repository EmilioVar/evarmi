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
    <header class="h-screen w-screen grid grid-cols-2 dark:text-gray-300">
        <section class="md:flex col-span-2 md:col-span-1 justify-center items-center p-10">
            <div id="hello-container" class="space-y-5">
                <p class="text-3xl md:text-5xl font-bold text-hello">
                    ¡Hola!, ¿que tal?
                </p>
                <p class="text-3xl md:text-5xl font-bold text-hello">
                    Soy Emilio Vargas Millán
                </p>
                <p class="hidden md:block md:text-5xl font-bold text-hello">
                    y, como puede apreciarse, Full Stack developer
                    <br>
                    <span class="text-2xl mt-0 pt-0">(Desarrollador de pila completa 😂)</span>
                </p>
            </div>
        </section>
        <section class="col-span-2 md:col-span-1 relative">
            <div class="absolute bottom-0">
                <div class="bocadillo-redondo flex justify-center items-center text-hello">
                    <p class="text-3xl font-bold dark:text-black">Bienvenid@!</p>
                </div>

                <img class="" src="{{ asset('img/profile_picture.png') }}" alt="">
            </div>
        </section>
    </header>
    <!-- info -->
    <section class="p-10 space-y-5">
        <div class="p-5 bg-gray-50 rounded-md shadow-md space-y-10 dark:bg-gray-900 text-gray-400">
            <h4 class="mb-3 text-3xl font-bold"> Información básica</h4>
            <p class="text-xl"> Ví el mundo por primera vez un <strong>19 de Julio de 1995</strong>, por lo que <span
                    style="color: rgb(0, 170, 255);">según los mágicos cálculos de javascript tengo actualmente
                    <span style="color: rgb(0, 170, 255)" class="age">29</span> años.</span> Nací en <span
                    style="color: orange;">Valencia,</span> España, donde resido. </p>
            <p class="text-xl"> Terminé el bachillerato en 2015, y durante mis años de estudiante me quedé enamorado por
                un tema
                que solo tocamos por encima, <strong>el desarrollo web.</strong> Tras ver por primera vez HTML, supe
                que ahí estaba mi futuro.</p>
            <p class="text-xl"> Desde entonces he estado moviendome de aquí para allí realizando trabajos en el ámbito
                de la web y
                adquiriendo experiencia, hasta que finalmente <span style="color: #c33c54">decidí formarme realmente
                    para la profesión que me apasiona, </span>el Desarrollo Web. ❤️</p>
            <p class="text-xl"> Para cumplir mi propósito busqué la mejor manera de aprender, y en parte lo conseguí
                realizando
                estudios de manera autodidacta, pero necesitaba algo más. Fué entonces cuando me apunté al <span
                    style="color: #fff000">bootcamp de desarrollo web Full Stack Hackademy de Aulab,</span> gracias
                al cual he adquirido todas las bases y conocimientos necesarios para poder desarrollarme con
                competencia en el sector 🤓</p>
            <p class="text-xl"> Ahora solo queda camino por recorrer, experiencia que adquirir y metas por cumplir.
                Espero que
                podamos recorrer ese camino juntos.</p>
        </div>
    </section>

    <script type="module">
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

        gsap.to('.box', {
            scrollTrigger: '.box', // start the animation when ".box" enters the viewport (once)
            x: 500
        });
    </script>
</body>

</html>
