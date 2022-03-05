<?php
$data = date('d.m.Y H:i');
?>
<html>
	<head>
		<title>Fallout 3 Radio</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<script src="/Fo3_Radio/wimpy/wimpy.js"></script>
		<div class="container">
			<div class="row d-flex flex-row-reverse">
				<div class="col-2">
					<?php echo $data ?>
				</div>
				<div class="col">
					The Capital Wasteland
				</div>
				<div class="col">

				</div>
				<div class="col">
					Fallout 3 Radio
				</div>
			</div>
			<div
				style="width:100%;height:100%;"
				data-wimpyplayer
				data-skin="/Fo3_Radio/wimpy/Fo3_test.tsv"
				data-responsive="1"
				data-autoPlay="1"
				data-getid3="1"
				data-downloadEnable="1"
				data-linkEnable="1"
				data-media='[
				{
				"title":"A Wonderful Guy",
				"file":"fo3_ost/Fallout 3 Soundtrack - A Wonderful Guy.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"America",
				"file":"fo3_ost/Fallout 3 Soundtrack - America.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Anything Goes",
				"file":"fo3_ost/Fallout 3 Soundtrack - Anything Goes.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Battle Hymn of the Republic",
				"file":"fo3_ost/Fallout 3 Soundtrack - Battle Hymn of the Republic.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Boogie Man",
				"file":"fo3_ost/Fallout 3 Soundtrack - Boogie Man.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Butcher Pete",
				"file":"fo3_ost/Fallout 3 Soundtrack - Butcher Pete.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Dear Hearts and Gentle People",
				"file":"fo3_ost/Fallout 3 Soundtrack - Dear Hearts and Gentle People.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Dixie",
				"file":"fo3_ost/Fallout 3 Soundtrack - Dixie.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Easy Living",
				"file":"fo3_ost/Fallout 3 Soundtrack - Easy Living.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Fox Boggie",
				"file":"fo3_ost/Fallout 3 Soundtrack - Fox Boggie.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Hail Columbia",
				"file":"fo3_ost/Fallout 3 Soundtrack - Hail Columbia.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Halls of Montezuma",
				"file":"fo3_ost/Fallout 3 Soundtrack - Halls of Montezuma.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Happy Times",
				"file":"fo3_ost/Fallout 3 Soundtrack - Happy Times.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"I dont want to set the World on Fire",
				"file":"fo3_ost/Fallout 3 Soundtrack - I dont want to set the World on Fire.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Im Tickled Pink",
				"file":"fo3_ost/Fallout 3 Soundtrack - Im Tickled Pink.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Into Each Life Some Rain Must Fall",
				"file":"fo3_ost/Fallout 3 Soundtrack - Into Each Life Some Rain Must Fall.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Jazzy Interlude",
				"file":"fo3_ost/Fallout 3 Soundtrack - Jazzy Interlude.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Jolly Days",
				"file":"fo3_ost/Fallout 3 Soundtrack - Jolly Days.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Lets Go Sunning",
				"file":"fo3_ost/Fallout 3 Soundtrack - Lets Go Sunning.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Maybe",
				"file":"fo3_ost/Fallout 3 Soundtrack - Maybe.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Mighty Mighty Man",
				"file":"fo3_ost/Fallout 3 Soundtrack - Mighty Mighty Man.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Rhythm for You",
				"file":"fo3_ost/Fallout 3 Soundtrack - Rhythm for You.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Stars and Stripes Forever",
				"file":"fo3_ost/Fallout 3 Soundtrack - Stars and Stripes Forever.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Swing Doors",
				"file":"fo3_ost/Fallout 3 Soundtrack - Swing Doors.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"The Washington Post",
				"file":"fo3_ost/Fallout 3 Soundtrack - The Washington Post.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Way Back Home",
				"file":"fo3_ost/Fallout 3 Soundtrack - Way Back Home.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Yankee Doodle",
				"file":"fo3_ost/Fallout 3 Soundtrack - Yankee Doodle.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"The Wasteland",
				"file":"fo3_ost/Fallout 3 soundtrack Into The Wasteland.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Main Title",
				"file":"fo3_ost/Fallout 3 soundtrack Main Title.mp3",
				"image":"fo3_ost/cover.jpg"
				},
				{
				"title":"Megaton",
				"file":"fo3_ost/Fallout 3 soundtrack Megaton.mp3",
				"image":"fo3_ost/cover.jpg"
				}
										]'
				>
			</div>
		</div>
	</body>
</html>
