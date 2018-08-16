function MyFunc(){

	if(screen.width > 1024){
	window.location.assign("http://localhost/my_gemini_2/home.php");
	}
	else{
		window.location.assign("http://192.168.0.102/my_gemini_2/home.php"); //mobile view running on localhost
	}
}

