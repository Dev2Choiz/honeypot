<!--


alert('test js avec Symfony 2');


function setImgStyle(){
alert('setImgStyle');

var listeImg = function(){
	var i = 0;
	var j = 0;


		for( i = 0 ; i < document.getElementsByTagName('div').length ; i++ ){
			if( document.getElementsByTagName('div')[i].className == 'gauche' ){
				alert('gauche trouvee');
				for( j = 0 ; j < document.getElementsByTagName('div')[i].getElementsByTagName('img').length ; j++ ){
					document.getElementsByTagName('div')[i].getElementsByTagName('img')[j].style.width = 100 + 'px';
					document.getElementsByTagName('div')[i].getElementsByTagName('img')[j].style.height = 100 + 'px';
				}
			}
		}
		return;
	}();

alert('apres listeImg');


}


if ( window.addEventListener ){
window.addEventListener('load',setImgStyle,false);
}
else if ( window.attachevent ){
window.atatchEvent('onload',setImgStyle);
}
-->