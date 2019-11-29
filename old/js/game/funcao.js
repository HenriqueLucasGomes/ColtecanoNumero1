function iniciar(){
    var scene=new THREE.Scene()
    var WIDTH=window.innerWidth
    var HEIGHT=window.innerHeight

    
    var camera =  new  THREE.PerspectiveCamera ( 45 , WIDTH/ HEIGHT , 1 , 1000 )
    /*(campo de visão,dimensão da janela [evita a distroção],
    distância da lente em relação ao elemento,limite de distância de renderização)*/
    camera.position.z=500//z=profundidade

    var renderer=new THREE.WebGLRenderer({antilias:true})
    /*({antilias:true}[evita serrilhados])*/
    renderer.setSize(WIDTH, HEIGHT)//renderização igual ao tamanho do browser

    //document.getElementsByTagName('body')[0].appendChild(renderer.domElement)//adicionou a renderização ao body
    document.getElementById("area").appendChild(renderer.domElement)
    renderer.setClearColor(0x1A5A94)

    var geometry=new THREE.BoxGeometry(200,200,200)//altura, largura, profundidade

    var material=new THREE.MeshBasicMaterial({color:0xC9C097,wireframe:true})

    var cube=new THREE.Mesh(geometry,material)

    scene.add(cube)

    renderer.render(scene,camera)

    function render(){
        renderer.render(scene,camera)

        cube.rotation.z+=0.01
        cube.rotation.x+=0.01
        cube.rotation.y+=0.01

        requestAnimationFrame(render)
    }

    render()
}

window.onload=iniciar