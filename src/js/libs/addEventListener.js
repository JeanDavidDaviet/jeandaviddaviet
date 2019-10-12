NodeList.prototype.addEventListener = function(event, callback){
	for(const element of this){
		element.addEventListener(event, callback);
	}
}