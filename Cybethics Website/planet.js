import * as THREE from "https://cdn.skypack.dev/three@0.136.0";
import { OrbitControls } from "https://cdn.skypack.dev/three@0.136.0/examples/jsm/controls/OrbitControls";

addOptionClick();

console.clear();

let scene = new THREE.Scene();
scene.background = new THREE.Color(0x000000);
let camera = new THREE.PerspectiveCamera(60, innerWidth / innerHeight, 1, 1000);
camera.position.set(0, 10, dynamicCameraPoint(innerWidth));
let renderer = new THREE.WebGLRenderer();
renderer.setSize(innerWidth, innerHeight);
const canvasContainer = document.getElementById("canvas-planet-container");
const textNode1 = createTextNode("Tailored Software Solutions Built With Purpose", "fade-in-short-short-delay visible-medium-screen-only");
canvasContainer.appendChild(textNode1);
const textNode2 = createTextNode("Empower Your Vision And Elevate Humanity", "fade-in-short-short-delay visible-medium-screen-only");
canvasContainer.appendChild(textNode2);
canvasContainer.appendChild(renderer.domElement);

let controls = new OrbitControls(camera, renderer.domElement);
controls.enableZoom = false;
controls.enableRotate = true;
controls.enablePan = false;

let gu = {
    time: { value: 0 }
}

let sizes = [];
let shift = [];
let pushShift = () => {
    shift.push(
        Math.random() * Math.PI,
        Math.random() * Math.PI * 2,
        (Math.random() * 0.9 + 0.1) * Math.PI * 0.1,
        Math.random() * 0.9 + 0.1
    );
}
let pts = new Array(40000).fill().map(p => {
    sizes.push(2);
    pushShift();
    return new THREE.Vector3().randomDirection().multiplyScalar(2 + 9.5);
})

let g = new THREE.BufferGeometry().setFromPoints(pts);
g.setAttribute("sizes", new THREE.Float32BufferAttribute(sizes, 1));
g.setAttribute("shift", new THREE.Float32BufferAttribute(shift, 4));
let m = new THREE.PointsMaterial({
    size: 0.125,
    transparent: true,
    depthTest: false,
    blending: THREE.AdditiveBlending,
    onBeforeCompile: shader => {
        shader.uniforms.time = gu.time;
        shader.vertexShader = `
      uniform float time;
      attribute float sizes;
      attribute vec4 shift;
      varying vec3 vColor;
      ${shader.vertexShader}
    `.replace(
            `gl_PointSize = size;`,
            `gl_PointSize = size * sizes;`
        ).replace(
            `#include <color_vertex>`,
            `#include <color_vertex>
        float d = length(abs(position) / vec3(40., 10., 40));
        d = clamp(d, 0., 1.);
        vColor = mix(vec3(227., 155., 0.), vec3(100., 50., 255.), d) / 255.;
      `
        ).replace(
            `#include <begin_vertex>`,
            `#include <begin_vertex>
        float t = time;
        float moveT = mod(shift.x + shift.z * t, PI2);
        float moveS = mod(shift.y + shift.z * t, PI2);
        transformed += vec3(cos(moveS) * sin(moveT), cos(moveT), sin(moveS) * sin(moveT)) * shift.w;
      `
        );
        shader.fragmentShader = `
      varying vec3 vColor;
      ${shader.fragmentShader}
    `.replace(
            `#include <clipping_planes_fragment>`,
            `#include <clipping_planes_fragment>
        float d = length(gl_PointCoord.xy - 0.5);
        //if (d > 0.5) discard;
      `
        ).replace(
            `vec4 diffuseColor = vec4( diffuse, opacity );`,
            `vec4 diffuseColor = vec4( vColor, smoothstep(0.5, 0.1, d)/* * 0.5 + 0.5*/ );`
        );
    }
});
let p = new THREE.Points(g, m);
p.rotation.order = "ZYX";
p.rotation.z = 0.2;
scene.add(p);

let clock = new THREE.Clock();

renderer.setAnimationLoop(() => {
    controls.update();
    let t = clock.getElapsedTime() * 0.5;
    gu.time.value = t * Math.PI;
    p.rotation.y = t * 0.05;
    renderer.render(scene, camera);
});

function dynamicCameraPoint(screenWidth) {
    const xMin = 700;  // or whatever you consider as smallest screen width
    const xMax = 3000; // or whatever you consider as desktop screen width
    const yMin = 35;
    const yMax = 20;

    const result = yMin + (screenWidth - xMin) * (yMax - yMin) / (xMax - xMin);
    console.log(result);
    return result;
}

function createTextNode(text, partType) {
    const textNode = document.createElement("p");
    textNode.innerHTML = text;
    textNode.className = "background-dark canvas-text " + partType;
    return textNode;
}

function addOptionClick() {
    const optionElements = document.getElementsByClassName("option");
    for (const optionElem of optionElements) {
        optionElem.addEventListener('click', function replacePreviousActiveWithNewOne(pointerEvent) {
            const optionElements = document.getElementsByClassName("option");
            console.log("found elements " + optionElements);
            for (const optionElem of optionElements) {
                console.log("looping through elements " + optionElements);
                optionElem.classList.remove("active");
            }
            console.log("loop completed " + optionElements);
            pointerEvent.currentTarget.classList.add("active");
        });
    }
}

var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
        invert: false,
    },
    //autoHeight: true,
    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
    }
});