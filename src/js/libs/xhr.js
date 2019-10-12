const XHR = function(args){
	const request = new XMLHttpRequest();
	request.open(args.method, args.url);
	request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	request.send(args.data);

	Object.keys(args).filter(p => p.substr(0, 2) === 'on').forEach(p => request[p] = args[p]);

	return request;
}