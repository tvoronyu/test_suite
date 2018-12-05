const grid = new Muuri(".grid", {

  // hideDuration :  300 ,
  // showEasing  : 'cubic-bezier(0.215, 0.61, 0.355, 1)'
 
});
	$('#but').click(function (argument) {

		alert("fd");
	})
	
	$(".btn").click(function () {

		var data = prompt();
    if (data != null){

        var request = new XMLHttpRequest();
        var data_2 = encodeURIComponent(data);

        request.onreadystatechange = function () {
            // if (request.readyState == '1'){
            //     // setTimeout(loadfunction,1000);
            //     setTimeout(function () {
            //         if (request.readyState == '1'){
            //             load.setAttribute('style', 'position: absolute;');
            //         }
            //     }, 200);
            //     console.log('wait!');
            // }
            // if (request.readyState == '4'){
            //     load.setAttribute('style', 'position: absolute;display: none;');
            //     console.log('Success!');
            // }
            if (request.readyState == '4' && request.status == '200'){
               var newElems = generateElements(data);
                var newItems = grid.add(newElems);
            }
        }

        request.open('POST', '/notes/add');
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        request.send('notes_text='+data_2);

        // alert(param);


        
    }
    

});


	function generateElements(data) {

    var ret = [];

      var itemElem = document.createElement('div');
      var itemTemplate = '' +
          '<div class="item">' +
            '<div class="item-content">' +
            	'<div style="">' +
            		'No Name' +
            		'<hr style="margin: 0px">' +
            	'</div>' +
            	'<div style="padding: 10px 10px">' +
            		data +
            	'</div>' +
            '</div>' +
          '</div>';

      itemElem.innerHTML = itemTemplate;
      ret.push(itemElem.firstChild);

    return ret;
}