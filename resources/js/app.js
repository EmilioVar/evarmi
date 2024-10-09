import './bootstrap';
import 'flowbite';

import gsap from 'gsap';
window.gsap = gsap;

Alpine.start();
import { confetti } from '@tsparticles/confetti';
window.confetti = confetti;