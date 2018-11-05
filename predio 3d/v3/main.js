// Elemento em que o Three irá renderizar
const container = document.querySelector('.webgl');

// Cena
const scene	= new THREE.Scene();
scene.background = new THREE.Color(0xffffff);
scene.rotation.y = -0.25;

// Camera
const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientWidth, 0.01, 1000);
camera.position.z = 30;
camera.position.y = 10;

// Renderizador
const renderer = new THREE.WebGLRenderer();
renderer.setSize(container.clientWidth, container.clientWidth);
container.appendChild(renderer.domElement);

// Eventos
//const domEvents	= new THREEx.DomEvents(camera, renderer.domElement)
var interaction = new THREE.Interaction(renderer, scene, camera);

// Criar janelas
function edificeWindow(config) {
    // Estrutura
    const boxGeometry = new THREE.BoxGeometry(1, 1, 1);
    // Aparência
    const material = new THREE.MeshBasicMaterial({ color: config.color });

    // Janela
    let window = new THREE.Mesh(boxGeometry, material);
    // Posição
    window.position.x = config.x;
    window.position.y = config.y;
    window.position.z = config.z;

    // Evento de click
    /*domEvents.addEventListener(window, 'click', function() {
        console.log('test') //Não mostra nada no console quando clica em uma janela
        document.querySelector('.info-content').style.display = 'flex';
        document.querySelector('.info-title').style.marginTop = '10vh';
    }, false);*/
    window.on('click', function() {
        console.log('test') //Não mostra nada no console quando clica em uma janela
        document.querySelector('.info-content').style.display = 'flex';
        document.querySelector('.info-title').style.marginTop = '10vh';
    }, false);

    // Material das bordas
    const lineMaterial = new THREE.LineBasicMaterial({ color: 0x92c1b0, linewidth: 1 });
    
    // Cria a borda
    const wireframe = new THREE.LineSegments(new THREE.EdgesGeometry(window.geometry), lineMaterial);
    wireframe.renderOrder = 1;
    window.add(wireframe);

    return window;
}

// Criar bordas
function edificeBorder(config) {
    // Estrutura
    const boxGeometry = new THREE.BoxGeometry(config.w, config.h, 1);

    // Aparência
    const material = [
        new THREE.MeshBasicMaterial({ color: 0x92c1b0, side: THREE.DoubleSide }),
        new THREE.MeshBasicMaterial({ color: 0x92c1b0, side: THREE.DoubleSide }),
        new THREE.MeshBasicMaterial({ color: 0x92c1b0, side: THREE.DoubleSide }),
        new THREE.MeshBasicMaterial({ color: 0x92c1b0, side: THREE.DoubleSide }),
    ];

    // Borda
    let mesh = new THREE.Mesh(boxGeometry, material);
    // Posição
    mesh.position.x = config.x;
    mesh.position.y = config.y;
    mesh.position.z = 3.25;

    // Material das bordas
    const lineMaterial = new THREE.LineBasicMaterial({ color: 0x92c1b0, linewidth: 4 });

    // Cria a borda
    const wireframe = new THREE.LineSegments(new THREE.EdgesGeometry(mesh.geometry), lineMaterial);
    wireframe.renderOrder = 1;
    mesh.add(wireframe);

    return mesh;
}

// Adiciona as janelas na cena
for(const config of windows) {
    scene.add(edificeWindow(config));
}
// Adiciona as bordas na cena
for(const config of border) {
    scene.add(edificeBorder(config));
}

// Prédio
const boxGeometry = new THREE.BoxGeometry(7, 13, 7);
const material = new THREE.MeshBasicMaterial({ color: 0x85b9dd});
let edifice = new THREE.Mesh(boxGeometry, material);
edifice.position.x = 0;
edifice.position.y = 10;
edifice.position.z = 0;
scene.add(edifice);

// Grade: Vertical - Frente
for(let i = -3.5; i < 3.5; i += 0.5) {
    let geometry = new THREE.Geometry();
    geometry.vertices.push(
    new THREE.Vector3(i, 16.5, 3.49),
    new THREE.Vector3(i, 3.5, 3.5)
    );
    let line = new THREE.Line(geometry, new THREE.MeshBasicMaterial({ color: 0x92c1b0 }));
    scene.add(line);
}
// Grade: Horizontal - Frente
for(let i = 3.5; i < 17; i += 0.5) {
    let geometry = new THREE.Geometry();
    geometry.vertices.push(
    new THREE.Vector3(-3.5, i, 3.5),
    new THREE.Vector3(3.5, i, 3.5)
    );
    let line = new THREE.Line(geometry, new THREE.MeshBasicMaterial({ color: 0x92c1b0 }));
    scene.add(line);
}

// Grade: Vertical - Atrás
for(let i = -3.5; i < 3.5; i += 0.5) {
    let geometry = new THREE.Geometry();
    geometry.vertices.push(
    new THREE.Vector3(i, 16.5, -3.5),
    new THREE.Vector3(i, 3.5, -3.5)
    );
    let line = new THREE.Line(geometry, new THREE.MeshBasicMaterial({ color: 0x92c1b0 }));
    scene.add(line);
}
// Grade: Horizontal - Atrás
for(let i = 3.5; i < 17; i += 0.5) {
    let geometry = new THREE.Geometry();
    geometry.vertices.push(
    new THREE.Vector3(-3.5, i, -3.5),
    new THREE.Vector3(3.5, i, -3.5)
    );
    let line = new THREE.Line(geometry, new THREE.MeshBasicMaterial({ color: 0x92c1b0 }));
    scene.add(line);
}

// Grade: Vertical - Esquerda
for(let i = 3.5; i > -4; i -= 0.5) {
    let geometry = new THREE.Geometry();
    geometry.vertices.push(
    new THREE.Vector3(-3.5, 3.5, i),
    new THREE.Vector3(-3.5, 16.5, i)
    );
    let line = new THREE.Line(geometry, new THREE.MeshBasicMaterial({ color: 0x92c1b0 }));
    scene.add(line);
}
// Grade: Horizontal - Esquerda
for(let i = 3.5; i < 17; i += 0.5) {
    let geometry = new THREE.Geometry();
    geometry.vertices.push(
    new THREE.Vector3(-3.5, i, 3.5),
    new THREE.Vector3(-3.5, i, -3.5)
    );
    let line = new THREE.Line(geometry, new THREE.MeshBasicMaterial({ color: 0x92c1b0 }));
    scene.add(line);
}

// Grade: Vertical - Direita
for(let i = 3.5; i > -4; i -= 0.5) {
    let geometry = new THREE.Geometry();
    geometry.vertices.push(
    new THREE.Vector3(3.5, 3.5, i),
    new THREE.Vector3(3.5, 16.5, i)
    );
    let line = new THREE.Line(geometry, new THREE.MeshBasicMaterial({ color: 0x92c1b0 }));
    scene.add(line);
}
// Grade: Horizontal - Direita
for(let i = 3.5; i < 17; i += 0.5) {
    let geometry = new THREE.Geometry();
    geometry.vertices.push(
    new THREE.Vector3(3.5, i, 3.5),
    new THREE.Vector3(3.5, i, -3.5)
    );
    let line = new THREE.Line(geometry, new THREE.MeshBasicMaterial({ color: 0x92c1b0 }));
    scene.add(line);
}

// Movimentação: No foco ou click das setas
const leftArrow = document.querySelector('i.left');
const rightArrow = document.querySelector('i.right');
let move = false;

leftArrow.addEventListener('click', () => {
    move = -0.03;
    setTimeout(() => move = -0.05, 100);
    setTimeout(() => move = -0.07, 200);
    setTimeout(() => move = -0.1, 300);
    setTimeout(() => move = -0.005, 400);
});
leftArrow.addEventListener('mouseover', () => move = -0.005);
leftArrow.addEventListener('mouseleave', () => move = false);

rightArrow.addEventListener('click', () => {
    move = 0.03;
    setTimeout(() => move = 0.05, 100);
    setTimeout(() => move = 0.07, 200);
    setTimeout(() => move = 0.1, 300);
    setTimeout(() => move = 0.005, 400);
});
rightArrow.addEventListener('mouseover', () => move = 0.005);
rightArrow.addEventListener('mouseleave', () => move = false);

// Inicialização da animação
(function animate() {
    requestAnimationFrame(animate);

    if(move) {
        scene.rotation.y += move;
    }

    renderer.render(scene, camera);
})();

document.querySelector('canvas').setAttribute('title', 'Clique em um apartamento para ver mais informações')

document.querySelector('.info-content button').addEventListener('click', function(event) {
    document.querySelector('.info-content').style.display = 'none';
    document.querySelector('.info-title').style.marginTop = '45vh';
});