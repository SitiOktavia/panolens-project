import './bootstrap';
import 'https://cdnjs.cloudflare.com/ajax/libs/three.js/105/three.min.js';
import './panolens.min.js';

const panoImage = document.querySelector('.pano-image');

const panorama1 = new PANOLENS.ImagePanorama( 'img/museum1.jpg' );
const panorama2 = new PANOLENS.ImagePanorama( 'img/room-infospot.jpg' );

var infospotPositions = [
    new THREE.Vector3(-2136.06, -300.30, 90.14),
    new THREE.Vector3(-3136.06, 296.30, -4290.14),  
  ];

panorama1.link( panorama2, infospotPositions[0]);
panorama2.link( panorama1, infospotPositions[1]);

// Create an infospot
var infospot = new PANOLENS.Infospot(350, PANOLENS.DataImage.Info);
infospot.position.set(-4886, 760, -250);
panorama1.add(infospot);
infospot.addHoverText('Additional information',-50);

const viewer = new PANOLENS.Viewer({
    container: panoImage,
    controlBar: true,
});

viewer.add( panorama1,panorama2 );
