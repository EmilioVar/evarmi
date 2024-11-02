<x-layout>
    <!-- header -->
    <header class="h-screen w-screen grid grid-cols-2 dark:text-gray-300 ">
        <section class="md:flex col-span-2 md:col-span-1 justify-center items-center p-10">
            <div id="hello-container" class="space-y-5">
                <p class="text-3xl lg:text-5xl font-bold text-hello opacity-0 jersey-font">
                    ¡Hola!, ¿que tal?
                </p>
                <p class="text-3xl lg:text-5xl font-bold text-hello opacity-0 jersey-font">
                    Soy Emilio Vargas Millán
                </p>
                <p class="text-3xl md:block lg:text-5xl font-bold text-hello opacity-0 jersey-font">
                    y, como puede apreciarse, Full Stack developer
                </p>
                <p
                    class="text-3xl bg-gradient-to-r from-pink-500 to-yellow-500 bg-clip-text text-transparent md:block lg:text-5xl font-bold text-hello opacity-0">
                    ¡BIENVENID@!
                </p>
            </div>
        </section>
        <section class="col-span-2 md:col-span-1 relative">
            <div class="absolute bottom-0 text-hello opacity-0">
                <img class="" src="{{ asset('img/profile_picture.png') }}" alt="">
            </div>
        </section>
    </header>
    <!-- info -->
    <section id="info" class="p-10 space-y-5 ">
        <div class="p-5 bg-gray-50 rounded-md shadow-md space-y-10 dark:bg-gray-900 dark:text-gray-400 ">
            <h4
                class="mb-3 text-3xl text-info font-bold bg-gradient-to-bl from-slate-900 via-slate-400 to-zinc-700 bg-clip-text text-transparent dark:text-gray-300">
                Información básica</h4>
            <p class="text-xl text-info"> Ví el mundo por primera vez un <strong>19 de Julio de 1995</strong>, por lo
                que <span style="color: rgb(0, 170, 255);">según los mágicos cálculos del paquete Carbon para php <span
                        class="text-sm">(en antiguo portafolio momentjs de js)</span> tengo actualmente
                    <span style="color: rgb(0, 170, 255)"
                        class="age">{{ Carbon\Carbon::parse('1995-07-19 00:00:00')->diff(Carbon\Carbon::now())->year }}</span>
                    años.</span> Nací en <span style="color: orange;">Valencia,</span> España, donde resido. </p>
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
            <h4
                class="text-3xl text-technologies opacity-0 font-bold bg-gradient-to-bl from-slate-900 via-slate-400 to-zinc-700 bg-clip-text text-transparent dark:text-gray-300">
                Habilidades y tecnologías</h4>
            <div id="technologies-container"
                class="grid grid-cols-2 md:grid-cols-4 md:grid-rows-2 content-center text-gray-600 font-bold text-sm">
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/laravel.png') }}">
                    <p class="mb-0">Laravel</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/html-5.png') }}">
                    <p class="mb-0">HTML5</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/css-3.png') }}">
                    <p class="mb-0">CSS3</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/js.png') }}">
                    <p class="mb-0">Javascript</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/bootstrap.png') }}">
                    <p class="mb-0">Bootstrap</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="h-14 w-auto my-3 mb-3" src="{{ asset('img/technologies/tailwind.svg') }}">
                    <p class="mb-0">Tailwind</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/php.png') }}">
                    <p class="mb-0">PHP</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/bash.png') }}">
                    <p class="mb-0">Bash</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/mysql.png') }}">
                    <p class="mb-0">MySql</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/mongodb.svg') }}">
                    <p class="mb-0">MongoDB</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/scrum.png') }}">
                    <p class="mb-0">Agile</p>
                </div>
                <div class="technology-icon text-center flex flex-col justify-center items-center scale-0">
                    <img class="size-14 my-3 mb-3" src="{{ asset('img/technologies/alpinejs.png') }}">
                    <p class="mb-0">AlpineJS</p>
                </div>
            </div>
        </div>
    </section>
    <!-- cosas mías -->
    <section id="cosas-mias" class="p-10 space-y-5 ">
        <div
            class="p-5 grid grid-cols-1 md:grid-cols-3 bg-gray-50 rounded-md shadow-md space-y-10 dark:bg-gray-900 dark:text-gray-400">
            <!-- lego -->
            <article class="h-[400px] grid grid-cols-3 relative">
                <div class="absolute top-0 right-0 w-full h-full flex justify-center items-center">
                    <div class="text-center">
                        <h3 class="text-2xl font-semibold">
                            Me gusta montar
                        </h3>
                        <h1 class="text-3xl font-bold">¡LEGOS!</h1>
                    </div>
                </div>
                <div class="col-span-3 z-50 lego-block bg-green-500 three-points">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="col-span-2 z-40 lego-block bg-blue-500 two-points">
                    <span></span><span></span>
                </div>
                <div class="col-span-1 z-30 lego-block bg-red-500 one-point">
                    <span></span>
                </div>
                <div class="col-span-3 z-20 lego-block bg-green-500 three-points">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="col-span-1 z-10 lego-block bg-red-500 one-point">
                    <span></span>
                </div>
                <div class="col-span-2 z-[9] lego-block bg-blue-500 two-points">
                    <span></span><span></span>
                </div>
                <div class="col-span-2 z-[8] lego-block bg-blue-500 two-points">
                    <span></span><span></span>
                </div>
                <div class="cols-span-1 z-[7] lego-block bg-red-500 one-point">
                    <span></span>
                </div>
                <div class="col-span-3 z-[6] lego-block bg-green-500 three-points">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </article>
            <!-- lectura -->
            <article id="lectura" class="m-10 bg-white shadow-md rounded-r-xl border-l-8 border-red-500 relative cosas-mias-item opacity-0">
                <div class="bookmark drop-shadow-xl "></div>
                <div class="p-5 flex justify-center items-center flex-col">
                    <h3 class="text-2xl font-semibold playwrite-font text-black">Leer </h3>
                    <p
                        class="first-line:uppercase first-line:tracking-widest
  first-letter:text-7xl first-letter:font-bold first-letter:text-black
  first-letter:mr-3 first-letter:float-left mt-5 playwrite-font text-black
">
                        Me gusta mucho leer (siempre que el tiempo me lo permite). Los libros que suelo leer son
                        <i>distopías</i>, <i>apologética</i>, <i class="text-red-500">programación</i>, <i>novela
                            histórica</i>, <i> aventuras...</i>
                        <br>
                        En fin, todo lo que me aporte algo y que me entretenga, tengo varias reseñas de libros en <a
                            class="text-blue-500 font-bold" target="_blank"
                            href="https://www.linkedin.com/in/emiliovargasmillan/">mi linkedin</a>
                    </p>
                </div>
            </article>
            <!-- picar-codigo -->
            <article id="picar-codigo" class="relative flex justify-center rounded-md cosas-mias-item opacity-0 min-h-96">
                <p class="text-white z-10 relative text-2xl mt-5">Y, por supuesto... ¡PICAR CÓDIGO!</p>
                <img src="{{ asset('img/programming.gif') }}"
                    class="absolute top-0 right-0 object-cover h-full w-full brightness-[50%] rounded-md"
                    alt="programming-gif">
            </article>
        </div>
    </section>
    <!-- despedida -->
    <section class="dark:text-gray-400 p-10">
        <div class="p-5 bg-gray-50 rounded-md shadow-md space-y-10 dark:bg-gray-900 dark:text-gray-400 ">
            <div class="bg-white dark:bg-gray-900">
                <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">¡Hablemos!</h2>
                    <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Estoy muy agradecido por que hayas dedicado tu valioso tiempo en leer mi pequeña presenstación,<br> Para cualquier cualquier cosa, pegame un toque. ¡Animo! 🚀
                    </p>
                    <livewire:form-contact />
                </div>
              </div>
        </div>
    </section>
    <!-- projects -->
    <x-slot:script>
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

            let options = {
                rootMargin: "0px",
                threshold: 0.25,
            };
            let callbackInfo = function(entries, observer) {
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

            let callbackCosasMias = function(entries, observer) {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        gsap.fromTo('.cosas-mias-item', {
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
                    }
                });
            };

            let callbackTechnologies = function(entries, observer) {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        gsap.fromTo('.text-technologies', {
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

                        gsap.to(".technology-icon", {
                            duration: 2,
                            scale: 1,
                            y: 0,
                            ease: "power1.inOut",
                            stagger: {
                                grid: [2, 4],
                                from: "center",
                                amount: 1
                            }
                        });
                    }
                });
            };

            let callbacklego = function(entries, observer) {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        gsap.to('.lego-block', {
                            y: -500,
                            opacity: 0,
                            stagger: .5,
                            ease: "expoScale(0.5,7,none)",
                        });
                    }
                });
            };

            let infoObserver = new IntersectionObserver(callbackInfo, options);
            let technologiesObserver = new IntersectionObserver(callbackTechnologies, options);
            let cosasMiasObserver = new IntersectionObserver(callbacklego, options);
            let cosasMiasItemObserver = new IntersectionObserver(callbackCosasMias, options);

            const info = document.querySelector("#info");
            const technologies = document.querySelector("#technologies");
            const cosasMias = document.querySelector("#cosas-mias");
            const cosasMiasItem = document.querySelectorAll(".cosas-mias-item");

            infoObserver.observe(info);
            technologiesObserver.observe(technologies);
            cosasMiasObserver.observe(cosasMias);
            cosasMiasItem.forEach(el => {
                cosasMiasItemObserver.observe(el);
            })
        </script>

    </x-slot>
</x-layout>
