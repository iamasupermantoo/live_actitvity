THREE.CSS3DObject=function(e){THREE.Object3D.call(this),this.element=e,this.element.style.position="absolute",this.addEventListener("removed",function(e){null!==this.element.parentNode&&this.element.parentNode.removeChild(this.element)})},THREE.CSS3DObject.prototype=Object.create(THREE.Object3D.prototype),THREE.CSS3DObject.prototype.constructor=THREE.CSS3DObject,THREE.CSS3DSprite=function(e){THREE.CSS3DObject.call(this,e)},THREE.CSS3DSprite.prototype=Object.create(THREE.CSS3DObject.prototype),THREE.CSS3DSprite.prototype.constructor=THREE.CSS3DSprite,THREE.CSS3DRenderer=function(){console.log("THREE.CSS3DRenderer",THREE.REVISION);var r,n,o,l,a=new THREE.Matrix4,i={camera:{fov:0,style:""},objects:{}},c=document.createElement("div");c.style.overflow="hidden",c.style.WebkitTransformStyle="preserve-3d",c.style.MozTransformStyle="preserve-3d",c.style.oTransformStyle="preserve-3d",c.style.transformStyle="preserve-3d",this.domElement=c;var p=document.createElement("div");p.style.WebkitTransformStyle="preserve-3d",p.style.MozTransformStyle="preserve-3d",p.style.oTransformStyle="preserve-3d",p.style.transformStyle="preserve-3d",c.appendChild(p),this.setClearColor=function(){},this.getSize=function(){return{width:r,height:n}},this.setSize=function(e,t){o=(r=e)/2,l=(n=t)/2,c.style.width=e+"px",c.style.height=t+"px",p.style.width=e+"px",p.style.height=t+"px"};function d(e){return Math.abs(e)<Number.EPSILON?0:e}function m(e){var t=e.elements;return"translate3d(-50%,-50%,0) matrix3d("+d(t[0])+","+d(t[1])+","+d(t[2])+","+d(t[3])+","+d(-t[4])+","+d(-t[5])+","+d(-t[6])+","+d(-t[7])+","+d(t[8])+","+d(t[9])+","+d(t[10])+","+d(t[11])+","+d(t[12])+","+d(t[13])+","+d(t[14])+","+d(t[15])+")"}var y=function(e,t){if(e instanceof THREE.CSS3DObject){var r;r=e instanceof THREE.CSS3DSprite?(a.copy(t.matrixWorldInverse),a.transpose(),a.copyPosition(e.matrixWorld),a.scale(e.scale),a.elements[3]=0,a.elements[7]=0,a.elements[11]=0,a.elements[15]=1,m(a)):m(e.matrixWorld);var s=e.element,n=i.objects[e.id];void 0!==n&&n===r||(s.style.WebkitTransform=r,s.style.MozTransform=r,s.style.oTransform=r,s.style.transform=r,i.objects[e.id]=r),s.parentNode!==p&&p.appendChild(s)}for(var o=0,l=e.children.length;o<l;o++)y(e.children[o],t)};this.render=function(e,t){var r=.5/Math.tan(THREE.Math.degToRad(.5*t.fov))*n;i.camera.fov!==r&&(c.style.WebkitPerspective=r+"px",c.style.MozPerspective=r+"px",c.style.oPerspective=r+"px",c.style.perspective=r+"px",i.camera.fov=r),e.updateMatrixWorld(),null===t.parent&&t.updateMatrixWorld(),t.matrixWorldInverse.getInverse(t.matrixWorld);var s="translate3d(0,0,"+r+"px)"+function(e){var t=e.elements;return"matrix3d("+d(t[0])+","+d(-t[1])+","+d(t[2])+","+d(t[3])+","+d(t[4])+","+d(-t[5])+","+d(t[6])+","+d(t[7])+","+d(t[8])+","+d(-t[9])+","+d(t[10])+","+d(t[11])+","+d(t[12])+","+d(-t[13])+","+d(t[14])+","+d(t[15])+")"}(t.matrixWorldInverse)+" translate3d("+o+"px,"+l+"px, 0)";i.camera.style!==s&&(p.style.WebkitTransform=s,p.style.MozTransform=s,p.style.oTransform=s,p.style.transform=s,i.camera.style=s),y(e,t)}};