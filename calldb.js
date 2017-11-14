function getgas_station(){
    var name = document.getElementById('........');
    var geom = geometry;
    $.ajax({ url:'getdb.php',
                type:'POST',
                data: { name: id.toString(),geom: geom.toString()},
               success: function(json_data) {
		          var result = json_data.split(',');
		          //point that return from db
    });
}