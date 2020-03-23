jsondata = new Array();
var str="";
returantname="";
fetch("./parse.json").then(function(data) {
	return data.json();
}).then(function(data){str = data.body.Recommendations[0].RestaurantName;
	console.log(str);
});

